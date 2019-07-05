<?php declare(strict_types = 1);

namespace App\Services;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;

/**
 * Class UserSecurityService
 *
 * @package App\Services
 */
final class UserSecurityService
{
    /**
     * @var UserRepository
     */
    private $repository;
    /**
     * @var UserPasswordEncoderInterface
     */
    private $passwordEncoder;
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;
    /**
     * @var TokenGeneratorInterface
     */
    private $tokenGenerator;

    public function __construct(
        UserRepository $repository,
        UserPasswordEncoderInterface $passwordEncoder,
        EntityManagerInterface $entityManager,
        TokenGeneratorInterface $tokenGenerator
    )
    {
        $this->repository = $repository;
        $this->passwordEncoder = $passwordEncoder;
        $this->entityManager = $entityManager;
        $this->tokenGenerator = $tokenGenerator;
    }

    /**
     * @param string $token
     * @param string $password
     * @throws Exception
     */
    public function resetPassword(string $token, string $password): void
    {
        $user = $this->repository->findOneByResetToken($token);
        if (! $user instanceof User) {
            throw new Exception('Unknown user');
        }
        $user
            ->setResetToken()
            ->setPassword(
                $this->passwordEncoder->encodePassword(
                    $user, $password
                )
            );
        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }

    /**
     * @param string $email
     * @return User
     * @throws Exception
     */
    public function forgottenPassword(string $email): User
    {
        $user = $this->repository->findOneByEmail($email);
        if (! $user instanceof User) {
            throw new Exception('Unknown email');
        }
        $token = $this->tokenGenerator->generateToken();
        $user->setResetToken($token);
        $this->entityManager->persist($user);
        $this->entityManager->flush();
        return $user;
    }
}
