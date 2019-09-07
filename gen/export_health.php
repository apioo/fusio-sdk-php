<?php

namespace ExportHealth;

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

        $this->url = $baseUrl . '/export/health';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    public function get(): Export_Health
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Export_Health::class);
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
 * @Title("Export Health Check")
 */
class Export_Health_Check
{
    /**
     * @Key("healthy")
     * @Type("boolean")
     */
    protected $healthy;
    /**
     * @Key("error")
     * @Type("string")
     */
    protected $error;
    public function setHealthy($healthy)
    {
        $this->healthy = $healthy;
    }
    public function getHealthy()
    {
        return $this->healthy;
    }
    public function setError($error)
    {
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}
/**
 * @Title("Export Health Checks")
 * @AdditionalProperties(@Ref("PSX\Generation\Export_Health_Check"))
 */
class Export_Health_Checks extends \ArrayObject
{
}
/**
 * @Title("Export Health")
 */
class Export_Health
{
    /**
     * @Key("healthy")
     * @Type("boolean")
     */
    protected $healthy;
    /**
     * @Key("checks")
     * @Ref("PSX\Generation\Export_Health_Checks")
     */
    protected $checks;
    public function setHealthy($healthy)
    {
        $this->healthy = $healthy;
    }
    public function getHealthy()
    {
        return $this->healthy;
    }
    public function setChecks($checks)
    {
        $this->checks = $checks;
    }
    public function getChecks()
    {
        return $this->checks;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Export_Health")
     * @Ref("PSX\Generation\Export_Health")
     */
    protected $Export_Health;
    public function setExport_Health($Export_Health)
    {
        $this->Export_Health = $Export_Health;
    }
    public function getExport_Health()
    {
        return $this->Export_Health;
    }
}

