<?php declare(strict_types = 1);

namespace App\Command\Dataset;

/**
 * Class FinancerList
 * @package App\Command\Dataset
 */
final class FinancerList
{
    /**
     * Type de financement
     *
     * array<string> defines type de financement
     */
    public const VALUES = [
        'Etat - Ministère chargé de l\'emploi',
        'Etat - Ministère de l\'éducation nationale',
        'Etat - Autre',
        'Collectivité territoriale - Conseil régional',
        'Fonds européens - FSE',
        'Pôle emploi',
        'Entreprise',
        'ACSÉ (anciennement FASILD)',
        'AGEFIPH',
        'Collectivité territoriale - Conseil général',
        'Collectivité territoriale - Commune',
        'Collectivité territoriale - Autre',
        'Bénéficiaire de l\'action',
        'Autre',
        'Fonds européens - Autre',
        'OPCA',
        'OPACIF',
        'Code(s) obsolète(s)'
    ];
}
