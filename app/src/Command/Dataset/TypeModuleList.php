<?php declare(strict_types = 1);

namespace App\Command\Dataset;

/**
 * Class TypeModuleList
 * @package App\Command\Dataset
 */
final class TypeModuleList
{
    /**
     * array<string> defines Type de module
     */
    public const VALUES = [
        'information inconnue',
        'obligatoire',
        'personnalisable',
    ];
}
