<?php
/**
 * link: http://www.zjhejiang.com/
 * copyright: Copyright (c) 2020 浙江禾匠信息科技有限公司
 * author: xay
 */

namespace DesignMode\Behavioral\FactoryMethod;


class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        echo $message;
    }
}