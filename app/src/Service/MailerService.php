<?php declare(strict_types = 1);

namespace App\Service;

use Swift_Attachment;
use Swift_Mailer;
use Swift_Message;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\File\File;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig_Environment;
use Twig_Error_Loader;
use Twig_Error_Runtime;
use Twig_Error_Syntax;

/**
 * Class MailerService
 *
 * @package App\Service
 */
final class MailerService
{
    private const FORGOTTEN_PASSWORD_MAIL_TEMPLATE = 'mail/forgotten-password.html.twig';
    private const FORGOTTEN_PASSWORD_MAIL_SUBJECT = 'Réinitialisation du mot de passe';

    /** @var Swift_Mailer */
    private $mailer;
    /** @var Twig_Environment */
    private $twig;
    /** @var string */
    private $noReplyMail;
    /** @var string */
    private $noReplyName;

    /**
     * MailerService constructor.
     * @param ContainerInterface $container
     * @param Swift_Mailer $mailer
     * @param Twig_Environment $twig
     */
    public function __construct(ContainerInterface $container, Swift_Mailer $mailer, Twig_Environment $twig)
    {
        $this->twig = $twig;
        $this->noReplyMail = $container->getParameter('no_reply_mail');
        $this->noReplyName = $container->getParameter('no_reply_name');
        $this->mailer = $mailer;
    }

    /**
     * @param string $template
     * @param string $subject
     * @param string $recipient
     * @param array $data
     * @param File|null $attachment
     * @param string $filename
     * @param array|null $bcc
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     * @throws Twig_Error_Loader
     * @throws Twig_Error_Runtime
     * @throws Twig_Error_Syntax
     */
    private function sendMail(
        string $template,
        string $subject, string $recipient, array $data,
        File $attachment = null, string $filename = 'attachment', array $bcc = null)
    {
        $message = new Swift_Message();
        $message
            ->setFrom(
                [
                    $this->noReplyMail => $this->noReplyName
                ]
            )
            ->setSubject($subject)
            ->setTo($recipient)
            ->setBcc($bcc)
            ->setBody(
                $this->twig->render($template, $data),
                'text/html'
            );
        if ($attachment) {
            $attach = Swift_Attachment::fromPath($attachment->getRealPath())->setFilename($filename);
            $message->attach($attach);
        }

        $this->mailer->send($message);
    }

    /**
     * @param string $recipient
     * @param array $data
     * @param File|null $attachement
     * @param string $filename
     * @param array $bcc
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     * @throws Twig_Error_Loader
     * @throws Twig_Error_Runtime
     * @throws Twig_Error_Syntax
     */
    public function sendForgottenPasswordMail(string $recipient, array $data, File $attachement = null, string $filename = 'attachment', array $bcc = null)
    {
        $this->sendMail(
            self::FORGOTTEN_PASSWORD_MAIL_TEMPLATE,
            self::FORGOTTEN_PASSWORD_MAIL_SUBJECT,
            $recipient,
            $data,
            $attachement,
            $filename,
            $bcc);
    }
}
