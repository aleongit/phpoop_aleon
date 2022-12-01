<?php
class Form
{
    protected $id;
    protected $accio;
    protected $metode;
    //protected $camps = array();
    protected $aCamps = [];

    //contructor
    public function __construct($id, $metode, $accio)
    {   
        $this->id = $id;
        $this->metode = $metode;
        $this->accio = $accio;

    }
    
    public function add_camp(Camp $oCamp)
    {
        $this->aCamps[] = $oCamp;
    }
    
    public function render()
    {   
        //render per cada objecte camp
        $sCamps = "";
        foreach ($this->aCamps as $oCamp)
        {
            $sCamps .= $oCamp->render();
        }
        
        return "<form id='$this->id' method='$this->metode' action='$this->accio'>
        $sCamps
        </form>";
    }

}

/*
<form action="/action_page.php">

    <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname">

    <label for="lname">Last name:</label>
    <input type="number" id="lname" name="lname">

    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <label for="vehicle1"> I have a bike</label><br>
    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
    <label for="vehicle2"> I have a car</label><br>
    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
    <label for="vehicle3"> I have a boat</label><br>

    <label for="cars">Choose a car:</label>
    <select name="cars" id="cars">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="mercedes">Mercedes</option>
    <option value="audi">Audi</option>
    </select>

    <label for="w3review">Review of W3Schools:</label>
    <textarea id="w3review" name="w3review" rows="4" cols="50">
    Text...
    </textarea>

    <input type="submit" name="submit" value="Go go!">

</form>
*/

?>