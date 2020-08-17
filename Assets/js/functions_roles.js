
var tableRoles;

document.addEventListener('DOMContentLoaded', function(){

	tableRoles = $('#tableRoles').dataTable( {
		"aProcessing":true,
		"aServerSite":true,
		"language": {
			"url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
		},
		"ajax":{
			"url":" "+base_url+"/Roles/getRoles",
			"dataSrc":""
		},
		"columns":[
			{"data":"idrol"},
			{"data":"nombrerol"},
			{"data":"descripcion"},
			{"data":"status"},
			{"data":"options"}
		],
		"resonsive":"true",
		"bDestroy":true,
		"iDisplayLength":5,
		"lengthMenu": [5, 10, 20, 50, 100],
		"order":[[0,"desc"]]
	});	
});

$( ".rol-guardar" ).on( "click", function() {
  	var strNombre = $('#txtNombre').val()
	var strDescripcion =$('#txtDescripcion').val()
	var listStatus = $('#listStatus').val();
	var idRol = $('#idRol').val();

	if (strNombre == '' || strDescripcion == '' ||listStatus == '')
	{
		Swal.fire({
			icon: 'error',
			title: 'Oops...',
			text: 'Something went wrong!',
			footer: '<a href>Why do I have this issue?</a>'
		})
	}
	else
	{
		if($(this).val() == 'nuevo')
		{
			$.ajax({
				url:base_url+'/Roles/insertarRol',
				type:'POST',
				data:{
					strNombre:strNombre,
					strDescripcion:strDescripcion,
					listStatus:listStatus
				},
				success:function(respuesta) {
					if(respuesta>=1)
					{
						$('#modalFormRol').modal('hide');
						Swal.fire({
							icon:'success',
							title:'Roles',
							text:'Rol Guardado Exitósamente'
						}).then((response) => {
							if(response.value){							
								window.location.href='roles'
							}
						})
						
					}
				}

			})
		} else {
			$.ajax({
				url:base_url+'/Roles/actualizarRol',
				type:'POST',
				data:{
					strNombre:strNombre,
					strDescripcion:strDescripcion,
					listStatus:listStatus,
					idRol:idRol
				},
				success:function(respuesta) {
					if(respuesta==1)
					{
						$('#modalFormRol').modal('hide');
						Swal.fire({
							icon:'success',
							title:'Roles',
							text:'Rol Actualizado Exitósamente'
						}).then((response) => {
							if(response.value){							
								window.location.href='roles'
							}
						})						
					}
				}
			})
		}
		
	}
}); 

$("#tableRoles").DataTable();

function openModal(){
	$('#modalFormRol').modal('show');
	$('.rol-guardar').val('nuevo');
};

function editarRole(idRol) {
	//OBTENER DATOS DEL IDROL SELECCIONADO
	$.ajax({
		url:base_url+'/Roles/getRole',
		type:'GET',
		data:{
			idRol:idRol
		},
		success:function(respuesta) {
			let role =  JSON.parse(respuesta)
			if(role)
			{
				$('#modalFormRol').modal('show');
				$('.modal-title').html('Editar Rol')
				$('.rol-guardar').val('editar');
				$('#idRol').val(role.idrol)
				$('#txtNombre').val(role.nombrerol)
				$('#txtDescripcion').val(role.descripcion)	
				$('#listStatus').val(role.status)				
			}
			
		}
	})	
}

function eliminarRol(idRol)
{
	Swal.fire({
		title: 'Estás Seguro de eliminar el Rol?',
		text: "No podrás revertirlo!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Sí',
		cancelButtonText: 'No',
		reverseButtons: true
	}).then((result) => {
		if (result.value) {
			$.ajax({
				url:base_url+'/Roles/eliminarRol',
				type:'POST',
				data:{
					idRol:idRol
				},
				success:function(respuesta) {
					if(respuesta == 1)
					{
						$('#modalFormRol').modal('hide');
						Swal.fire({
							icon:'success',
							title:'Roles',
							text:'Rol Eliminado Exitósamente'
						}).then((response) => {
							if(response.value){							
								window.location.href='roles'
							}
						})
					}
				}
			})
		} else if(result.dismiss === Swal.DismissReason.cancel) {
			$('#modalFormRol').modal('hide');
		}
	})
}