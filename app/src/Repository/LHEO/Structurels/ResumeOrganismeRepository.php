<?php

namespace App\Repository\LHEO\Structurels;

use App\Entity\LHEO\Structurels\ResumeOrganisme;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ResumeOrganisme|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResumeOrganisme|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResumeOrganisme[]    findAll()
 * @method ResumeOrganisme[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResumeOrganismeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ResumeOrganisme::class);
    }

    // /**
    //  * @return ResumeOrganisme[] Returns an array of ResumeOrganisme objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ResumeOrganisme
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
