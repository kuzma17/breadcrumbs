<?php

namespace Kuzma17\Breadcrumbs\Contracts;


interface BreadcrumbsInterface
{
    /**
     * @param $title
     * @param $route
     * @return mixed
     */
    public function add($title, $route);

    /**
     * @return mixed
     */
    public function get();

}