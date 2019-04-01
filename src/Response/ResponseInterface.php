<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 2019-03-27
 * Time: 15:42
 */

namespace BitcoinVietnam\BitcoinVnCloud\Response;

interface ResponseInterface
{
    /**
     * @return mixed
     */
    public function getData();

    /**
     * @return int
     */
    public function getCode(): int;

    /**
     * @return string
     */
    public function getMsg(): string;

    /**
     * @return bool
     */
    public function isOk(): bool;
}