<?php

namespace App\Repository\LHEO\Structurels;

use App\Entity\LHEO\Structurels\ContactFormationResume;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ContactFormationResume|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContactFormationResume|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContactFormationResume[]    findAll()
 * @method ContactFormationResume[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactFormationResumeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ContactFormationResume::class);
    }

    // /**
    //  * @return ContactFormationResume[] Returns an array of ContactFormationResume objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ContactFormationResume
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
