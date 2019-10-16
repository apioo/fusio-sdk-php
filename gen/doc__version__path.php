<?php

namespace DocVersionPath;

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
     * @Ref("DocVersionPath\Documentation_Method_Responses")
     */
    protected $responses;
    /**
     * @param string $description
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;
    }
    /**
     * @return string
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param string $queryParameters
     */
    public function setQueryParameters(?string $queryParameters)
    {
        $this->queryParameters = $queryParameters;
    }
    /**
     * @return string
     */
    public function getQueryParameters() : ?string
    {
        return $this->queryParameters;
    }
    /**
     * @param string $request
     */
    public function setRequest(?string $request)
    {
        $this->request = $request;
    }
    /**
     * @return string
     */
    public function getRequest() : ?string
    {
        return $this->request;
    }
    /**
     * @param Documentation_Method_Responses $responses
     */
    public function setResponses(?Documentation_Method_Responses $responses)
    {
        $this->responses = $responses;
    }
    /**
     * @return Documentation_Method_Responses
     */
    public function getResponses() : ?Documentation_Method_Responses
    {
        return $this->responses;
    }
}
/**
 * @Title("Documentation Methods")
 * @AdditionalProperties(@Ref("DocVersionPath\Documentation_Method"))
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
     * @Ref("DocVersionPath\Documentation_Schema")
     */
    protected $schema;
    /**
     * @Key("pathParameters")
     * @Type("string")
     */
    protected $pathParameters;
    /**
     * @Key("methods")
     * @Ref("DocVersionPath\Documentation_Methods")
     */
    protected $methods;
    /**
     * @Key("links")
     * @Type("array")
     * @Items(@Ref("DocVersionPath\Discovery_Link"))
     */
    protected $links;
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
    /**
     * @param int $status
     */
    public function setStatus(?int $status)
    {
        $this->status = $status;
    }
    /**
     * @return int
     */
    public function getStatus() : ?int
    {
        return $this->status;
    }
    /**
     * @param string $description
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;
    }
    /**
     * @return string
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param Documentation_Schema $schema
     */
    public function setSchema(?Documentation_Schema $schema)
    {
        $this->schema = $schema;
    }
    /**
     * @return Documentation_Schema
     */
    public function getSchema() : ?Documentation_Schema
    {
        return $this->schema;
    }
    /**
     * @param string $pathParameters
     */
    public function setPathParameters(?string $pathParameters)
    {
        $this->pathParameters = $pathParameters;
    }
    /**
     * @return string
     */
    public function getPathParameters() : ?string
    {
        return $this->pathParameters;
    }
    /**
     * @param Documentation_Methods $methods
     */
    public function setMethods(?Documentation_Methods $methods)
    {
        $this->methods = $methods;
    }
    /**
     * @return Documentation_Methods
     */
    public function getMethods() : ?Documentation_Methods
    {
        return $this->methods;
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
     * @Key("Documentation_Detail")
     * @Ref("DocVersionPath\Documentation_Detail")
     */
    protected $Documentation_Detail;
    /**
     * @param Documentation_Detail $Documentation_Detail
     */
    public function setDocumentation_Detail(?Documentation_Detail $Documentation_Detail)
    {
        $this->Documentation_Detail = $Documentation_Detail;
    }
    /**
     * @return Documentation_Detail
     */
    public function getDocumentation_Detail() : ?Documentation_Detail
    {
        return $this->Documentation_Detail;
    }
}

