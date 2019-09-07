<?php

namespace Fusio\Sdk;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;

class BaseResource
{
    /**
     * @var string 
     */
    protected $baseUrl;

    /**
     * @var string 
     */
    protected $accessToken;

    /**
     * @var Client 
     */
    protected $httpClient;

    /**
     * @var SchemaManager
     */
    protected $schemaManager;

    public function __construct(string $baseUrl, string $accessToken, Client $httpClient, SchemaManager $schemaManager)
    {
        $this->baseUrl = $baseUrl;
        $this->accessToken = $accessToken;
        $this->httpClient = $httpClient;
        $this->schemaManager = $schemaManager;
    }
}
