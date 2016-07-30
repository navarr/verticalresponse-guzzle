<?php

namespace VerticalResponse\Client;

use GuzzleHttp\Client;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class GuzzleClient implements HttpClientInterface
{
    /** @var Client */
    private $client;

    /**
     * GuzzleClient constructor.
     * @param array $config
     */
    public function __construct($config)
    {
        $this->client = new Client($config);
    }

    /**
     * @param RequestInterface $request
     * @return ResponseInterface
     */
    public function send(RequestInterface $request)
    {
        return $this->client->send($request);
    }
}
