<?php

namespace App\Repository\LHEO\FirstCircle;

use App\Entity\LHEO\FirstCircle\SiretOrganismeFormation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SiretOrganismeFormation|null find($id, $lockMode = null, $lockVersion = null)
 * @method SiretOrganismeFormation|null findOneBy(array $criteria, array $orderBy = null)
 * @method SiretOrganismeFormation[]    findAll()
 * @method SiretOrganismeFormation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SiretOrganismeFormationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SiretOrganismeFormation::class);
    }

    // /**
    //  * @return SiretOrganismeFormation[] Returns an array of SiretOrganismeFormation objects
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
    public function findOneBySomeField($value): ?SiretOrganismeFormation
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
