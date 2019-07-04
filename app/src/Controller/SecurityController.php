<?php declare(strict_types = 1);

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Exception;
use Swift_Mailer;
use Swift_Message;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * Class SecurityController
 *
 * @package App\Controller
 */
final class SecurityController extends AbstractController
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * SecurityController constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @Route("/login", name="app_login")
     * @param AuthenticationUtils $authenticationUtils
     * @return Response
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(
            'security/login.html.twig',
            [
                'last_username' => $lastUsername,
                'error' => $error,
            ]
        );
    }

    /**
     * @Route("/logout", name="app_logout")
     * @return RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        return $this->redirectToRoute('homepage');
    }

    /**
     * @Route("/forgotten_password", name="app_forgotten_password")
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @param Swift_Mailer $mailer
     * @param TokenGeneratorInterface $tokenGenerator
     * @return Response
     */
    public function forgottenPassword(
        Request $request,
        UserPasswordEncoderInterface $encoder,
        Swift_Mailer $mailer,
        TokenGeneratorInterface $tokenGenerator
    ): Response
    {
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $entityManager = $this->getDoctrine()->getManager();
            /** @var User|null $user */
            $user = $this->userRepository->findOneByEmail($email);
            if (! $user instanceof User) {
                $this->addFlash('danger', 'Email Inconnu');
                return $this->redirectToRoute('homepage');
            }
            $token = $tokenGenerator->generateToken();
            try{
                $user->setResetToken($token);
                $entityManager->flush();
            } catch (Exception $exception) {
                $this->addFlash('warning', $exception->getMessage());
                return $this->redirectToRoute('homepage');
            }
            $url = $this->generateUrl(
                'app_reset_password',
                ['token' => $token],
                UrlGeneratorInterface::ABSOLUTE_URL
            );
            $message = (new Swift_Message('Forgot Password'))
                ->setFrom('g.ponty@dev-web.io')
                ->setTo($user->getEmail())
                ->setBody(
                    "blablabla voici le token pour reseter votre mot de passe : " . $url,
                    'text/html'
                );

            $mailer->send($message);
            $this->addFlash('notice', 'Mail envoyé');
            return $this->redirectToRoute('homepage');
        }
        return $this->render('security/forgotten_password.html.twig');
    }

    /**
     * @Route("/reset_password/{token}", name="app_reset_password")
     * @param Request $request
     * @param string $token
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @return RedirectResponse|Response
     */
    public function resetPassword(
        Request $request,
        string $token,
        UserPasswordEncoderInterface $passwordEncoder)
    {
        if ($request->isMethod('POST')) {
            $entityManager = $this->getDoctrine()->getManager();
            /** @var User|null $user */
            $user = $this->userRepository->findOneByResetToken($token);
            if (! $user instanceof User) {
                $this->addFlash('danger', 'Token Inconnu');
                return $this->redirectToRoute('homepage');
            }
            $user->setResetToken(null);
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $request->request->get('password')
                )
            );
            $entityManager->flush();
            $this->addFlash('notice', 'Mot de passe mis à jour');
            return $this->redirectToRoute('homepage');
        } else {
            return $this->render('security/reset_password.html.twig', ['token' => $token]);
        }
    }
}
