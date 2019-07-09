<?php declare(strict_types = 1);

namespace App\Repository;

use App\Entity\RecruitmentPerimeter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method RecruitmentPerimeter|null find($id, $lockMode = null, $lockVersion = null)
 * @method RecruitmentPerimeter|null findOneBy(array $criteria, array $orderBy = null)
 * @method RecruitmentPerimeter[]    findAll()
 * @method RecruitmentPerimeter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecruitmentPerimeterRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RecruitmentPerimeter::class);
    }
}
