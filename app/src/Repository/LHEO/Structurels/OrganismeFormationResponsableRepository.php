<?php

namespace App\Repository\LHEO\Structurels;

use App\Entity\LHEO\Structurels\OrganismeFormationResponsable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method OrganismeFormationResponsable|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrganismeFormationResponsable|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrganismeFormationResponsable[]    findAll()
 * @method OrganismeFormationResponsable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrganismeFormationResponsableRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, OrganismeFormationResponsable::class);
    }

    // /**
    //  * @return OrganismeFormationResponsable[] Returns an array of OrganismeFormationResponsable objects
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
    public function findOneBySomeField($value): ?OrganismeFormationResponsable
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
