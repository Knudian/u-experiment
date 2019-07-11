<?php

namespace App\Repository\LHEO\Dicts;

use App\Entity\LHEO\Dicts\TypeModule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TypeModule|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeModule|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeModule[]    findAll()
 * @method TypeModule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeModuleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TypeModule::class);
    }
}
