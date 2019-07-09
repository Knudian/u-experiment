<?php

namespace App\Repository;

use App\Entity\CourseDistance;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CourseDistance|null find($id, $lockMode = null, $lockVersion = null)
 * @method CourseDistance|null findOneBy(array $criteria, array $orderBy = null)
 * @method CourseDistance[]    findAll()
 * @method CourseDistance[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CourseDistanceRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CourseDistance::class);
    }

    // /**
    //  * @return CourseDistance[] Returns an array of CourseDistance objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CourseDistance
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
