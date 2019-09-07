<?php

namespace BackendRoutesProvider;

use GuzzleHttp\Client;
use PSX\Schema\Parser\Popo\Dumper;
use PSX\Schema\SchemaManager;
use PSX\Schema\SchemaTraverser;
use PSX\Schema\Visitor\TypeVisitor;

class Resource
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $token;

    /**
     * @var Client
     */
    private $httpClient;

    /**
     * @var SchemaManager
     */
    private $schemaManager;

    public function __construct(string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {

        $this->url = $baseUrl . '/backend/routes/provider';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    public function get(): Routes_Providers
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Routes_Providers::class);
    }

    private function convertToArray($object)
    {
        return (new Dumper())->dump($object);
    }

    private function convertToObject(string $data, ?string $class)
    {
        $data = Parser::decode($data);
        if ($class !== null) {
            $schema = $this->schemaManager->getSchema($class);
            return (new SchemaTraverser())->traverse($data, $schema, new TypeVisitor());
        } else {
            return $data;
        }
    }
}





/**
 * @Title("Routes Provider")
 */
class Routes_Provider
{
    /**
     * @Key("name")
     * @Type("string")
     */
    protected $name;
    /**
     * @Key("class")
     * @Type("string")
     */
    protected $class;
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setClass($class)
    {
        $this->class = $class;
    }
    public function getClass()
    {
        return $this->class;
    }
}
/**
 * @Title("Routes Providers")
 */
class Routes_Providers
{
    /**
     * @Key("providers")
     * @Type("array")
     * @Items(@Ref("PSX\Generation\Routes_Provider"))
     */
    protected $providers;
    public function setProviders($providers)
    {
        $this->providers = $providers;
    }
    public function getProviders()
    {
        return $this->providers;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Routes_Providers")
     * @Ref("PSX\Generation\Routes_Providers")
     */
    protected $Routes_Providers;
    public function setRoutes_Providers($Routes_Providers)
    {
        $this->Routes_Providers = $Routes_Providers;
    }
    public function getRoutes_Providers()
    {
        return $this->Routes_Providers;
    }
}

