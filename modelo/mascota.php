<?php
class Mascota {
    public $Id;
    public $Nombre;
    public $Raza;
    public $DueñoMascota;

    public function MostrarPropiedades(){
        echo 'Id Mascota: ' . $this->Id . '<br>';
        echo 'Nombre Mascota: ' . $this->Nombre . '<br>';
        echo 'Raza: ' . $this->Raza . '<br>';
        echo 'Id: ' . $this->DueñoMascota->Id . '<br>';
        echo 'Nombre: ' . $this->DueñoMascota->Nombre . '<br>';
        echo 'Apellido: ' . $this->DueñoMascota->Apellido . '<br>';
        echo 'Documento: ' . $this->DueñoMascota->Documento . '<br>';
        echo 'Celular: ' . $this->DueñoMascota->Celular . '<br>';
        echo 'Direccion: ' . $this->DueñoMascota->Direccion . '<br>';
    }
}