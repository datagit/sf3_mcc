sf3_mycc
========

A Symfony project created on November 29, 2017, 11:47 pm.

1. $php bin/console generate:bundle
    update composer.json
    $composer dump-autoload
    guide: https://symfony.com/doc/current/bundles/SensioGeneratorBundle/commands/generate_bundle.html
2. $php bin/console doctrine:generate:entity
    The Entity shortcut name: MccDataSourceBundle:Product
3. install $composer require doctrine/doctrine-migrations-bundle "^1.0"
    https://symfony.com/doc/master/bundles/DoctrineMigrationsBundle/index.html
4. install $composer require --dev doctrine/doctrine-fixtures-bundle
    https://symfony.com/doc/master/bundles/DoctrineFixturesBundle/index.html
    doctrine:fixtures:load
5. install $composer require davidbadura/faker-bundle
    https://github.com/DavidBadura/FakerBundle
        https://github.com/fzaninotto/Faker
            https://stackoverflow.com/questions/3191664/list-of-all-locales-and-their-short-codes
6. install $composer require friendsofsymfony/user-bundle "~2.0"
    https://symfony.com/doc/master/bundles/FOSUserBundle/index.html
7. install $php -dmemory_limit=1G /usr/local//bin/composer.phar require javiereguiluz/easyadmin-bundle
    https://symfony.com/doc/master/bundles/EasyAdminBundle/book/installation.html
    $composer clear-cache
    $php bin/console assets:install public --symlink
    