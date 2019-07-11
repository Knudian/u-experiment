<?php declare(strict_types = 1);

namespace App\Command\Dataset;

/**
 * Class CourseTypeList
 * @package App\Command\Dataset
 */
final class CourseTypeList
{
    /**
     * Types de cours
     *
     * array<string> defines Types de cours
     */
    public const VALUES = [
        'en groupe (non personnalisable)',
        'individualisé',
        'modularisé',
        'mixte',
    ];
}
