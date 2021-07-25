<?php
/**
 * Được tạo ra bởi: Ngô Quang Thông
 * Người dùng: bitcoinvn
 * Ngày: 09 Jul 2021
 * Time:01:04:17
 * /

namespace BitcoinVietnam\BitcoinVnCloud\Request;

final class IsLive extends BaseRequest
{
    /**
     * IsLive constructor.
     * / 
    public function __construct()
    {
        $this->method = 'get';
        $this->endpoint = '/isLive';
    }
}
