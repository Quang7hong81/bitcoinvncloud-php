<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 2019-03-28
 * Time: 12:38
 */

namespace BitcoinVietnam\BitcoinVnCloud\Request;

use JMS\Serializer\Annotation as Serializer;

final class GetOrderbook extends BaseRequest
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $symbol;

    /**
     * @var int|null
     *
     * @Serializer\Type("integer")
     */
    private $limit;

    /**
     * GetOrderbook constructor.
     * @param string $symbol
     * @param int|null $limit
     */
    public function __construct(string $symbol, ?int $limit = null)
    {
        $this->symbol = $symbol;
        $this->limit = $limit;

        $this->method = 'get';
        $this->endpoint = '/depth';
    }
}