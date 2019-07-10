<?php

namespace App\Repository\LHEO\SecondCircle;

use App\Entity\LHEO\SecondCircle\UrlFormation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method UrlFormation|null find($id, $lockMode = null, $lockVersion = null)
 * @method UrlFormation|null findOneBy(array $criteria, array $orderBy = null)
 * @method UrlFormation[]    findAll()
 * @method UrlFormation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UrlFormationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, UrlFormation::class);
    }

    // /**
    //  * @return UrlFormation[] Returns an array of UrlFormation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UrlFormation
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
