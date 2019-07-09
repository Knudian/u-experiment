<?php

namespace App\Repository;

use App\Entity\InOutSchedule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method InOutSchedule|null find($id, $lockMode = null, $lockVersion = null)
 * @method InOutSchedule|null findOneBy(array $criteria, array $orderBy = null)
 * @method InOutSchedule[]    findAll()
 * @method InOutSchedule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InOutScheduleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, InOutSchedule::class);
    }

    // /**
    //  * @return InOutSchedule[] Returns an array of InOutSchedule objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InOutSchedule
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
