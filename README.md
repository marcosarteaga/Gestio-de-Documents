# Gestio-de-Documents
1. Para poder hacer la migracion tenemos que crear el fichero .env Basado en el que tenemos de ejemplo en GDD .env.example

	-Cambiamos: Nombre de la BBDD ("Esta bbdd tiene que ser creada vacia previamente")

	-El nombre de usuario

	-El Psswd
    
2. Ejecutamos la comanda "php artisan migrate"
3. Ejecutamos la comanda "sudo composer install"
4. Ejecutamos la comanda "sudo php artisan key:generate"
5. Ejecutamos la comanda "php artisan serve" para poner en marcha el servicio

# Introduccion de datos de ejemplo.
1. php artisan migrate:refresh
2. php artisan db:seed --class=info_temp

# Visualizar PDF
1.sudo php artisan storage:link
# Retrospectiva
Nil:

¿Que a ido mal?
    -Se aproximo mal las horas.
    -No se contemplo el refactorizar el codigo,
     en el caso de que la logica hasta ahora no se pueda usar para seguir con el proyecto.ç
     
¿Que podemos mejorar?
    -Calular mejor las horas por especificacion.
    -Contemplar el refactorizado en el codigo,
     en los casos en que la estructura seguida no se pueda usar para las especificaciones futuras.

Marcos:

¿Que a ido mal?
     -No hemos contemplado la ampliacion en el codigo.
  


¿Que podemos mejorar?
-Creo que deberiamos plantearnos bien los proyectos antes de empezarlos, ya que luego nos pasa como ahora que no comteplamos todas las ampliaciones.


