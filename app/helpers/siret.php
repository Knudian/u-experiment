<?php
/**
 * Created by PhpStorm.
 * User: Romain
 * Date: 03/07/2019
 * Time: 08:31
 */

/**
 * Fonction de validation du Siret Ou Siren
 * Pour le Siret la valeur de $max_len = 14
 * Pour le Siren la valeur de $max_len = 9
 * @param int $val
 * @param int $max_len
 * @return bool
 */
function checkLuhn($val, $max_len = 0)
{
    if (trim($val) == "") return false;
    $len = strlen($val);
    if ($max_len > 0 && $len != $max_len) return false;
    $total = 0;
    for ($i = 1; $i <= $len; $i++)
    {
        $chiffre = substr($val,-$i,1);
        if($i % 2 == 0)
        {
            $total += 2 * $chiffre;
            if((2 * $chiffre) >= 10) $total -= 9;
        }
        else $total += $chiffre;
    }
    if ($total % 10 == 0) return true;
    else return false;
}