<?php


namespace app\controllers;


use app\models\AppModel;
use app\widgets\language\Language;
use Nerubian\App;
use Nerubian\Controller;

class AppController extends Controller
{

    public function __construct($route)
    {
        parent::__construct($route);
        new AppModel();

        App::$app->setProperty('languages', Language::getLanguages());
        App::$app->setProperty('language', Language::getLanguage(App::$app->getProperty('languages')));
    }

}