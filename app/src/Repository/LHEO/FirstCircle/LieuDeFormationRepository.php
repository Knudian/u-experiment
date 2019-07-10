<?php

namespace App\Repository\LHEO\FirstCircle;

use App\Entity\LHEO\FirstCircle\LieuDeFormation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LieuDeFormation|null find($id, $lockMode = null, $lockVersion = null)
 * @method LieuDeFormation|null findOneBy(array $criteria, array $orderBy = null)
 * @method LieuDeFormation[]    findAll()
 * @method LieuDeFormation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LieuDeFormationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LieuDeFormation::class);
    }

    // /**
    //  * @return LieuDeFormation[] Returns an array of LieuDeFormation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LieuDeFormation
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
