
// var tableUsuarios;

// document.addEventListener('DOMContentLoaded', function(){

// 	tableUsuarios = $('#tableUsuarios').dataTable( {
// 		"aProcessing":true,
// 		"aServerSite":true,
// 		"language": {
// 			"url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
// 		},
// 		"ajax":{
// 			"url":" "+base_url+"/Usuariios/getUsuarios",
// 			"dataSrc":""
// 		},
// 		"columns":[
// 			{"data":"idusuario"},
// 			{"data":"nombre"},
// 			{"data":"apellido"},
// 			{"data":"telefono"},
// 			{"data":"email"},
// 			{"data":"idrol"},
// 			{"data":"status"},
// 			{"data":"options"}
// 		],
// 		"resonsive":true,
// 		"autoWidth": false,
// 		"bDestroy":true,
// 		"iDisplayLength":5,
// 		"lengthMenu": [5, 10, 20, 50, 100],
// 		"order":[[0,"desc"]]
// 	});	
// });


// $("#tableUsuarios").DataTable();

function openModal()
{
	document.querySelector('#idUsuario').value = "";
	document.querySelector('.modal-header').classList remplace("headerUpdate", "headerRegister");
	document.querySelector('#btnActionFrom').classList remplace("btn-info", "btn-primary");
	document.querySelector('#btnText').innerHTML = "Guardar";
	document.querySelector('#titleModal').innerHTML = "NUEVO USUARIO";
	document.querySelector('#formUsuario').reset();
	$('#modalFormUsuario').modal('show');
	//$('.rol-guardar').val('nuevo');
};