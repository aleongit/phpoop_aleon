<?php

class CheckCamp extends Camp
{
    public function render()
    {
    $sCamp = "<label>{$this->name}:</label><br>";

    for ($i = 0; $i < $this->mida_valors(); $i++) {
        $sCamp .=
        "
        <label for='{$this->name}" . $i+1 ."'>{$this->valors[$i]}</label>
        <input type='checkbox' id='{$this->id}" . $i+1 ."'name='{$this->name}" . $i+1 ."'value='{$this->valors[$i]}'><br>";     
    }
    return $sCamp;
    }
}

?>
