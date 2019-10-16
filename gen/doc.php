<?php

namespace Doc;

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

        $this->url = $baseUrl . '/doc';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Documentation_Index
     */
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
    /**
     * @param string $rel
     */
    public function setRel(?string $rel)
    {
        $this->rel = $rel;
    }
    /**
     * @return string
     */
    public function getRel() : ?string
    {
        return $this->rel;
    }
    /**
     * @param string $href
     */
    public function setHref(?string $href)
    {
        $this->href = $href;
    }
    /**
     * @return string
     */
    public function getHref() : ?string
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
    /**
     * @param string $path
     */
    public function setPath(?string $path)
    {
        $this->path = $path;
    }
    /**
     * @return string
     */
    public function getPath() : ?string
    {
        return $this->path;
    }
    /**
     * @param array<string> $methods
     */
    public function setMethods(?array $methods)
    {
        $this->methods = $methods;
    }
    /**
     * @return array<string>
     */
    public function getMethods() : ?array
    {
        return $this->methods;
    }
    /**
     * @param string $version
     */
    public function setVersion(?string $version)
    {
        $this->version = $version;
    }
    /**
     * @return string
     */
    public function getVersion() : ?string
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
     * @Items(@Ref("Doc\Documentation_Route"))
     */
    protected $routings;
    /**
     * @Key("links")
     * @Type("array")
     * @Items(@Ref("Doc\Discovery_Link"))
     */
    protected $links;
    /**
     * @param array<Documentation_Route> $routings
     */
    public function setRoutings(?array $routings)
    {
        $this->routings = $routings;
    }
    /**
     * @return array<Documentation_Route>
     */
    public function getRoutings() : ?array
    {
        return $this->routings;
    }
    /**
     * @param array<Discovery_Link> $links
     */
    public function setLinks(?array $links)
    {
        $this->links = $links;
    }
    /**
     * @return array<Discovery_Link>
     */
    public function getLinks() : ?array
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
     * @Ref("Doc\Documentation_Index")
     */
    protected $Documentation_Index;
    /**
     * @param Documentation_Index $Documentation_Index
     */
    public function setDocumentation_Index(?Documentation_Index $Documentation_Index)
    {
        $this->Documentation_Index = $Documentation_Index;
    }
    /**
     * @return Documentation_Index
     */
    public function getDocumentation_Index() : ?Documentation_Index
    {
        return $this->Documentation_Index;
    }
}

