<?php

namespace app;


use Slim\Slim;

class Widget
{

    /** @var array  */
    private static $stack = [];

    public function __construct()
    {
        $this->init();
    }

    /**
     * Первостипенное выполнение
     */
    public function init(){}

    /**
     * Выполнение при вызове
     * @return mixed
     */
    public function run(){}

    /**
     * @param array $data
     * @param bool $returned
     * @return string
     */
    public static function widget(array $data=[], $returned=false)
    {
        ob_start();
        ob_implicit_flush(false);
        $class = get_called_class();

        if(!isset(self::$stack[$class]))
            self::$stack[$class] = new $class();

        /* @var self $widget */
        $widget =  self::$stack[$class];
        foreach ($data as $key=>$value)
            $widget->$key = $value;

        $content = ob_get_clean() . $widget->run();

        if($returned) return $content;
        else echo $content;
    }


    public function render($view, $data = [], $returned = false, $withData = false)
    {
        $baseView = Core::View();
        $baseView->setTemplatesDirectory(Core::root().'/widgets/views');
        $html = $baseView->render($view, $data, $withData);
        $baseView->setTemplatesDirectory(Core::param('slim')['templates.path']);
        if($returned)
            return $html;
        else
            echo $html;
    }


}