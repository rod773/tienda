create schema if not exists tienda;

use tienda;

CREATE TABLE tienda.tblproductos (
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL,
  precio DECIMAL(20,2) NOT NULL,
  descripcion TEXT NOT NULL,
  imagen VARCHAR(255) NOT NULL,
  PRIMARY KEY (id));
