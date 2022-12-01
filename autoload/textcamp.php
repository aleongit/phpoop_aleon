<?php

class TextCamp extends Camp
{
    public function render()
    {

    return "<label for='{$this->name}'>{$this->name}:</label>
    <input type='text' id='{$this->id}' name='{$this->name}' value='{$this->valors[0]}'>";
    }
}

?>