<?php

namespace App\Repository;

use App\Entity\PositionningType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PositionningType|null find($id, $lockMode = null, $lockVersion = null)
 * @method PositionningType|null findOneBy(array $criteria, array $orderBy = null)
 * @method PositionningType[]    findAll()
 * @method PositionningType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PositionningTypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PositionningType::class);
    }

    // /**
    //  * @return PositionningType[] Returns an array of PositionningType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PositionningType
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
