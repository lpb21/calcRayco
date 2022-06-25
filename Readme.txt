Host
ec2-44-197-128-108.compute-1.amazonaws.com
Database
d9a269cd9juigh
User
jikiihqjomguak
Port
5432
Password
4595fe83a2fd7ed77f44a975ed208c4244bbefe8966b2ffab16850693c3bce93
URI
postgres://jikiihqjomguak:4595fe83a2fd7ed77f44a975ed208c4244bbefe8966b2ffab16850693c3bce93@ec2-44-197-128-108.compute-1.amazonaws.com:5432/d9a269cd9juigh
Heroku CLI
heroku pg:psql postgresql-solid-60564 --app calcrayco

*****/////****
*La calculadora captura los datos de las variables
*Usa bootstrap
*usa fuente Kanit
*Tiene los botones solicitados
*Realiza validaciones de campos numericos, campos vacios, y que no sean divisible por 0 en ambos campos
    con alertas traidas de swal
*En las alertas espeifica que se debe corregir
*Imprime el resultado en un cuadro de tipo input de solo lectura
*La peticiones se envian por ajax a un archivo Enviar.php
*Se creo la Bd en Heroku, se dejo el codigo listo con las consultas pero no alcanze a realizar la
    validacion y el muestreo de los ultimos 10 registros como se solicitan, mas sin embargo aqui arriba
    estan las credenciales de la bd creada en heroku