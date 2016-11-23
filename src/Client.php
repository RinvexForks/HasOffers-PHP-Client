<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\HasOffers;

use GuzzleHttp\Client as GuzzleClient;

class Client
{
    private $apiUrlBrand = 'https://api.hasoffers.com/Apiv3/json?NetworkId=%s&Target=%s&Method=%s&NetworkToken=%s';

    private $apiUrlAffiliate = 'https://api.hasoffers.com/Apiv3/json?NetworkId=%s&Target=%s_%s&Method=%s&api_key=%s';

    private $apiUrlYeahMobi = 'http://yeahmobi.hasoffers.com/%s.json?api_key=%s';

    private $apiUrlFurtherMobi = 'http://aff.furthermobi.com/%s.json?api_key=%s';

    private $headers = ['User-Agent' => 'Grasp/HasOffers'];

    private $httpClient;

    private $apiKey;

    private $networkId;

    private $apiType;

    private $apiNamespace;

    public function __construct($apiKey, $networkId = null)
    {
        $this->setApiKey($apiKey);

        $this->setNetworkId($networkId);

        $this->setHttpClient(new GuzzleClient([
            'defaults' => [
                'headers' => $this->getHeaders(),
            ],
        ]));
    }

    public function api($class)
    {
        $class = 'BrianFaust\\HasOffers\\Api\\'.$class;

        return new $class($this);
    }

    public function get($apiMethod, $parameters = [])
    {
        $requestUrl = $this->buildUrl($apiMethod, $parameters);
        $requestUrl = urldecode($requestUrl);

        $response = $this->getHttpClient()->get($requestUrl);

        return $this->handleResponse($response);
    }

    private function buildUrl($apiMethod, $parameters)
    {
        switch ($this->getApiType()) {
            case 'Brand':
                $url = sprintf($this->apiUrlBrand, $this->getNetworkId(), $this->getApiNamespace(), $apiMethod, $this->getApiKey());
            break;

            case 'Affiliate':
                $url = sprintf($this->apiUrlAffiliate, $this->getNetworkId(), $this->getApiType(), $this->getApiNamespace(), $apiMethod, $this->getApiKey());
            break;

            case 'YeahMobi':
                $url = sprintf($this->apiUrlYeahMobi, $apiMethod, $this->getApiKey());
            break;

            case 'FurtherMobi':
                $url = sprintf($this->apiUrlFurtherMobi, $apiMethod, $this->getApiKey());
            break;
        }

        return $url.'&'.http_build_query($parameters);
    }

    private function handleResponse($response)
    {
        $statusCode = $response->getStatusCode();
        $body = $response->json(['object' => true]);

        if ($statusCode >= 200 && $statusCode < 300) {
            return $body;
        }

        throw new \Exception($body->message, $statusCode);
    }

    public function getApiUrlAffiliate()
    {
        return $this->apiUrlAffiliate;
    }

    public function setApiUrlAffiliate($apiUrlAffiliate)
    {
        $this->apiUrlAffiliate = $apiUrlAffiliate;
    }

    public function getApiUrlBrand()
    {
        return $this->apiUrlBrand;
    }

    public function setApiUrlBrand($apiUrlBrand)
    {
        $this->apiUrlBrand = $apiUrlBrand;
    }

    public function getApiUrlYeahMobi()
    {
        return $this->apiUrlYeahMobi;
    }

    public function setApiUrlYeahMobi($apiUrlYeahMobi)
    {
        $this->apiUrlYeahMobi = $apiUrlYeahMobi;
    }

    public function getApiUrlFurtherMobi()
    {
        return $this->apiUrlFurtherMobi;
    }

    public function setApiUrlFurtherMobi($apiUrlFurtherMobi)
    {
        $this->apiUrlFurtherMobi = $apiUrlFurtherMobi;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getNetworkId()
    {
        return $this->networkId;
    }

    public function setNetworkId($networkId)
    {
        $this->networkId = $networkId;
    }

    public function getApiType()
    {
        return $this->apiType;
    }

    public function setApiType($apiType)
    {
        $this->apiType = $apiType;
    }

    public function getApiNamespace()
    {
        return $this->apiNamespace;
    }

    public function setApiNamespace($apiNamespace)
    {
        $this->apiNamespace = $apiNamespace;
    }

    public function getHttpClient()
    {
        return $this->httpClient;
    }

    public function setHttpClient($httpClient)
    {
        $this->httpClient = $httpClient;
    }
}
