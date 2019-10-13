<?php

namespace DocVersionPath;

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

    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $path;

    public function __construct(string $version, string $path, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        $this->version = $version;
        $this->path = $path;

        $this->url = $baseUrl . '/doc/' . $version . '/*path';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Documentation_Detail
     */
    public function get(): Documentation_Detail
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Documentation_Detail::class);
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
 * @Title("Documentation Method Responses")
 * @AdditionalProperties(@Schema(type="string"))
 */
class Documentation_Method_Responses extends \ArrayObject
{
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
    public function setRel(?string $rel)
    {
        $this->rel = $rel;
    }
    public function getRel() : ?string
    {
        return $this->rel;
    }
    public function setHref(?string $href)
    {
        $this->href = $href;
    }
    public function getHref() : ?string
    {
        return $this->href;
    }
}
/**
 * @Title("Documentation Method")
 */
class Documentation_Method
{
    /**
     * @Key("description")
     * @Type("string")
     */
    protected $description;
    /**
     * @Key("queryParameters")
     * @Type("string")
     */
    protected $queryParameters;
    /**
     * @Key("request")
     * @Type("string")
     */
    protected $request;
    /**
     * @Key("responses")
     * @Ref("PSX\Generation\Documentation_Method_Responses")
     */
    protected $responses;
    public function setDescription(?string $description)
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setQueryParameters(?string $queryParameters)
    {
        $this->queryParameters = $queryParameters;
    }
    public function getQueryParameters() : ?string
    {
        return $this->queryParameters;
    }
    public function setRequest(?string $request)
    {
        $this->request = $request;
    }
    public function getRequest() : ?string
    {
        return $this->request;
    }
    public function setResponses(?Documentation_Method_Responses $responses)
    {
        $this->responses = $responses;
    }
    public function getResponses() : ?Documentation_Method_Responses
    {
        return $this->responses;
    }
}
/**
 * @Title("Documentation Methods")
 * @AdditionalProperties(@Ref("PSX\Generation\Documentation_Method"))
 */
class Documentation_Methods extends \ArrayObject
{
}
/**
 * @Title("Documentation Schema")
 * @Description("Contains the JSON Schema object")
 */
class Documentation_Schema
{
}
/**
 * @Title("Documentation Detail")
 */
class Documentation_Detail
{
    /**
     * @Key("path")
     * @Type("string")
     */
    protected $path;
    /**
     * @Key("version")
     * @Type("string")
     */
    protected $version;
    /**
     * @Key("status")
     * @Type("integer")
     */
    protected $status;
    /**
     * @Key("description")
     * @Type("string")
     */
    protected $description;
    /**
     * @Key("schema")
     * @Ref("PSX\Generation\Documentation_Schema")
     */
    protected $schema;
    /**
     * @Key("pathParameters")
     * @Type("string")
     */
    protected $pathParameters;
    /**
     * @Key("methods")
     * @Ref("PSX\Generation\Documentation_Methods")
     */
    protected $methods;
    /**
     * @Key("links")
     * @Type("array")
     * @Items(@Ref("PSX\Generation\Discovery_Link"))
     */
    protected $links;
    public function setPath(?string $path)
    {
        $this->path = $path;
    }
    public function getPath() : ?string
    {
        return $this->path;
    }
    public function setVersion(?string $version)
    {
        $this->version = $version;
    }
    public function getVersion() : ?string
    {
        return $this->version;
    }
    public function setStatus(?int $status)
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setDescription(?string $description)
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setSchema(?Documentation_Schema $schema)
    {
        $this->schema = $schema;
    }
    public function getSchema() : ?Documentation_Schema
    {
        return $this->schema;
    }
    public function setPathParameters(?string $pathParameters)
    {
        $this->pathParameters = $pathParameters;
    }
    public function getPathParameters() : ?string
    {
        return $this->pathParameters;
    }
    public function setMethods(?Documentation_Methods $methods)
    {
        $this->methods = $methods;
    }
    public function getMethods() : ?Documentation_Methods
    {
        return $this->methods;
    }
    public function setLinks(?array $links)
    {
        $this->links = $links;
    }
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
     * @Key("Documentation_Detail")
     * @Ref("PSX\Generation\Documentation_Detail")
     */
    protected $Documentation_Detail;
    public function setDocumentation_Detail(?Documentation_Detail $Documentation_Detail)
    {
        $this->Documentation_Detail = $Documentation_Detail;
    }
    public function getDocumentation_Detail() : ?Documentation_Detail
    {
        return $this->Documentation_Detail;
    }
}

