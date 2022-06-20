<div align="center"><h2>Hacking y fortificación Web</h2></a></div>

En el actual repositorio encontraréis código para el desarrollo del proyecto final planteado en el curso <a href="https://www.mastermind.ac/courses/hacking-y-fortificacion-web">Hacking y fortificación web</a>

## Detalle del escenario propuesto

En la carpeta <a href="https://github.com/pacomastermind/hacking_fortificacion_web/tree/master/proyecto_final_escenario_login_php">proyecto_final_escenario_login_php<a/> podréis encontrar un escenario muy sencillo con los siguientes ficheros:

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

