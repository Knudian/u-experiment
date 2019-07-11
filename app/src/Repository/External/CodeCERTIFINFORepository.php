<?php

namespace App\Repository\External;

use App\Entity\External\CodeCERTIFINFO;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CodeCERTIFINFO|null find($id, $lockMode = null, $lockVersion = null)
 * @method CodeCERTIFINFO|null findOneBy(array $criteria, array $orderBy = null)
 * @method CodeCERTIFINFO[]    findAll()
 * @method CodeCERTIFINFO[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CodeCERTIFINFORepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CodeCERTIFINFO::class);
    }

    // /**
    //  * @return CodeCERTIFINFO[] Returns an array of CodeCERTIFINFO objects
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
    public function findOneBySomeField($value): ?CodeCERTIFINFO
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
