<?php
/*
* This file is part of the Astaroth package.
 *
 * (c) 2016 Victorien POTTIAU ~ Emmanuel LEROUX
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Astaroth;

interface iDbClass extends \ArrayAccess {
    public function __set($name, $value);
    public function __get($name);
    public function __isset($name);
}

?>