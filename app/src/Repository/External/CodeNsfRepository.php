<?php declare(strict_types = 1);

namespace App\Repository\External;

use App\Entity\External\CodeNsf;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CodeNsf|null find($id, $lockMode = null, $lockVersion = null)
 * @method CodeNsf|null findOneBy(array $criteria, array $orderBy = null)
 * @method CodeNsf[]    findAll()
 * @method CodeNsf[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CodeNsfRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CodeNsf::class);
    }
}
