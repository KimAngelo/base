<?php


namespace Source\Core;


use Source\Support\Message;
use Source\Support\Seo;

/**
 * Class Controller
 * @package Source\Core
 */
class Controller
{
    /**
     * @var View
     */
    protected $view;

    /**
     * @var Seo
     */
    protected $seo;

    /**
     * @var Message
     */
    protected $message;

    /**
     * Controller constructor.
     * @param null $pathToViews
     */
    public function __construct($pathToViews = null)
    {
        $this->view = new View($pathToViews);
        $this->seo = new Seo();
        $this->message = new Message();
    }

}