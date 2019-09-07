<?php

namespace Doc;

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

        $this->url = $baseUrl . '/doc';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    public function get(): Documentation_Index
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Documentation_Index::class);
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
 * @Title("Discovery Link")
 */
class Discovery_Link
{
    /**
     * @Key("rel")
     * @Type("string")
     */
    protected $rel;
    /**
     * @Key("href")
     * @Type("string")
     */
    protected $href;
    public function setRel($rel)
    {
        $this->rel = $rel;
    }
    public function getRel()
    {
        return $this->rel;
    }
    public function setHref($href)
    {
        $this->href = $href;
    }
    public function getHref()
    {
        return $this->href;
    }
}
/**
 * @Title("Documentation Route")
 */
class Documentation_Route
{
    /**
     * @Key("path")
     * @Type("string")
     */
    protected $path;
    /**
     * @Key("methods")
     * @Type("array")
     * @Items(@Schema(type="string"))
     */
    protected $methods;
    /**
     * @Key("version")
     * @Type("string")
     */
    protected $version;
    public function setPath($path)
    {
        $this->path = $path;
    }
    public function getPath()
    {
        return $this->path;
    }
    public function setMethods($methods)
    {
        $this->methods = $methods;
    }
    public function getMethods()
    {
        return $this->methods;
    }
    public function setVersion($version)
    {
        $this->version = $version;
    }
    public function getVersion()
    {
        return $this->version;
    }
}
/**
 * @Title("Documentation Index")
 */
class Documentation_Index
{
    /**
     * @Key("routings")
     * @Type("array")
     * @Items(@Ref("PSX\Generation\Documentation_Route"))
     */
    protected $routings;
    /**
     * @Key("links")
     * @Type("array")
     * @Items(@Ref("PSX\Generation\Discovery_Link"))
     */
    protected $links;
    public function setRoutings($routings)
    {
        $this->routings = $routings;
    }
    public function getRoutings()
    {
        return $this->routings;
    }
    public function setLinks($links)
    {
        $this->links = $links;
    }
    public function getLinks()
    {
        return $this->links;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Documentation_Index")
     * @Ref("PSX\Generation\Documentation_Index")
     */
    protected $Documentation_Index;
    public function setDocumentation_Index($Documentation_Index)
    {
        $this->Documentation_Index = $Documentation_Index;
    }
    public function getDocumentation_Index()
    {
        return $this->Documentation_Index;
    }
}

