$( ".boton-login" ).on( "click", function() {
	let email_user = $('#email').val()
	let contrasena = $('#password').val()

	if(email_user=='' || email_user==null )
	{
		alert('Debe Ingresar el Correo Electrónico','Validación')
	} 
	else if(contrasena=='' || contrasena==null )
	{
		alert('Debe Ingresar la Contraseña','Validación')
	} else {
		var fromData = new FormData();
			fromData.append('email_user',email_user)
			fromData.append('contrasena',contrasena)

		$.ajax({
				url: base_url+'/Login/verificarUsuario',
				type:'POST',
				data:fromData,
				processData: false,
    			contentType: false,
				success:function(respuesta){
					if(respuesta == 2)
					{
						window.location.href='home'
					} else {
						window.location.href='administrador'
					}
				}
			})
	}
})

function cerrarSesion()
{
	$.ajax({
		url: base_url+'/Login/cerrarSesion',
		type:'POST',
		processData: false,
		contentType: false,
		success:function(respuesta){
			if(respuesta == 1)
			{
				window.location.href='home'
			}
		}
	})
}