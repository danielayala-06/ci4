# CodeIgniter 4 CRUD

## Sobre este Proyecto
Este proyecto realiza operaciones CRUD con las siguientes tablas:
``` SQL
Clientes:
- id            INT(11)
- apellidos     VARCHAR(40)
- nombres       VARCHAR(40)
- dni           CHAR(8)
- telefono      CHAR(9)

Proveedores:
- id            INT(11)
- razon_social  VARCHAR(150)
- direccion     VARCHAR(150)
- ruc           CHAR(11)
- telefono      CHAR(9)
- representante VARCHAR(50)

Productos:
- id            INT(11)
- tipo          VARCHAR(30)
- descripcion   VARCHAR(100)
- precio        DECIMAL(7,2)
- stock         SMALLINT(9)
```
## Instalacion y ejecucion del Proyecto
Primeramente ejecutamos los siguientes modulos en XAMPP: `Apache` y `MySQL`. Luego instalamos las dependencias del proyecto con el siguiene comando:
```bash
php composer install
```

Luego de ello procedemos a crear una BD a la cual llamaremos: `ci4`
### Archivo .env
Despues de crear nuestra BD configuramos nuestra variables de entorno cambiando el nombre de nuestro archivo `env` a `.env`
y pegamos lo siguiente 

``` .env
#--------------------------------------------------------------------
# DATABASE
#--------------------------------------------------------------------
database.default.hostname = localhost
database.default.database = ci4
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306

```
### Migraciones
Para generar las tablas automaticamente corremos las migraciones para crear las tablas:
```bash
php spark migrate
```
### Seeders
Por ultimo rellenamos las tablas con algunos datos de prueba pegando el siguiente comando:
```bash
php spark db:seed DatabaseSeeder
```
Con todo esto listo levantamos el servidor con el siguiente comando:
```bash
php spark serve
```
