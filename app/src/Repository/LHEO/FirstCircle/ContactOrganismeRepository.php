<?php

namespace App\Repository\LHEO\FirstCircle;

use App\Entity\LHEO\FirstCircle\ContactOrganisme;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ContactOrganisme|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContactOrganisme|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContactOrganisme[]    findAll()
 * @method ContactOrganisme[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactOrganismeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ContactOrganisme::class);
    }

    // /**
    //  * @return ContactOrganisme[] Returns an array of ContactOrganisme objects
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
    public function findOneBySomeField($value): ?ContactOrganisme
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
