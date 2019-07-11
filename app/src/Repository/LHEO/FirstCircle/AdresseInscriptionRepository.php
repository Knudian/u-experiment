<?php

namespace App\Repository\LHEO\FirstCircle;

use App\Entity\LHEO\FirstCircle\AdresseInscription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AdresseInscription|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdresseInscription|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdresseInscription[]    findAll()
 * @method AdresseInscription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdresseInscriptionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AdresseInscription::class);
    }

    // /**
    //  * @return AdresseInscription[] Returns an array of AdresseInscription objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AdresseInscription
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
