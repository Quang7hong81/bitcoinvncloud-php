<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 2019-03-27
 * Time: 15:15
 */

namespace BitcoinVietnam\BitcoinVnCloud;

use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\SerializerBuilder;

class ClientBuilder
{
    /**
     * @param string $apiKey
     * @param string $apiSecret
     * @return Client
     */
    public static function build(string $apiKey, string $apiSecret): Client
    {
        AnnotationRegistry::registerLoader('class_exists');

        return new Client(
            new \GuzzleHttp\Client(),
            SerializerBuilder::create()->build(),
            $apiKey,
            $apiSecret
        );
    }
}