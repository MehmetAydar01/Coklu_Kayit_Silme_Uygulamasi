<?php

    /**
     * @param string $deger
     * @return string
     */

    function Filtrele(string $deger): string
    {
        $myFilter = htmlspecialchars(strip_tags(trim($deger)), ENT_QUOTES);
        return $myFilter;
    }

?>