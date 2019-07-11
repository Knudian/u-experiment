# Exécution des tests

Dans le dossier `app` :

- [phpunit](https://phpunit.de/) et [la documentation Symfony](https://symfony.com/doc/current/testing.html): `php bin/phpunit`
- [phpstan](https://github.com/phpstan/phpstan): `vendor/bin/phpstan analyse -l 7 -c phpstan.neon src tests`
- [php insights](https://github.com/nunomaduro/phpinsights): `vendor/bin/phpinsights`
- [phpDocumentor](https://docs.phpdoc.org/getting-started/installing.html#phar): Télécharger l'archive [phpDocumentor.phar](http://www.phpdoc.org/phpDocumentor.phar) à la racine du projet (`/app`) puis la commande `chmod +x phpDocumentor.phar`, et enfin `phpDocumentor -d ./src -t docs/source`
