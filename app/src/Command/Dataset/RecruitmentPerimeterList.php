<?php declare(strict_types = 1);

namespace App\Command\Dataset;

/**
 * Class RecruitmentPerimeterList
 * @package App\Command\Dataset
 */
final class RecruitmentPerimeterList
{
    /**
     * Périmètre de recrutement
     *
     * array<string> defines périmètre de recrutement
     */
    public const VALUES = [
        'Autres',
        'Commune',
        'Département',
        'Région',
        'Interrégion',
        'Pays',
        'International',
    ];
}
