<?php 


class  Inflector {

	 public static function camel($value)
    {
        $segments = explode('-', $value);

        //Recorre un array y con 
        array_walk($segments, function (&$item) {
           	//item es la posicion del vector de segmentos
           	//ucfirst convertira a mayusculas la primera leta de un string
            $item = ucfirst($item);
        });

        //es el contrario de explode, convertira un array en una cada con un parametro 
        //  ''  '-' '/ 'loquesea' entre los elementos del array
        return implode('', $segments);
    }



     public static function lowerCamel($value)
    {
        return lcfirst(static::camel($value));
    }






}
