<?php namespace App\Helpers;

use function trim;
use function strlen;
use function substr;

/**
 * Class SiretHelper
 * @package App\Helpers
 */
class SiretHelper
{
    static function checkLuhn($val, $max_len = 0)
    {
        if (trim($val) == "") {
            return false;
        }
        $len = strlen($val);
        if ($max_len > 0 && $len != $max_len) {
            return false;
        }
        $total = 0;
        for ($i = 1; $i <= $len; $i++) {
            $chiffre = substr($val, -$i, 1);
            if ($i % 2 == 0) {
                $total += 2 * $chiffre;
                if ((2 * $chiffre) >= 10) {
                    $total -= 9;
                }
            } else {
                $total += $chiffre;
            }
        }
        return ($total % 10 == 0);
    }
}
