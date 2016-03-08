<?php namespace Fiddy\Site;

use Backend;
use System\Classes\PluginBase;

/**
 * Site Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Site',
            'description' => 'No description provided yet...',
            'author'      => 'Fiddy',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Fiddy\Site\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'fiddy.site.some_permission' => [
                'tab' => 'Site',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'site' => [
                'label'       => 'Restaurants',
                'url'         => Backend::url('fiddy/site/restaurants'),
                'icon'        => 'icon-leaf',
                'permissions' => ['fiddy.site.*'],
                'order'       => 500,
            ],
        ];
    }

}
