<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 02.03.2019
 * Time: 20:06
 */

abstract class AbstractController
{
    protected $view;

    public function __construct( $view )
    {
        $this->view = $view;
    }

    public function action404() {
        header( 'HTTP/1.1 404 Not Found' );
        header( "Status: 404 Not Found" );
    }

    abstract protected function render( $str );

}