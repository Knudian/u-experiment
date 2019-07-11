<?php

namespace App\Repository\LHEO\Structurels;

use App\Entity\LHEO\Structurels\SousModule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SousModule|null find($id, $lockMode = null, $lockVersion = null)
 * @method SousModule|null findOneBy(array $criteria, array $orderBy = null)
 * @method SousModule[]    findAll()
 * @method SousModule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SousModuleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SousModule::class);
    }

    // /**
    //  * @return SousModule[] Returns an array of SousModule objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SousModule
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
