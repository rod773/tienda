create schema if not exists tienda;

use tienda;

CREATE TABLE tienda.tblproductos (
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL,
  precio DECIMAL(20,2) NOT NULL,
  descripcion TEXT NOT NULL,
  imagen VARCHAR(255) NOT NULL,
  PRIMARY KEY (id));




insert into tblproductos (nombre,precio,descripcion,imagen)
values ("Learn PHP 7",300.00,"This new book on PHP 7 introduces writing solid, secure, object-oriented code in the new PHP 7: you will create a complete three-tier application using a natural process of building and testing modules within each tier. This practical approach teaches you about app development and introduces PHP features when they are actually needed rather than providing you with abstract theory and contrived examples.
","https://libribook.com/Images/2015-learn_php_7.jpg");


insert into tblproductos (nombre,precio,descripcion,imagen)
values ("Professional ASP.NET MVC 5",429.00,"MVC 5 is the newest update to the popular Microsoft technology that enables you to build dynamic, data-driven websites. Like previous versions, this guide shows you step-by-step techniques on using MVC to best advantage, with plenty of practical tutorials to illustrate the concepts. It covers controllers, views, and models; forms and HTML helpers; data annotation and validation; membership, authorization, and security.","https://media.wiley.com/product_data/coverImage300/53/11187947/1118794753.jpg");


insert into tblproductos (nombre,precio,descripcion,imagen)
values ("Learning Vue.js 2",1005.35,"Learn how to propagate DOM changes across the website without writing extensive jQuery callbacks code.
Learn how to achieve reactivity and easily compose views with Vue.js and understand what it does behind the scenes.
Explore the core features of Vue.js with small examples, learn how to build dynamic content into preexisting web applications, and build Vue.js applications from scratch.","https://imagebsj.netlify.app/3269.jpeg");
