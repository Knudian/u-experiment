<?php

namespace App\Repository\LHEO\Dicts;

use App\Entity\LHEO\Dicts\Niveau;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Niveau|null find($id, $lockMode = null, $lockVersion = null)
 * @method Niveau|null findOneBy(array $criteria, array $orderBy = null)
 * @method Niveau[]    findAll()
 * @method Niveau[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NiveauRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Niveau::class);
    }
}
