<?php

namespace uguryildiz\todo;

class Module extends \portalium\base\Module
{
    public $apiRules = [
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => [
                'todo/default',
            ]
        ],
    ];
    
    public static function moduleInit()
    {
        self::registerTranslation('template','@uguryildiz/todo/messages',[
            'todo' => 'todo.php',
        ]);
    }

    public static function t($message, array $params = [])
    {
        return parent::coreT('todo', $message, $params);
    }
}