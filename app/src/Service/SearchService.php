<?php declare(strict_types = 1);

namespace App\Service;

use App\Form\SearchFormType;
use Swift_Mailer;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Form\Form;


/**
 * Class SearchService
 *
 * @package App\Service
 */
final class SearchService
{


//    public function __construct()
//    {
//
//    }

    public function search(Form $form)
    {
        dump($form);

    }

}
