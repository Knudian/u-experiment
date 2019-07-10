<?php

namespace App\Repository\LHEO\Dicts;

use App\Entity\LHEO\Dicts\ModaliteEntreeSortie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ModaliteEntreeSortie|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModaliteEntreeSortie|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModaliteEntreeSortie[]    findAll()
 * @method ModaliteEntreeSortie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModaliteEntreeSortieRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ModaliteEntreeSortie::class);
    }
}
