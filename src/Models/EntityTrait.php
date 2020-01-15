<?php

namespace Lz\PhpOrm\Models;

trait EntityTrait
{
  protected $data;

  public function setAll(array $data)
  {
    $this->data = $data;
  }

  public function getAll():array
  {
    return $this->data;
  }

  public function __get($name)
  {
    $method = $this->methodName('get', $name);
    
    if (method_exists($this, $method)) {
      return $this->$method();
    }

    return $this->data[$name] ?? null;
  }

  public function __set($name, $value)
  {
    $method = $this->methodName('set', $name);
    
    if (method_exists($this, $method)) {
      return $this->$method($value);
    }

    $this->data[$name] = $value;
  }

  private function methodName($prefix, $name)
  {
    $method = str_replace('_', ' ', strtolower($name));
    $method = ucwords($method);
    $method = str_replace(' ', '', $method);

    return $prefix . $method;
  }
}
