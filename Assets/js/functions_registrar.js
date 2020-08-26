
$( ".registrar-guardar" ).on( "click", function() {

	var txtDNI = $('#txtDNI').val()
	var txtNombres = $('#txtNombres').val()
	var txtApellidos  = $('#txtApellidos').val()
	var txtTelefono = $('#txtTelefono').val()
	var txtEmail = $('#txtEmail').val()
	var txtContrasena = $('#txtContrasena').val()
	var listEstado = 1
	var listRol = 'Cliente'

	if (txtDNI=='' || txtDNI==null)
	{
		Swal.fire({
			icon: 'error',
			title: 'Validación',
			text: 'Debe Ingresar el DNI',
		})
	}
	else if (txtNombres=='' || txtNombres==null){
		Swal.fire({
			icon: 'error',
			title: 'Validación',
			text: 'Debe Ingresar tus Nombres',
		})
	}
	else if (txtApellidos=='' || txtApellidos==null){
		Swal.fire({
			icon: 'error',
			title: 'Validación',
			text: 'Debe Ingresar tus Apellidos',
		})
	}
	else if (txtTelefono=='' || txtTelefono==null){
		Swal.fire({
			icon: 'error',
			title: 'Validación',
			text: 'Debe Ingresar tu Telefono',
		})
	}
	else if (txtEmail=='' || txtEmail==null){
		Swal.fire({
			icon: 'error',
			title: 'Validación',
			text: 'Debe Ingresar tu Email',
		})
	}
	else if (txtContrasena=='' || txtContrasena==null){
		Swal.fire({
			icon: 'error',
			title: 'Validación',
			text: 'Debe Ingresar tus Contraseña',
		})
	} 
	else{
		if($(this).val() == 'nuevo')
		{
			var fromData = new FormData();
			fromData.append('txtDNI',txtDNI)
			fromData.append('txtNombres',txtNombres)
			fromData.append('txtApellidos',txtApellidos)
			fromData.append('txtTelefono',txtTelefono)
			fromData.append('txtEmail',txtEmail)
			fromData.append('txtContrasena',txtContrasena)
			fromData.append('listRol',listRol)
			fromData.append('listEstado',listEstado)
			//fromData.append('imagenProducto',imagenProducto) 
			$.ajax({
				url:base_url+'/Registrar/insertarRegistro',
				type:'POST',
				data:fromData,
				processData: false,
    			contentType: false,
				success:function(respuesta){
					//Depuracion de variables 
					//console.log(respuesta)
					if(respuesta>=1)
					{
						Swal.fire({
							icon:'success',
							title:'Usuarios',
							text:'Usuario reguistrado Exitósamente'
						}).then((response) => {
							if(response.value){							
								window.location.href='login'
							}
						})
					}
				}
			})
		}
	}
}); 

function registrar(){
	window.location.href='registrar'
}