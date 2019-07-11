<?php

namespace App\Repository\External;

use App\Entity\External\CodeFORMACODE;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CodeFORMACODE|null find($id, $lockMode = null, $lockVersion = null)
 * @method CodeFORMACODE|null findOneBy(array $criteria, array $orderBy = null)
 * @method CodeFORMACODE[]    findAll()
 * @method CodeFORMACODE[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CodeFORMACODERepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CodeFORMACODE::class);
    }

    // /**
    //  * @return CodeFORMACODE[] Returns an array of CodeFORMACODE objects
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
    public function findOneBySomeField($value): ?CodeFORMACODE
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
