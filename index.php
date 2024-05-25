<?php
require_once 'modelo/mascota.php';
require_once 'modelo/dueñomascota.php';

$DueñoMascota = new DueñoMascota();
$DueñoMascota-> Id= 1;
$DueñoMascota-> Nombre='Jose';
$DueñoMascota-> Apellido= 'Perez';
$DueñoMascota-> Documento= 12345678;
$DueñoMascota-> Celular= 3412345678;
$DueñoMascota-> Direccion= 'Tucuman 452';

$Mascota = new Mascota();
$Mascota-> Id= 2;
$Mascota-> Nombre= 'Princesa';
$Mascota-> Raza= 'Pitbull';
$Mascota-> DueñoMascota = $DueñoMascota;

$Mascota-> MostrarPropiedades();