<?php

namespace App\Repository\LHEO\Structurels;

use App\Entity\LHEO\Structurels\ModulePrerequis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ModulePrerequis|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModulePrerequis|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModulePrerequis[]    findAll()
 * @method ModulePrerequis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModulePrerequisRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ModulePrerequis::class);
    }

    // /**
    //  * @return ModulePrerequis[] Returns an array of ModulePrerequis objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ModulePrerequis
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
