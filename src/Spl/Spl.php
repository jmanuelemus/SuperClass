<?php

/**
 * @package SuperClass
 */
class Spl
{
   /**
    * @var mixed
    */
    protected $__value;

   /**
    * @return mixed
    */ 
    protected function get()
    {
        return $this->__value;
    }

   /**
    * @return mixed $value
    */
    protected function set($value)
    {
        $this->__value = $value;
    }
}