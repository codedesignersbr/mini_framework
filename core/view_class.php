<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 02.03.2019
 * Time: 20:07
 */

class View
{
    private $dir_tml;

    public function __construct( $dir_tmpl )
    {
        $this->dir_tml = $dir_tmpl;
    }

    public function render( $file, $params, $return = false ) {
        $template = $this->dir_tml . $file . ".tpl";
        extract( $params );
        ob_start();
        include $template;
        if ( $return ) return ob_get_clean();
        echo ob_get_clean();
    }
}