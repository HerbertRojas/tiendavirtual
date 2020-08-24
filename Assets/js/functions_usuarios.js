var tableUsuarios;

document.addEventListener('DOMContentLoaded', function(){

	tableUsuarios = $('#tableUsuarios').dataTable( {
		"aProcessing":true,
		"aServerSite":true,
		"language": {
			"url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
		},
		"ajax":{
			"url":" "+base_url+"/Usuarios/getUsuarios",
			"dataSrc":""
		},
		"columns":[
			{"data":"idusuario"},
			{"data":"dni"},
			{"data":"nombres"},
			{"data":"apellidos"},
			{"data":"telefono"},
			{"data":"email"},
			{"data":"nombrerol"},
			{"data":"status"},
			{"data":"options"}
		],
		"resonsive":true,
		"autoWidth": false,
		"bDestroy":true,
		"iDisplayLength":5,
		"lengthMenu": [5, 10, 20, 50, 100],
		"order":[[0,"desc"]]
	});	


});

$("#tableUsuarios").DataTable();

window.addEventListener('load', function(){
	fntRolesUsuario();
}, false);

function fntRolesUsuario(){
	var ajaxUrl = base_url+'/Roles/getSelectRoles';
	var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	request.open("GET",ajaxUrl,true);
	request.send();

	request.onreadystatechange =function(){
		if (request.readyState == 4 && request.status == 200) {
			document.querySelector('#listRolid').innerHTML = request.responseText;
			document.querySelector('#listRolid').value = 1;
			$('#listRolid').select2();
		}
	}
}


//Initialize Select2 Elements
//$('.select2').select2();
 

function openModal()
{
	$('#modalFormUsuario').modal('show');
	$('.rol-guardar').val('nuevo');
};

$( ".usuario-guardar" ).on( "click", function() {

	var txtDNI = $('#txtDNI').val()
	var txtNombres = $('#txtNombres').val()
	var txtApellidos  = $('#txtApellidos').val()
	var txtTelefono = $('#txtTelefono').val()
	var txtEmail = $('#txtEmail').val()
	var txtContrasena = $('#txtContrasena').val()
	var listEstado = $('#listEstado').val()
	var listRol = $('#select2-listRolid-container').prop('title')
	// var listRol = 'Cliente'

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
				url:base_url+'/Usuarios/insertarUsuario',
				type:'POST',
				data:fromData,
				processData: false,
    			contentType: false,
				success:function(respuesta){
					//Depuracion de variables 
					//console.log(respuesta)
					if(respuesta>=1)
					{
						$('#modalFormUsuario').modal('hide');
						Swal.fire({
							icon:'success',
							title:'Usuarios',
							text:'Usuario reguistrado Exitósamente'
						}).then((response) => {
							if(response.value){							
								window.location.href='usuarios'
							}
						})
					}
				}
			})
		} 
		// else {
		// 	$.ajax({
		// 		url:base_url+'/Roles/actualizarRol',
		// 		type:'POST',
		// 		data:{
		// 			strNombre:strNombre,
		// 			strDescripcion:strDescripcion,
		// 			listStatus:listStatus,
		// 			idRol:idRol
		// 		},
		// 		success:function(respuesta) {
		// 			if(respuesta==1)
		// 			{
		// 				$('#modalFormRol').modal('hide');
		// 				Swal.fire({
		// 					icon:'success',
		// 					title:'Roles',
		// 					text:'Rol Actualizado Exitósamente'
		// 				}).then((response) => {
		// 					if(response.value){							
		// 						window.location.href='roles'
		// 					}
		// 				})						
		// 			}
		// 		}
		// 	})
		// }
		
	}
}); 