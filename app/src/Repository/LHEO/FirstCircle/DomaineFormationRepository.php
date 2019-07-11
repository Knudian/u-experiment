<?php

namespace App\Repository\LHEO\FirstCircle;

use App\Entity\LHEO\FirstCircle\DomaineFormation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DomaineFormation|null find($id, $lockMode = null, $lockVersion = null)
 * @method DomaineFormation|null findOneBy(array $criteria, array $orderBy = null)
 * @method DomaineFormation[]    findAll()
 * @method DomaineFormation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DomaineFormationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DomaineFormation::class);
    }

    // /**
    //  * @return DomaineFormation[] Returns an array of DomaineFormation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DomaineFormation
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
