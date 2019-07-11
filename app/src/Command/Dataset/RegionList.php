<?php declare(strict_types = 1);

namespace App\Command\Dataset;

/**
 * Class RegionList
 * @package App\Command\Dataset
 */
final class RegionList
{
    /**
     * array[int code de region] = int Nom de région
     */
    public const VALUES = [
        84 => "AUVERGNE-RHONE-ALPES",
        32 => "HAUTS-DE-FRANCE",
        93 => "PROVENCE-ALPES-COTE D'AZUR",
        6 => "MAYOTTE",
        2 => "MARTINIQUE",
        4 => "LA REUNION",
        1 => "GUADELOUPE",
        75 => "NOUVELLE-AQUITAINE",
        44 => "GRAND EST",
        28 => "NORMANDIE",
        11 => "ILE-DE-FRANCE",
        3 => "GUYANE",
        94 => "CORSE",
        24 => "CENTRE-VAL DE LOIRE",
        53 => "BRETAGNE",
        52 => "PAYS DE LA LOIRE",
        27 => "BOURGOGNE-FRANCHE-COMTE",
        76 => "OCCITANIE",
    ];
}
