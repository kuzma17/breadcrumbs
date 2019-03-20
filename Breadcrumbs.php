<?php

namespace Kuzma17\Breadcrumbs;


use Kuzma17\Breadcrumbs\Contracts\BreadcrumbsInterface;

class Breadcrumbs implements BreadcrumbsInterface
{
    /**
     * @var
     */
    protected $items;

    /**
     * @param $title
     * @param $route
     */
    public function add($title, $route='')
    {
        $item = new BreadscrumbItem();
        $item->add($title, $route);
        $this->items[] = $item;
    }

    /**
     * @return mixed
     */
    public function get()
    {
        return $this->items;
    }

}