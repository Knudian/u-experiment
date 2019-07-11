<?php

namespace App\Repository\LHEO\Dicts;

use App\Entity\LHEO\Dicts\EtatRecrutement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EtatRecrutement|null find($id, $lockMode = null, $lockVersion = null)
 * @method EtatRecrutement|null findOneBy(array $criteria, array $orderBy = null)
 * @method EtatRecrutement[]    findAll()
 * @method EtatRecrutement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EtatRecrutementRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, EtatRecrutement::class);
    }
}
