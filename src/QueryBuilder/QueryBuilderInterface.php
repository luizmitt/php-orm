<?php

namespace Lz\PhpOrm\QueryBuilder;

interface QueryBuilderInterface
{
  public function getValues() :array;
  public function __toString();
}