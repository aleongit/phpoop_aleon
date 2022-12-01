<?php

class AreaCamp extends Camp
{
    public function render()
    {

    return "<label for='{$this->name}'>{$this->name}:</label>
            <textarea id='{$this->id}' name='{$this->name}' rows='4' cols='50'>{$this->valors[0]}</textarea>";
    }
}

?>