<?php
namespace Dsw\Rolgame;
class Partida
{
  public $personajes = [];

  public function agregarPersonaje($p): void
  {
    $this->personajes[] = $p;
  }

  public function eliminarPersonaje(Personaje $p): void
  {
    $key = array_search($p, $this->personajes);
    if($key !== false){
      array_splice($this->personajes, $key, 1);
    }
    
  }

  public function obtenerPersonajes(): array
  {
    return $this->personajes;
  }

  public function obtenerPersonajesPorClase($class): array
  {
    return array_filter($this->personajes, function($p) use ($class){
      return $p instanceof $class;    
    });
  }
}

?>