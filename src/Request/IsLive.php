<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 2019-03-27
 * Time: 15:33
 */

namespace BitcoinVietnam\BitcoinVnCloud\Request;

final class IsLive extends BaseRequest
{
    /**
     * IsLive constructor.
     */
    public function __construct()
    {
        $this->method = 'get';
        $this->endpoint = '/isLive';
    }
}