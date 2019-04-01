<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 2019-03-27
 * Time: 15:01
 */

namespace BitcoinVietnam\BitcoinVnCloud\Request;

interface RequestInterface
{
    public function getMethod(): string;

    public function getEndpoint(): string;
}