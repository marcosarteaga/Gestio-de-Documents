# Gestio-de-Documents
Migration Clientes:

Codi Client -> Autogenerado
Nom
cognom
Email
Telefon
Data
DataModificació
Direcció
NIF/CIF
Prov.
Localitat
C.P.



cuando clones dentro del GDD:
sudo composer install
php artisan migrate ("mira el fichero .env el nombre de la base")
php artisan serve

Si te da este fallo al hacer un php artisan serve: ("No Application Encryption Key Has Been Specified") utiliza el comado de abajo
sudo php artisan key:generate