<?php

class Clase {
    private int $codigo;
    private string $fecha;
    private string $hora;
    private string $tipoLibreta;

    public function __construct(int $codigo = 0, string $fecha, string $hora, string $tipoLibreta) {
        $this->codigo = $codigo;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->tipoLibreta = $tipoLibreta;
    }

    /* Codigo */

    public function setCodigo(int $codigo) {
        $this->codigo = $codigo;
    }

    public function getCodigo(): int {
        return $this->codigo;
    }

    /* Fecha */

    public function setFecha(string $fecha) {
        $this->fecha = $fecha;
    }

    public function getFecha(): string {
        return $this->fecha;
    }

    /* Hora */

    public function setHora(string $hora) {
        $this->hora = $hora;
    }

    public function getHora(): string {
        return $this->hora;
    }

    /* Libreta */

    public function setTipoLibreta(string $tipoLibreta) {
        $this->tipoLibreta = $tipoLibreta;
    }

    public function getTipoLibreta(): string {
        return $this->tipoLibreta;
    }

    /* To String */

    public function __toString(): string {
        return '('.$this->codigo.','.$this->fecha.','.$this->hora.','.$this->tipoLibreta.')';
    }       
}

