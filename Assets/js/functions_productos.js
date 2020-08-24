var tableProductos;

document.addEventListener('DOMContentLoaded', function(){

	tableProductos = $('#tableProductos').dataTable( {
		"aProcessing":true,
		"aServerSite":true,
		"language": {
			"url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
		},
		"ajax":{
			"url":" "+base_url+"/Productos/getProductos",
			"dataSrc":""
		},
		"columns":[
			{"data":"idproducto"},
			{"data":"imagen"},
			{"data":"codigo"},
			{"data":"categoria"},
			{"data":"articulo"},
			{"data":"marca"},
			{"data":"modelo"},
			{"data":"color"},
			{"data":"talla"},
			{"data":"genero"},
			{"data":"botapie"},
			{"data":"precio"},			
			{"data":"stock"}
		],
		"resonsive":true,
		"autoWidth": false,
		"bDestroy":true,
		"iDisplayLength":5,
		"lengthMenu": [5, 10, 20, 50, 100],
		"order":[[0,"desc"]]
	});	
});


$("#tableProductos").DataTable();

function openModal(){
	$('#modalFormProducto').modal('show');
	$('.producto-guardar').val('nuevo');
};

$( ".producto-guardar" ).on( "click", function() {
  	var txtCodigo = $('#txtCodigo').val()
  	var txtCategoria = $('#txtCategoria').val()
  	var txtArticulo = $('#txtArticulo').val()
  	var txtMarca = $('#txtMarca').val()
  	var txtModelo = $('#txtModelo').val()
  	var txtColor = $('#txtColor').val()
  	var txtTalla = $('#txtTalla').val()
  	var listGenero = $('#listGenero').val()
  	var txtBotapie = $('#txtBotapie').val()
  	var txtPrecio = $('#txtPrecio').val()
  	var txtStock = $('#txtStock').val()
	var idproducto = $('#idProducto').val()
	var imagenProducto = $('#productoImagen')[0].files[0]

	if(txtCodigo=='' || txtCodigo==null )
	{
		Swal.fire({
			icon: 'error',
			title: 'Validación',
			text: 'Debe Ingresar el Código del Producto',
		})
	} 
	else if(txtCategoria=='' || txtCategoria==null )
	{
		Swal.fire({
			icon: 'error',
			title: 'Validación',
			text: 'Debe Ingresar la Categoría',
		})
	}
	else if(txtArticulo=='' || txtArticulo==null )
	{
		Swal.fire({
			icon: 'error',
			title: 'Validación',
			text: 'Debe Ingresar el Artículo',
		})
	}
	else if(txtMarca=='' || txtMarca==null )
	{
		Swal.fire({
			icon: 'error',
			title: 'Validación',
			text: 'Debe Ingresar la Marca',
		})
	}
	else if(txtModelo=='' || txtModelo==null )
	{
		Swal.fire({
			icon: 'error',
			title: 'Validación',
			text: 'Debe Ingresar la Modelo',
		})
	}
	else if(txtColor=='' || txtColor==null )
	{
		Swal.fire({
			icon: 'error',
			title: 'Validación',
			text: 'Debe Ingresar el Color',
		})
	}
	else if(txtTalla=='' || txtTalla==null )
	{
		Swal.fire({
			icon: 'error',
			title: 'Validación',
			text: 'Debe Ingresar la Talla',
		})
	}
	else if(txtBotapie=='' || txtBotapie==null )
	{
		Swal.fire({
			icon: 'error',
			title: 'Validación',
			text: 'Debe Ingresar Botapie',
		})
	}
	else if(txtPrecio=='' || txtPrecio==null )
	{
		Swal.fire({
			icon: 'error',
			title: 'Validación',
			text: 'Debe Ingresar el Precio del Producto',
		})
	}
	else if(txtStock=='' || txtStock==null )
	{
		Swal.fire({
			icon: 'error',
			title: 'Validación',
			text: 'Debe Ingresar el Stock',
		})
	} 
	else
	{
		if($(this).val() == 'nuevo')
		{	
			var fromData = new FormData();
			fromData.append('txtCodigo',txtCodigo)
			fromData.append('txtCategoria',txtCategoria)
			fromData.append('txtArticulo',txtArticulo)
			fromData.append('txtMarca',txtMarca)
			fromData.append('txtModelo',txtModelo)
			fromData.append('txtColor',txtColor)
			fromData.append('txtTalla',txtTalla)
			fromData.append('txtBotapie',txtBotapie)
			fromData.append('txtPrecio',txtPrecio)
			fromData.append('txtStock',txtStock)
			fromData.append('listGenero',listGenero)
			fromData.append('imagenProducto',imagenProducto)

			$.ajax({
				url: base_url+'/Productos/insertarProducto',
				type:'POST',
				data:fromData,
				processData: false,
    			contentType: false,
				success:function(respuesta){
					if(respuesta>=1)
					{
						$('#modalFormProducto').modal('hide');
						Swal.fire({
							icon:'success',
							title:'Productos',
							text:'Producto Guardado Exitósamente'
						}).then((response) => {
							if(response.value){							
								window.location.href='productos'
							}
						})
					}
				}
			})
		}
	}
});