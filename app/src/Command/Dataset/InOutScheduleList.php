<?php declare(strict_types = 1);

namespace App\Command\Dataset;

/**
 * Class InOutScheduleList
 * @package App\Command\Dataset
 */
final class InOutScheduleList
{
    /**
     * Programmation de cours
     *
     * array<string> defines programmation de cours
     */
    public const VALUES = [
        'entrées/sorties à dates fixes',
        'entrées/sorties permanentes'
    ];
}
