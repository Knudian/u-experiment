<?php declare(strict_types = 1);

namespace App\Repository\LHEO\Dicts;

use App\Entity\LHEO\Dicts\PerimetreRecrutement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PerimetreRecrutement|null find($id, $lockMode = null, $lockVersion = null)
 * @method PerimetreRecrutement|null findOneBy(array $criteria, array $orderBy = null)
 * @method PerimetreRecrutement[]    findAll()
 * @method PerimetreRecrutement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PerimetreRecrutementRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PerimetreRecrutement::class);
    }
}
