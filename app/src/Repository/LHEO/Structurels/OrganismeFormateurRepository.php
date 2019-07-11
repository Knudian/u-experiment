<?php

namespace App\Repository\LHEO\Structurels;

use App\Entity\LHEO\Structurels\OrganismeFormateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method OrganismeFormateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrganismeFormateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrganismeFormateur[]    findAll()
 * @method OrganismeFormateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrganismeFormateurRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, OrganismeFormateur::class);
    }

    // /**
    //  * @return OrganismeFormateur[] Returns an array of OrganismeFormateur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OrganismeFormateur
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
