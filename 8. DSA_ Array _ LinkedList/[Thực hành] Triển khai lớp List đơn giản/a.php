<?php


class a
{
    public $arrayList;

    public function __construct($arr =[])
    {
        if (is_array($arr) == true)
            $this->arrayList = $arr;
        else
            $this->arrayList = array();
    }

    public function add($obj)
    {
        array_push($this->arrayList,$obj);
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

    public function size()
    {
        return count($this->arrayList);
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            return ("ERROR");
        }
    }
}