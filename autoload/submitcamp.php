<?php

class SubmitCamp extends Camp
{
    public function render()
    {

    return "<input type='submit' id='{$this->id}' name='{$this->name}' value='{$this->valors[0]}'";
    }
}

?>