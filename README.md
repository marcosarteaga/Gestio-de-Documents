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


# Retrospectiva
Nil:

¿Que a ido mal?
    -Muchos baches en la parte del laravel para poder gestionar cambios de view.
    -La parte de los formularios es bastante espesa al combinar el larabel con el jQuery y me a costado en paticular.
    -La gestion integra de errores en el formulario.
    -Pulcritud del codigo.
    
¿Que podemos mejorar?
    -Podriamos simplificar mas el codigo pero no llegariamos al final del sprint

Opinion personal
    -Mi compañero entiende todo lo que le explico para poder mejorar,
        siempre que puede me pregunta, para poder llegar a una solucion unica ,
        si el codigo afecta a la parte que estoy haciendo,
        me explica que tiene que cambiar para que entienda la logica que a seguido.

Marcos:

¿Que a ido mal?
    -La parte de laravel sigue siendo un poco frustrante cuando intentas combinar rutas y funciones del controlador
    -He tenido problemas para poder implementar los formularios


¿Que podemos mejorar?
    -Mejorar el codigo y organizarlo
    -Conocer un poco mas sobre laravel



Opinion personal:
-Laravel todavia no acabo de comprenderlo, ya que pienso que ya lo entiendo pero luego cuando tengo que combinar algo que esta hecho con algo nuevo me dan errores, y por culpa de eso dedicamos mas tiempo del necesario para implementar cosas nuevas.
-Lo positivo que entre mi compañero y yo conseguimos arreglar los errores, ademas de haber una buena dinamica de trabajo y buen ambiente entre ambos.