<?php

namespace App\Repository\LHEO\SecondCircle;

use App\Entity\LHEO\SecondCircle\ContactFormateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ContactFormateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContactFormateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContactFormateur[]    findAll()
 * @method ContactFormateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactFormateurRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ContactFormateur::class);
    }

    // /**
    //  * @return ContactFormateur[] Returns an array of ContactFormateur objects
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
    public function findOneBySomeField($value): ?ContactFormateur
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
