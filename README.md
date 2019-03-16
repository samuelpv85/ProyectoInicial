# ProyectoInicial
Inicio de proyecto Facturacion, Contabilidad



Tablas
php artisan make:migration create_roles_table --create=roles
php artisan make:migration create_groups_table --create=groups
php artisan make:migration create_groups_roles_table --create=groups_roles
php artisan make:migration create_users_roles_table --create=users_roles
php artisan make:migration create_users_users_groups_table --create=users_groups

php artisan migrate 
