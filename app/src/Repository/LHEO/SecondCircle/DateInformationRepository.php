<?php

namespace App\Repository\LHEO\SecondCircle;

use App\Entity\LHEO\SecondCircle\DateInformation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DateInformation|null find($id, $lockMode = null, $lockVersion = null)
 * @method DateInformation|null findOneBy(array $criteria, array $orderBy = null)
 * @method DateInformation[]    findAll()
 * @method DateInformation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DateInformationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DateInformation::class);
    }

    // /**
    //  * @return DateInformation[] Returns an array of DateInformation objects
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
    public function findOneBySomeField($value): ?DateInformation
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
