<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 02.03.2019
 * Time: 20:33
 */

class MainController extends AbstractController
{
    protected $title;
    protected $meta_desc;
    protected $meta_keywords;

    public function __construct()
    {
        parent::__construct( new View( DIR_TMPL ) );
    }

    public function action404() {
        parent::action404();
        $this->title = "Страница не найдена 404";
        $this->meta_desc = "запрошенная страница не существует";
        $this->meta_keywords = "Страница не найдена";

        $content = $this->view->render("404", [], true);
        $this->render( $content );
    }

    public function actionIndex() {
        $this->title = 'Главная страница';
        $this->meta_desc = "Описание главной страницы";
        $this->meta_keywords = "Описание, главной страниывавыа";

        $content = $this->view->render("index", [], true);
        $this->render( $content );
    }

    public function actionPage() {
        $this->title = 'Внут. страница';
        $this->meta_desc = "Внут. страницы";
        $this->meta_keywords = "Внут. Описание, главной страниывавыа";

        $content = $this->view->render("page", [], true);
        $this->render( $content );
    }

    protected function render($content)
    {
        $params = [];
        $params['title'] = $this->title;
        $params['$meta_desc'] = $this->meta_desc;
        $params['$meta_keywords'] = $this->meta_keywords;
        $params['content'] = $content;
        $this->view->render( MAIN_LAYOUT, $params );
    }
}