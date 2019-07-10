<?php

namespace App\Repository\LHEO\Dicts;

use App\Entity\LHEO\Dicts\ObjectifGeneralFormation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ObjectifGeneralFormation|null find($id, $lockMode = null, $lockVersion = null)
 * @method ObjectifGeneralFormation|null findOneBy(array $criteria, array $orderBy = null)
 * @method ObjectifGeneralFormation[]    findAll()
 * @method ObjectifGeneralFormation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjectifGeneralFormationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ObjectifGeneralFormation::class);
    }
}
