<?php declare(strict_types = 1);

namespace App\Command\Dataset;

/**
 * Class CourseGoalList
 * @package App\Command\Dataset
 */
final class CourseGoalList
{
    /**
     * But du cours
     *
     * array<string> defines but de la formation
     */
    public const VALUES = [
        'Code(s) obsolète(s)',
        'Certification',
        'Professionnalisation',
        'Préparation à la qualification',
        'Remise à niveau, maîtrise des savoirs de base, initiation',
        '(Re)mobilisation, aide à l\'élaboration de projet professionnel',
        'Perfectionnement, élargissement des compétences',
        'Création d\'entreprise',
    ];
}
