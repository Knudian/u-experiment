<?php

namespace App\Repository;

use App\Entity\Financer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Financer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Financer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Financer[]    findAll()
 * @method Financer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FinancersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Financer::class);
    }

    // /**
    //  * @return Financer[] Returns an array of Financer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Financer
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
