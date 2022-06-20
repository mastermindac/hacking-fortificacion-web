<!-- ABOUT THE PROJECT -->
## Hacking fortificacion web. Proyecto Final
Para el desarrallo del proyecto final de Hacking y Fortificación web se pretende poner en práctica todo lo aprendido mediante la realización del proyecto 
final. La finalidad es que repases todo lo visto, pero también para comprobar que eres capaz de fortificar un sitio web y poder presentarlo al mundo.

Para poder aplicar cualquiera de las medidas de fortificación vistas necesitamos un sitio que proteger, 
tenéis muchas opciones para tener ese entorno preparado. Puedes utilizar el código que os damos como recurso, 
en él encontrarás un simple login de usuario y contraseña con el que puedes comenzar a trabajar, ya que está muy muy desprotegido.

## Detalle del escenario propuesto

* login.php, contiene el código de la página inicial y el formulario de login de usario con su contraseña
* config.php, contiene la configuración y conexión a la base de datos
* home.php, página cargada una vez logado con éxito
* check.php, código que checkea el usuario y contraseña
* database.sql, código sql para crear la base de datos y la tabla de usuarios con un primer usuario


## Instalación y puesta en marcha
Para poder arrancar el escenario se necesita tener instalado en el equipo PHP y MySQL, tecnologías que ya se han trabajado en el curso. Los pasos para poner en
marcha el código serán:

* Descargar el código desde este repositorio
* Usar el fichero database.sql para crear la base de datos y la tabla de usuarios con un usuario cargado
* Comprobar que la tabla y los datos se han creado
* Cambiar al directorio donde se encuentre el fichero login.php mediante un terminal o consola y lanzar la aplicación mediante "php -S localhost:8000"
* Abrir un navegador y comprobar el correcto funcionamiento con la dirección http://localhost:8000/login.php

