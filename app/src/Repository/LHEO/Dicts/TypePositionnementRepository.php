<?php

namespace App\Repository\LHEO\Dicts;

use App\Entity\LHEO\Dicts\TypePositionnement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TypePositionnement|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypePositionnement|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypePositionnement[]    findAll()
 * @method TypePositionnement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypePositionnementRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TypePositionnement::class);
    }
}
