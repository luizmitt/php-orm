<?php

namespace Test;

use Lz\PhpOrm\Models\Model;

class Users extends Model
{
  protected $table = 'users';
  protected $primaryKey = 'id';
  
}