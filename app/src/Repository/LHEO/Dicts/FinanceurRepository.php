<?php

namespace App\Repository\LHEO\Dicts;

use App\Entity\LHEO\Dicts\Financeur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Financeur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Financeur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Financeur[]    findAll()
 * @method Financeur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FinanceurRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Financeur::class);
    }
}
