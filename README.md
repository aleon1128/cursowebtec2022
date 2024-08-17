# Trabajo final del curso Desarrola Software Con Herramientas Orientadas A La Productividad
El proyecto es un trabajo comenzado en 2022 como parte de un curso de capacitación profesional, sin embargo, el proyecto solo se inició pero ya no se concluyó. Consiste en el desarrollo de un sistema web que permita gestionar las actividades de los docentes y de los jefes de carrera de una institución de educación superior.

Se tomó como ejemplo para identificar todo lo que se trabajó durante el curso “Desarrolla Software Con Herramientas Orientadas A La Productividad”.

En el proyecto se puede identificar un modelo de tres capas, donde los archivos se han organizado de tal manera que unos representen el modelo, otros la vista y otros el controlador.

El modelo es una Base de Datos llamada gestor_actividades la cual, se encuentra en la carpeta raíz. Para su configuración, habrá que importarla usando phpMyAdmin.

![modelo](/img2/carpetaprincipal.JPG "modelo Base de Datos")

Como se observa en la imagen, existe un archivo index.php el cual, brinda seguridad al sistema al ingresar al sitio web https://localhost/cursoweb2022/ sin que los visitantes tengan la posibilidad de navegar por el índice de archivos y carpetas. Además, cuenta con un formulario de inicio de sesión. 

Para iniciar sesión, la Base de Datos cuenta con dos usuarios, uno con credenciales de “jefe” y el otro con credenciales de “docente”. Se recomienda para este ejemplo ingresar con el usuario “jefe” para el cual, el nombre de usuario es aleon, y la contraseña es aleon. Al ingresar se abrirá el controlador principal que es el archivo menu.php dentro de la carpeta php.

Ingresando con las credenciales de “jefe”, se puede agregar un semestre y activarlo y agregar materias a la Base da Datos. También se pueden hacer consultas de los semestres y materias que se han agregado. En este caso el controlador realiza una consulta a la Base de Datos y el resultado se almacena en un arreglo asociativo. La lógica de este controlador está en los archivos consulta_materias.php y consulta_semestres.php. Para agregar materias y agregar semestres, esto se controla mediante los archivos agregar_materia.php y agregar_semestre.php, los cuales se encuentran ubicados en la carpeta php.

![controladores](/img2/carpetaphp.JPG "Carpeta de los controladores")

Para el caso de las vistas, se decidió utilizar una tecnología de lenguaje diferente a la del controlador. En este caso se emplea el framework jQuery. Todas las vistas se encuentran en la carpeta js.

![vistas](/img2/carpetajs.JPG "Carpeta de las vistas")

Finalmente, en la carpeta conect, se encuentra el archivo de conexión con la Base de Datos conexión.php, el cual sólo se escribe una sola vez para no tener que repetirlo cada vez que se vayan a obtener los datos de la Base de Datos y seguir el principio “No te repitas” (DRY por sus siglas en inglés).

![conexion](/img2/conexion.JPG "Carpeta de conexión")

El módulo de grupos y consultas solo muestran un mensaje para indicar que se está solicitando ese recurso, sin embargo, no tienen su controlador programado. El icono de cerrar sesión o salir tampoco está habilitado. Como se mencionó, el sistema se comenzó a trabajar como parte de un curso, pero jamás se le dio seguimiento.