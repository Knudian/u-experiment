<?php declare(strict_types = 1);

namespace App\Command\Dataset;

/**
 * Class RecruitmentStatusList
 * @package App\Command\Dataset
 */
final class RecruitmentStatusList
{
    /**
     * Status de recrutement
     *
     * array<string> defines status de recrutement
     */
    public const VALUES = [
        'ouvert',
        'fermé',
        'suspendu'
    ];
}
