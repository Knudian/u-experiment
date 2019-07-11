<?php declare(strict_types = 1);

namespace App\Exception;

use Exception;

/**
 * Class SiretException
 *
 * @package App\Exception
 */
final class SiretException extends Exception
{
    public const INVALID_LENGTH = 1;
    public const NOT_ALL_NUMBERS = 2;
    public const INVALID_SUM = 3;

    public function __construct(int $code = 0)
    {
        parent::__construct('', $code, null);
    }
}
