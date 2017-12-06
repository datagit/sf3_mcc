1. https://symfony.com/doc/current/bundles/EasyAdminBundle/index.html
2. https://symfony.com/doc/current/bundles/EasyAdminBundle/book/edit-new-configuration.html
    easyadmin_autocomplete
3. custom AdminController of EasyAdmin
    update route: app/config/routing.yml
    AdminController extends BaseAdminController
    preUpdateCommandEntity($entity)