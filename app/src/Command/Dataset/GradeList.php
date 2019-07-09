<?php declare(strict_types = 1);

namespace App\Command\Dataset;

final class GradeList
{
    public const VALUES = [
        [8, 'Information non communiquée'],
        [7, 'Sans niveau spécifique'],
        [6, 'Illettrisme, analphabétisme'],
        [5, 'Préqualification'],
        [5, 'CAP, BEP, CFPA du premier degré'],
        [4, 'BP, BT, baccalauréat professionnel ou technologique'],
        [3, 'BTS, DUT'],
        [2, 'Licence ou maîtrise universitaire'],
        [1, 'Supérieur à la maîtrise'],
    ];
}
