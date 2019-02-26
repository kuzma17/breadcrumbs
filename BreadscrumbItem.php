<?php

namespace Kuzma17\Breadcrumbs;

class BreadscrumbItem
{
    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $url;

    /**
     * @param $title
     * @param $url
     */
    public function add($title, $url){
        $this->title = $title;
        $this->url = $url;
    }
}