<?php

class SelectCamp extends Camp
{
    public function render()
    {

    $sCamp = "
    <label for='{$this->name}'>{$this->name}:</label>
    <select name='{$this->name}' id='{$this->id}'>";

    for ($i = 0; $i < $this->mida_valors(); $i++) {
        $sCamp .=
        "<option value='{$this->valors[$i]}'>{$this->valors[$i]}</option>";
        }

    $sCamp .= "</select>";

    return $sCamp;
    }
}

?>
