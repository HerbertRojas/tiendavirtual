<?php 

	class ProductosModel extends Mysql
	{	
		public function __construct()
		{
			parent::__construct();
		}

		public function selectProducto($idProducto)
		{
			$sql= "SELECT * FROM producto WHERE idproducto = '".$idProducto."'";
			$request = $this->select($sql);
			return $request;
		}

		public function selectProductos()
		{
			//EXTRAER ROLES
			$sql = "SELECT * FROM producto";
			$request = $this->select_all($sql);
			return $request;
		}

		public function insertarProducto($producto)
		{
			$sql = "INSERT INTO producto(codigo,categoria,articulo,marca,modelo,color,talla,genero,botapie,
										precio,stock) VALUE(?,?,?,?,?,?,?,?,?,?,?)";
			$productoValues = [$producto['txtCodigo'], $producto['txtCategoria'],$producto['txtArticulo'],
							$producto['txtMarca'], $producto['txtModelo'],$producto['txtColor'],
							$producto['txtTalla'], $producto['listGenero'],$producto['txtBotapie'],
							$producto['txtPrecio'], $producto['txtStock']];
			return  $this->insert($sql,$productoValues);
		}

		public function actualizarImagenProducto($imagen,$idproducto)
		{
			$sql = "UPDATE producto SET imagen = ? WHERE idproducto=?";

			$productoValues = [$imagen,$idproducto];

			return  $this->update($sql,$productoValues);
		}
	}
?>