<?php

    function suma($a, $b)
    {
        return $a + $b;
    }

    function resta($a, $b)
    {
        return $a - $b;
    }

    function multiplicacion($a, $b)
    {
        return $a * $b;
    }

    function division($a, $b)
    {
        if($b==0)
            return "error";
        return $a / $b;
    }

    function potencia($a, $b)
    {   
        $res = 1
        for($i = 1; $i <= $b; $i++)
            $res = $res * $a;
    }
?>