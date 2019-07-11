<?php declare(strict_types = 1);

namespace App\Controller;

use App\Services\UserSecurityService;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * Class SecurityController
 *
 * @package App\Controller
 */
final class SecurityController extends AbstractController
{
    /**
     * @var UserSecurityService
     */
    private $userSecurityService;

    /**
     * SecurityController constructor.
     *
     * @param UserSecurityService $userSecurityService
     */
    public function __construct(UserSecurityService $userSecurityService)
    {
        $this->userSecurityService = $userSecurityService;
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
     * @Route(path="/forgotten_password",
     *        name="app_forgotten_password",
     *        methods={"GET", "POST"})
     * @param Request $request
     * @return Response
     * @throws Exception
     */
    public function forgottenPassword(Request $request): Response
    {
        if ($request->getMethod() === 'GET') {
            return $this->render('security/forgotten_password.html.twig');
        }
        $email = $request->request->get('email');
        try {
            $user = $this->userSecurityService->forgottenPassword($email);
        } catch (Exception $exception) {
            $this->addFlash('warning', $exception->getMessage());
            return $this->redirectToRoute('homepage');
        }
        /*

                $url = $this->generateUrl(
                    'app_reset_password',
                    ['token' => $user->getResetToken()],
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
                */
        $this->addFlash('notice', 'Mail envoyé');
        return $this->redirectToRoute('homepage');
    }

    /**
     * @Route(
     *     path="/reset_password/{token}",
     *     name="app_reset_password",
     *     methods={"POST"}
     * )
     * @param Request $request
     * @param string $token
     * @return RedirectResponse
     */
    public function resetPassword(Request $request, string $token): RedirectResponse
    {
        $password = $request->request->get('password');
        try {
            $this->userSecurityService->resetPassword($token, $password);
            $this->addFlash('notice', 'Mot de passe mis à jour');
        } catch (Exception $exception) {
            $this->addFlash('danger', 'Token Inconnu');
        }
        return $this->redirectToRoute('homepage');
    }
}
