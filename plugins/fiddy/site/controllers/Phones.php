<?php namespace Fiddy\Site\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Phones Back-end Controller
 */
class Phones extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Fiddy.Site', 'site', 'phones');
    }
}