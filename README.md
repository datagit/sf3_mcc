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