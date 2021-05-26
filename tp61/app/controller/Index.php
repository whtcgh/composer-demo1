<?php
namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    /**
     * @param  string $name 数据名称
     * @return mixed
     * @Route("/")
     */
    public function index()
    {
        return __METHOD__;
    }

    /**
     * @param  string $name 数据名称
     * @return mixed
     * @Route("hello/:name")
     */
    public function hello($name)
    {
        return 'hello,' . $name;
    }
}
