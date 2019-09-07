<?php

namespace Fusio\Sdk;

use GuzzleHttp\Client as HttpClient;
use PSX\Schema\SchemaManager;

class Client
{
    /**
     * @var string
     */
    private $baseUrl;

    /**
     * @var string
     */
    private $accessToken;

    /**
     * @var HttpClient
     */
    private $httpClient;

    /**
     * @var SchemaManager
     */
    private $schemaManager;

    public function __construct(string $baseUrl, string $accessToken, ?HttpClient $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        $this->baseUrl = $baseUrl;
        $this->accessToken = $accessToken;
        $this->httpClient = $httpClient ?? new HttpClient();
        $this->schemaManager = $schemaManager ?? new SchemaManager();
    }

    public function authorization(): Authorization
    {
        return new Authorization($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function backend(): Backend
    {
        return new Backend($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function consumer(): Consumer
    {
        return new Consumer($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function meta(): Meta
    {
        return new Meta($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
