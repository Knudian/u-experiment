<?php

namespace App\Repository\LHEO\SecondCircle;

use App\Entity\LHEO\SecondCircle\OrganismeFinanceur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method OrganismeFinanceur|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrganismeFinanceur|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrganismeFinanceur[]    findAll()
 * @method OrganismeFinanceur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrganismeFinanceurRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, OrganismeFinanceur::class);
    }

    // /**
    //  * @return OrganismeFinanceur[] Returns an array of OrganismeFinanceur objects
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
    public function findOneBySomeField($value): ?OrganismeFinanceur
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
