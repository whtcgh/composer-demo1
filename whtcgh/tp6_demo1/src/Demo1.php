<?php

declare(strict_types=1);

namespace whtcgh;

class Demo1 extends \think\Service
{
  /**
   * 注册服务
   *
   * @return mixed
   */
  public function register()
  {
    echo __METHOD__;
  }
}
