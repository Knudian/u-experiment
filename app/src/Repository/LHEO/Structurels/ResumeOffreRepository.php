<?php

namespace App\Repository\LHEO\Structurels;

use App\Entity\LHEO\Structurels\ResumeOffre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ResumeOffre|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResumeOffre|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResumeOffre[]    findAll()
 * @method ResumeOffre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResumeOffreRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ResumeOffre::class);
    }

    // /**
    //  * @return ResumeOffre[] Returns an array of ResumeOffre objects
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
    public function findOneBySomeField($value): ?ResumeOffre
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
