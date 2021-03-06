<?php declare(strict_types=1);

namespace App\Repository\External;

use App\Entity\External\CodeRome;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CodeRome|null find($id, $lockMode = null, $lockVersion = null)
 * @method CodeRome|null findOneBy(array $criteria, array $orderBy = null)
 * @method CodeRome[]    findAll()
 * @method CodeRome[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CodeRomeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CodeRome::class);
    }
}
