<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel
 * Date: 05/08/2017
 * Time: 11:55
 */

namespace TicketBundle\Menu;

/*
 * Class Builder
 *
 * Creates the menus to be used by our application
 */

use Knp\Menu\MenuFactory;

class Builder
{
    /**
     * Create the main menu of our application
     *
     * @param MenuFactory $factory
     * @param array $options
     * @return \Knp\Menu\ItemInterface|\Knp\Menu\MenuItem
     */
    public function mainMenu(MenuFactory $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav pull-right');
        $menu->addChild('Accueil', ['route' => 'homepage'])
            ->setLinkAttribute('title', 'Allez à notre page d\'accueil');
        $menu->addChild('Billetterie', ['route' => 'ticket'])
            ->setLinkAttribute('title', 'Achetez vos billets');
        $menu['Accueil']->setLinkAttribute('title', 'Allez à notre page d\'accueil');
        $menu->addChild('Infos pratiques', ['route' => 'info'])
            ->setLinkAttribute('title', 'Infos pratiques pour votre visite');
        return $menu;

    }
}