<?php

namespace App\Repository;

use App\Entity\TypeParcours;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TypeParcours|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeParcours|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeParcours[]    findAll()
 * @method TypeParcours[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CourseTypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TypeParcours::class);
    }
}
