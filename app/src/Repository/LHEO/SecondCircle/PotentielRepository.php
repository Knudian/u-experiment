<?php

namespace App\Repository\LHEO\SecondCircle;

use App\Entity\LHEO\SecondCircle\Potentiel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Potentiel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Potentiel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Potentiel[]    findAll()
 * @method Potentiel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PotentielRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Potentiel::class);
    }

    // /**
    //  * @return Potentiel[] Returns an array of Potentiel objects
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
    public function findOneBySomeField($value): ?Potentiel
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
