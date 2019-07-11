<?php declare(strict_types = 1);

namespace App\Helpers;

use App\Exception\SiretException;
use function array_sum;
use function str_split;
use function strlen;
use function strrev;

/**
 * Class SiretHelper
 *
 * @package App\Helpers
 */
final class SiretHelper
{
    /**
     * @see https://gist.github.com/troelskn/1287893#gistcomment-2388611
     * @param string $siret
     * @throws SiretException
     */
    static function validate(string $siret): void
    {
        self::isLenghtValid($siret, 14);
        self::isNumeric($siret);
        self::luhnFormula($siret);
    }

    /**
     * @param string $siret
     * @param int $len
     * @throws SiretException
     */
    private static function isLenghtValid(string $siret, int $len): void
    {
        if (strlen($siret) !== $len) {
            throw new SiretException(SiretException::INVALID_LENGTH);
        }
    }

    /**
     * @param string $siret
     * @throws SiretException
     */
    private static function isNumeric(string $siret): void
    {
        if (! is_numeric($siret)) {
            throw new SiretException(SiretException::NOT_ALL_NUMBERS);
        }
    }

    /**
     * @param string $siret
     * @throws SiretException
     */
    private static function luhnFormula(string $siret): void
    {
        $len = strlen($siret);
        $revNumber = strrev($siret);
        $sum = '';
        for ($i = 0; $i < $len; $i++) {
            $sum .= $i & 1 ? $revNumber[$i] * 2 : $revNumber[$i];
        }
        if (array_sum(str_split($sum)) % 10 !== 0) {
            throw new SiretException(SiretException::INVALID_SUM);
        }
    }
}
