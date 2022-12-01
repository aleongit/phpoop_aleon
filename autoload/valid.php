<?php
class Valid
{

    //static
    public static $regex_nom = "/^[a-zA-z]{1}[a-zA-z0-9_]*$/"; //almenys 1 a-z i la resta opcionals
    public static $regex_action =  "/^[a-zA-z0-9_-]+\.(php)$/";
    public static $regex_camps = "/^[1-9]$/"; #1 dígit de 1 a 9

    public static function valida_nom($cad) {    
        return ( preg_match (self::$regex_nom, $cad) && !empty($cad) );    
    }

    public static function valida_metode($cad) {    
        return ( $cad == 'post' || $cad == 'get' );    
    }

    public static function valida_action($cad) {    
        return ( preg_match (self::$regex_action, $cad) && !empty($cad) );    
    }

    public static function valida_num($cad) {    
        return ( preg_match (self::$regex_camps, $cad) && !empty($cad) );    
    }

    public static function valida_tipus($cad) {    
        return ( array_key_exists($cad, TIPUS) );    
    }

    public static function valida_values($cad,$tipus) {
        $ok = False;
        //mirar si buit
        if (! empty($cad) ) {
            //amb explode, separa a array
            $valors = explode(",", $cad);

            //només 1 valor per inputs
            if ( in_array($tipus, TIPUS_1) and count($valors) == 1 ) {
                $ok = True;
            } elseif ( in_array($tipus, TIPUS_N)) {
                $ok = True;
            }
        }
        return ( $ok );    
    }

}

?>