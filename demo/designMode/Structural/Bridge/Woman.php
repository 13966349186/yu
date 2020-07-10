<?php

/**
 * link: http://www.zjhejiang.com/
 * copyright: Copyright (c) 2020 浙江禾匠信息科技有限公司
 * author: xay
 */

namespace DesignMode\Structural\Bridge;

class Woman extends People
{
    public function start()
    {
        return $this->food->eat();
    }
}
