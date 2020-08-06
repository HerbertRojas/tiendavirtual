
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
		"resonsieve":"thue",
		"bDestroy":true,
		"iDisplayLength":10,
		"order":[[0,"desc"]]
	});
	
});

$("#tableRoles").DataTable();

function openModal(){
	$('#modalFormRol').modal('show');
};