# GoRest
Pruebas de consumo API Rest

Para habilitar esta app, seguir los siguinetes paso.

* Clonar el repositorio.
* Por la terminar acceder al directorio # cd GoRest/GoRest-app/
* Por la terminal ejecutar # composer install
* Copiar archivo .env.example y renombrar a .env
* Por la terminal ejecutar # php artisan key:generate
* Por la termninal ejecutar # php artisan serve 
* Ingresar al navegador http://127.0.0.1:8000/

# Descripción de la aplicación.

La vista principal muestra la lista de los usuarios que entrega la api consumida, en esta tabla se pueden realizar acciones de modificar y eliminar. 
Luego estan las opciuones de buscar usuario por nombre, email y agregar nuevo usuario. 

<b>Importante: Los resultados de la busqueda por nombre y mail se entregan en la vista principal. </b>
