<?php

//per tots els camps
abstract class Camp
{   
    protected $id;
    protected $name;
    protected $valors = [];

    //contructor
    public function __construct($id, $name, $valors)
    {   
        $this->id = $id;
        $this->name = $name;
        $this->valors = $valors;
    }

    public function mida_valors()
    {
        return count($this->valors);
    }
    
    //cada camp un render diferent
    abstract public function render();
}

?>