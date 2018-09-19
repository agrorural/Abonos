# Aplicación para Abonos basada en Laravel

## Como actualizar la información

Ir al root de la aplicación y referescar las migraciones:

```
php artisan migrate:refresh
```


Esta acción eliminará el contenido de la base de datos, por lo que previamente se tendrá que sacar un backup del mismo.

Abrir el editor de base de datos y correr lo siguiente:

```
use DB_NAME;

LOAD DATA LOCAL INFILE 'PATH-TO-CSV.csv'
INTO TABLE ventas
CHARACTER SET latin1
FIELDS TERMINATED BY ','
ENCLOSED by '"'
LINES TERMINATED by '\n';
```

Esto ejecutará el script necesario para ingresar la data enviada en CSV por la Dirección de Abonos.
