<?php
/**
 * Created by PhpStorm.
 * User: rn
 * Date: 2/18/16
 * Time: 9:04 PM
 */

namespace App\Helpers;


class takeWhileFib implements \Iterator
{

    private $array = [1,2];
    private $number;
    private $position = 0;

    public function __construct($number)
    {
        $this->position = 0;
        $this->number = $number;
    }
    public function next()
    {
        if($this->position - 1 >= 0)
        {
            $next_value = $this->array[$this->position-1] + $this->array[$this->position];
            array_push($this->array, $next_value);
        }

        ++$this->position;
    }

    public function valid()
    {
        return ($this->number > $this->array[$this->position]);
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function key()
    {
        return $this->position;
    }

    public function current()
    {
        return $this->array[$this->position];
    }
}