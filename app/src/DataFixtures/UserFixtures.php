<?php declare(strict_types = 1);

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * Class UserFixtures
 *
 * @package App\DataFixtures
 */
final class UserFixtures extends Fixture
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $passwordEncoder;

    /**
     * UserFixtures constructor.
     * @param UserPasswordEncoderInterface $passwordEncoder
     */
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    /**
     * Fonction permettant de générer des entités User pour simuler le fonctionnement
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager): void
    {
        // Creating 10 users.
        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $pwd = $this->passwordEncoder->encodePassword(
                $user,
                'userdemo'
            );
            $user
                ->setEmail(sprintf('userdemo%d@example.com', $i))
                ->setPassword($pwd)
                ->setConfirmationPassword($pwd)
                ->setSiret('123 456 7890');

            $manager->persist($user);
        }
        $manager->flush();
    }
}
