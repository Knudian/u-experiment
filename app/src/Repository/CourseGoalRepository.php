<?php

namespace App\Repository;

use App\Entity\CourseGoal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CourseGoal|null find($id, $lockMode = null, $lockVersion = null)
 * @method CourseGoal|null findOneBy(array $criteria, array $orderBy = null)
 * @method CourseGoal[]    findAll()
 * @method CourseGoal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CourseGoalRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CourseGoal::class);
    }

    // /**
    //  * @return CourseGoal[] Returns an array of CourseGoal objects
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
    public function findOneBySomeField($value): ?CourseGoal
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
