<?php

namespace App\Repository\LHEO\Dicts;

use App\Entity\LHEO\Dicts\ModaliteEnseignement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ModaliteEnseignement|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModaliteEnseignement|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModaliteEnseignement[]    findAll()
 * @method ModaliteEnseignement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModaliteEnseignementRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ModaliteEnseignement::class);
    }
}
