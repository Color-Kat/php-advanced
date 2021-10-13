<?php

namespace app\core;

class View
{
    /**
     * @var string path to view from views directory
     */
    private $path;

    /**
     * @var array list of controller name and action
     */
    private $params;

    /**
     * default layout
     */
    private $layout = 'default';

    public function __construct($params)
    {
        $this->params = $params;  // save controller and action names

        // save path to view from views directory
        $this->path = $params['controller'] . DIRECTORY_SEPARATOR . $params['action'];
    }

    /**
     * @param string $title page title
     * @param mixed $vars
     */
    public function render($title, $vars = null)
    {
        // path to require view
        $filename = APP . '/views/' . $this->path . '.php';

        // check if the file exists
        if (!file_exists($filename)) {
            throw new \Exception("View [$filename] is not found!");
            return false;
        }

        // copy file content in $content ($content is displayed in the view)
        ob_start();
        require $filename;
        $content = ob_get_clean();

        // require layout
        require APP . '/views/layouts/' . $this->layout . '.php';
    }
}
