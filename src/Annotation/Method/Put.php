<?php
/**
 * Created by PhpStorm.
 * User: kakuilan
 * Date: 2020/1/15
 * Time: 17:15
 * Desc:
 */

declare(strict_types=1);

namespace Hyperf\Apihelper\Annotation\Method;

use Hyperf\Apihelper\Annotation\Methods;

/**
 * @Annotation
 * @Target({"METHOD"})
 */
class Put extends Methods {

    public $methods = ['PUT'];

}