<?php
/**
 * Created by PhpStorm.
 * Title：
 * User: yaokai
 * Date: 2020/7/8
 * Time: 10:45
 */

/**
 * 路由辅助方法
 * @User yaokai
 * @return string|string[]
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
