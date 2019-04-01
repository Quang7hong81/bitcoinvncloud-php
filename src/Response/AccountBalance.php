<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 2019-03-27
 * Time: 16:06
 */

namespace BitcoinVietnam\BitcoinVnCloud\Response;

use BitcoinVietnam\BitcoinVnCloud\Response\AccountBalance\Balances\Item;
use JMS\Serializer\Annotation as Serializer;

final class AccountBalance extends BaseResponse implements ResponseInterface
{
    /**
     * @var array
     *
     * @Serializer\Type("array<string, array<BitcoinVietnam\BitcoinVnCloud\Response\AccountBalance\Balances\Item>>")
     */
    private $data = ['balances' => []];

    /**
     * @return Item[]
     */
    public function getData(): array
    {
        return $this->data['balances'];
    }
}