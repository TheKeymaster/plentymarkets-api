<?php

namespace PlentyMarkets\Api;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;
use PlentyMarkets\Api\Request\Request;
use PlentyMarkets\Api\Response\Response;

class Client
{
    /** @var Config */
    private $config;

    /** @var GuzzleClient */
    private $client;

    public function __construct(Config $config, ?GuzzleClient $client = null)
    {
        $this->config = $config;
        $this->client = $client ?? new GuzzleClient([
                'base_uri' => $config->getRestUri()
            ]);
    }

    public function send(Request $request): Response
    {
        try {
            $response = $this->client->request(
                $request::REQUEST_METHOD,
                $request::API_ROUTE,
                ['form_params' => $request->buildBody()]
            );
        } catch (GuzzleException $e) {
            // TODO: Implement checks.
        }
    }
}
