<?php

namespace App\Repository\LHEO\Dicts;

use App\Entity\InOutSchedule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method InOutSchedule|null find($id, $lockMode = null, $lockVersion = null)
 * @method InOutSchedule|null findOneBy(array $criteria, array $orderBy = null)
 * @method InOutSchedule[]    findAll()
 * @method InOutSchedule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModaliteEntreeSortieRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, InOutSchedule::class);
    }
}
