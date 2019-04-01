<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 2019-03-27
 * Time: 14:05
 */

namespace BitcoinVietnam\BitcoinVnCloud;

use BitcoinVietnam\BitcoinVnCloud\Request as Request;
use BitcoinVietnam\BitcoinVnCloud\Response as Response;
use GuzzleHttp\ClientInterface;
use JMS\Serializer\Serializer;

class Client
{
    /**
     * @var ClientInterface
     */
    private $httpClient;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $apiSecret;

    /**
     * @var string
     */
    private $url;

    /**
     * Client constructor.
     * @param ClientInterface $httpClient
     * @param Serializer $serializer
     * @param string $apiKey
     * @param string $apiSecret
     * @param string|null $url
     */
    public function __construct(
        ClientInterface $httpClient,
        Serializer $serializer,
        string $apiKey,
        string $apiSecret,
        ?string $url = 'https://api.bitcoinvn.cloud/api'
    ) {
        $this->httpClient = $httpClient;
        $this->serializer = $serializer;
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
        $this->url = $url;
    }

    /**
     * @param Request\RequestInterface $request
     * @param string $responseClass
     * @return Response\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    private function send(Request\RequestInterface $request, string $responseClass): Response\ResponseInterface
    {
        $params = $this->serializer->toArray($request);
        ksort($params);
        $signature = hash_hmac('sha256', http_build_query($params), $this->apiSecret);

        $options = ['headers' => ['X-EX-APIKEY' => $this->apiKey]];
        if ('post' === $request->getMethod()) {
            $options['form_params'] = array_merge($params, ['signature' => $signature]);
            $options['headers']['Content-Type'] = 'application/x-www-form-urlencoded';
        } else if ('get' === $request->getMethod()) {
            $options['query'] = array_merge($params, ['signature' => $signature]);
        }

        $response = $this->httpClient->request($request->getMethod(), $this->url . $request->getEndpoint(), $options);
        $content = $response->getBody()->getContents();

        return $this->serializer->deserialize($content, $responseClass, 'json');
    }

    /**
     * @return Response\ResponseInterface|Response\IsLive
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function isLive(): Response\IsLive
    {
        return $this->send(new Request\IsLive(), Response\IsLive::class);
    }

    /**
     * @return Response\ResponseInterface|Response\AccountBalance
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function accountBalance(): Response\AccountBalance
    {
        return $this->send(new Request\AccountBalance(), Response\AccountBalance::class);
    }

    /**
     * @return Response\ResponseInterface|Response\TickerList
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function tickerList(): Response\TickerList
    {
        return $this->send(new Request\TickerList(), Response\TickerList::class);
    }

    /**
     * @param string $symbol
     * @param string $side
     * @param string $type
     * @param float $price
     * @param float $quantity
     * @return Response\ResponseInterface|Response\NewOrder
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function newOrder(string $symbol, string $side, string $type, float $price, float $quantity): Response\NewOrder
    {
        return $this->send(
            new Request\NewOrder($symbol, $side, $type, $price, $quantity),
            Response\NewOrder::class
        );
    }

    /**
     * @param string $symbol
     * @param string $orderUuid
     * @return Response\ResponseInterface|Response\CancelOrder
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function cancelOrder(string $symbol, string $orderUuid): Response\CancelOrder
    {
        return $this->send(
            new Request\CancelOrder($symbol, $orderUuid),
            Response\CancelOrder::class
        );
    }

    /**
     * @param string $symbol
     * @param int|null $limit
     * @return Response\ResponseInterface|Response\GetOrderbook
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOrderbook(string $symbol, ?int $limit = null): Response\GetOrderbook
    {
        return $this->send(new Request\GetOrderbook($symbol, $limit), Response\GetOrderbook::class);
    }
}