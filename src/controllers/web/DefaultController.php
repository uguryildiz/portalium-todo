<?php

namespace uguryildiz\todo\controllers\web;

use portalium\web\Controller as WebController;

class DefaultController extends WebController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionHi($name)
    {
        $welcome = "Hi, welcome " . $name;

        return $this->render('hi', ['welcome' => $welcome]);
    }

    public function actionCalc($a,$b)
    {
        $total = $a + $b;

        return $this->render('calc', ['total' => $total]);
    }
}