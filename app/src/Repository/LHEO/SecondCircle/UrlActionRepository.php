<?php

namespace App\Repository\LHEO\SecondCircle;

use App\Entity\LHEO\SecondCircle\UrlAction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method UrlAction|null find($id, $lockMode = null, $lockVersion = null)
 * @method UrlAction|null findOneBy(array $criteria, array $orderBy = null)
 * @method UrlAction[]    findAll()
 * @method UrlAction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UrlActionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, UrlAction::class);
    }

    // /**
    //  * @return UrlAction[] Returns an array of UrlAction objects
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
    public function findOneBySomeField($value): ?UrlAction
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
