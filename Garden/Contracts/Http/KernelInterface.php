<?php
/**
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * MIT License for more details.
 *
 * Copyright (c) 2016 (original work) Blog-Tree.com;
 */

namespace bt\Garden\Http;


use bt\Garden\Contracts\Foundation\Application;

interface KernelInterface
{
    /**
     * @return Application
     */
    public function getApp();
}
