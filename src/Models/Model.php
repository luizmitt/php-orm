<?php

namespace Lz\PhpOrm\Models;

use \Lz\PhpOrm\Models\EntityTrait;
use \Lz\PhpOrm\Models\RepositoryTrait;

abstract class Model
{
  use EntityTrait;
  use RepositoryTrait;
  
}