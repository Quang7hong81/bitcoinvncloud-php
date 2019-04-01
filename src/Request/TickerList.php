<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 2019-03-28
 * Time: 11:16
 */

namespace BitcoinVietnam\BitcoinVnCloud\Request;

final class TickerList extends BaseRequest
{
    /**
     * TickerList constructor.
     */
    public function __construct()
    {
        $this->method = 'get';
        $this->endpoint = '/ticker/list';
    }
}