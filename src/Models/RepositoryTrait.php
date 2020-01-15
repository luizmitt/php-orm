<?php

namespace Lz\PhpOrm\Models;

use Lz\PhpOrm\Drivers\DriverInterface;
use Lz\PhpOrm\QueryBuilder\Select;

trait RepositoryTrait
{
  protected $driver;

  public function __construct(DriverInterface $driver)
  {
    $this->driver = $driver;
  }

  public function getTable():string
  {
    if (!empty($this->table)) {
      return $this->table;
    }

    $table = get_class($this);
    $table = explode('\\', $table);
    $table = array_pop($table);
    
    return strtolower($table);
  }  

  public function first(array $conditions = [])
  {
    $data = $this->driver->setQueryBuilder(new Select($this->getTable(), $conditions))
            ->execute()
            ->first();
    $this->setAll($data);
  }
  
}