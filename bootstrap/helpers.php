<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/7
 * Time: 2:26
 * file: helpers.php
 * email:yll1024335892@163.com
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
?>