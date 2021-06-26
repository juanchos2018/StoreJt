
CREATE TABLE `CLIENTE` (
  `IdCliente` int(10) NOT NULL AUTO_INCREMENT,
  `Dni` varchar(8) COLLATE utf8_spanish2_ci,
  `Nombre` varchar(50) COLLATE utf8_spanish2_ci,
  `Apellidos` varchar(50) COLLATE utf8_spanish2_ci,
  `Celular` varchar(9) COLLATE utf8_spanish2_ci,
  `Correo` varchar(50) COLLATE utf8_spanish2_ci,
  `Password` varchar(20) COLLATE utf8_spanish2_ci,
  `Sexo` varchar(1) COLLATE utf8_spanish2_ci,
  `Estado` varchar(1) COLLATE utf8_spanish2_ci,
  PRIMARY KEY (`IdCliente`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;


CREATE TABLE `USUARIO` (
  `IdUsuario` int(10) NOT NULL AUTO_INCREMENT,
  `Dni` varchar(8) COLLATE utf8_spanish2_ci,
  `Nombre` varchar(50) COLLATE utf8_spanish2_ci,
  `Apellidos` varchar(50) COLLATE utf8_spanish2_ci,
  `NomUsuario` varchar(50) COLLATE utf8_spanish2_ci,
  `Password` varchar(100) COLLATE utf8_spanish2_ci,
  `Celular` varchar(9) COLLATE utf8_spanish2_ci,
  `TipoUsuario` varchar(20) COLLATE utf8_spanish2_ci,
  `Estado` varchar(1) COLLATE utf8_spanish2_ci,
  PRIMARY KEY (`IdUsuario`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;


CREATE TABLE `MARCA` (
  `IdMarca` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE utf8_spanish2_ci,
  `Estado` varchar(1) COLLATE utf8_spanish2_ci,
  PRIMARY KEY (`IdMarca`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

CREATE TABLE `SUBCATEGORIA` (
  `IdSubcategoria` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE utf8_spanish2_ci,
  `Estado` varchar(1) COLLATE utf8_spanish2_ci,
  PRIMARY KEY (`IdSubcategoria`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

CREATE TABLE `CATEGORIA` (
  `IdCategoria` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE utf8_spanish2_ci,
  `Estado` varchar(1) COLLATE utf8_spanish2_ci,
  PRIMARY KEY (`IdCategoria`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;


CREATE TABLE `PROMOCION` (
  `IdPromocion` int(10) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(100) COLLATE utf8_spanish2_ci,
  `Descuento` int(3),
  `Estado` varchar(1) COLLATE utf8_spanish2_ci,
  PRIMARY KEY (`IdPromocion`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;


CREATE TABLE `VENTA` (
  `IdVenta` int(10) NOT NULL AUTO_INCREMENT,
  `IdUsuario` int(10) NOT NULL,
  `Fecha` DATE NOT NULL,
  `TipoComprobante` varchar(20) COLLATE utf8_spanish2_ci,
  `TipoPago` varchar(20) COLLATE utf8_spanish2_ci,
  `Departamento` varchar(50) COLLATE utf8_spanish2_ci,
  `Provincia` varchar(50) COLLATE utf8_spanish2_ci,
  `Distrito` varchar(50) COLLATE utf8_spanish2_ci,
  `Direccion` varchar(100) COLLATE utf8_spanish2_ci,
  `AdelantoPrecio` DECIMAL(5,2),
  `Total` DECIMAL(5,2),
  `Estado` varchar(1) COLLATE utf8_spanish2_ci,
  PRIMARY KEY (`IdVenta`),
  FOREIGN KEY (IdUsuario) REFERENCES USUARIO(IdUsuario)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;


CREATE TABLE `PRODUCTO` (
  `IdProducto` int(10) NOT NULL AUTO_INCREMENT,
  `IdCategoria` int(10) NOT NULL,
  `IdMarca` int(10) NOT NULL,
  `IdSubcategoria` int(10),
  `IdPromocion` int(10),
  `IdUsuario` int(10) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish2_ci,
  `Descripcion` text COLLATE utf8_spanish2_ci,
  `PrecioCompra` DECIMAL(5,2),
  `PrecioVenta` DECIMAL(5,2),
  `Cantidad` int(10),
  `Fecha` DATE,
  `UrlImagen` varchar(50),
  `Estado` varchar(1) COLLATE utf8_spanish2_ci,
  PRIMARY KEY (`IdProducto`),
  FOREIGN KEY (IdCategoria) REFERENCES CATEGORIA(IdCategoria),
  FOREIGN KEY (IdMarca) REFERENCES MARCA(IdMarca),
  FOREIGN KEY (IdSubcategoria) REFERENCES SUBCATEGORIA(IdSubcategoria),
  FOREIGN KEY (IdPromocion) REFERENCES PROMOCION(IdPromocion),
  FOREIGN KEY (IdUsuario) REFERENCES USUARIO(IdUsuario)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;


CREATE TABLE `DETALLE_VENTA` (
  `IdDetalle_Venta` int(10) NOT NULL AUTO_INCREMENT,
  `IdVenta` int(10) NOT NULL,
  `IdProducto` int(10) NOT NULL,
  `Cantidad` int(10),
  `Precio` DECIMAL(5,2),

  PRIMARY KEY (`IdDetalle_Venta`),
  FOREIGN KEY (IdVenta) REFERENCES VENTA(IdVenta),
  FOREIGN KEY (IdProducto) REFERENCES PRODUCTO(IdProducto)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;



INSERT INTO usuario(Dni, Nombre, Apellidos, NomUsuario, Password, Celular, TipoUsuario, Estado) 
VALUES("55555555","admin","admin","admin","T21VNmUxcCs2ZDBueXBSNCtiaVNDZz09","123456789","Admin","A"),

INSERT INTO marca(Nombre, Estado) VALUES("AMD","A")

INSERT INTO categoria(Nombre, Estado) VALUES("procesador","A")

INSERT INTO subcategoria(Nombre, Estado) VALUES("inalambrico","A")

INSERT INTO promocion(Descripcion, Descuento, Estado) VALUES("Descuento 10%", 10,"A")





