<?php

namespace App\Repository\LHEO\FirstCircle;

use App\Entity\LHEO\FirstCircle\CoordonneesOrganisme;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CoordonneesOrganisme|null find($id, $lockMode = null, $lockVersion = null)
 * @method CoordonneesOrganisme|null findOneBy(array $criteria, array $orderBy = null)
 * @method CoordonneesOrganisme[]    findAll()
 * @method CoordonneesOrganisme[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoordonneesOrganismeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CoordonneesOrganisme::class);
    }

    // /**
    //  * @return CoordonneesOrganisme[] Returns an array of CoordonneesOrganisme objects
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
    public function findOneBySomeField($value): ?CoordonneesOrganisme
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
