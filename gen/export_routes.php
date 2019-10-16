<?php

namespace ExportRoutes;

use GuzzleHttp\Client;
use PSX\Json\Parser;
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

        $this->url = $baseUrl . '/export/routes';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Export_Routes
     */
    public function get(): Export_Routes
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Export_Routes::class);
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
 * @Title("Export Routes Methods")
 * @AdditionalProperties(@Schema(type="string"))
 */
class Export_Routes_Methods extends \ArrayObject
{
}
/**
 * @Title("Export Routes Paths")
 * @AdditionalProperties(@Ref("ExportRoutes\Export_Routes_Methods"))
 */
class Export_Routes_Paths extends \ArrayObject
{
}
/**
 * @Title("Export Routes")
 */
class Export_Routes
{
    /**
     * @Key("routes")
     * @Ref("ExportRoutes\Export_Routes_Paths")
     */
    protected $routes;
    /**
     * @param Export_Routes_Paths $routes
     */
    public function setRoutes(?Export_Routes_Paths $routes)
    {
        $this->routes = $routes;
    }
    /**
     * @return Export_Routes_Paths
     */
    public function getRoutes() : ?Export_Routes_Paths
    {
        return $this->routes;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Export_Routes")
     * @Ref("ExportRoutes\Export_Routes")
     */
    protected $Export_Routes;
    /**
     * @param Export_Routes $Export_Routes
     */
    public function setExport_Routes(?Export_Routes $Export_Routes)
    {
        $this->Export_Routes = $Export_Routes;
    }
    /**
     * @return Export_Routes
     */
    public function getExport_Routes() : ?Export_Routes
    {
        return $this->Export_Routes;
    }
}

