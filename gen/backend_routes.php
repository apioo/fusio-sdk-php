<?php

namespace BackendRoutes;

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

        $this->url = $baseUrl . '/backend/routes';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @param GetQuery $query
     * @return Routes_Collection
     */
    public function get(GetQuery $query): Routes_Collection
    {
        $options = [
            'query' => $this->convertToArray($query),
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Routes_Collection::class);
    }

    /**
     * @param Routes $data
     * @return Message
     */
    public function post(Routes $data): Message
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
            'json' => $this->convertToArray($data)
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Message::class);
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
 * @Title("Routes Method Responses")
 * @PatternProperties(pattern="^([0-9]{3})$", property=@Schema(type="integer"))
 */
class Routes_Method_Responses extends \ArrayObject
{
}
/**
 * @Title("Routes Method")
 */
class Routes_Method
{
    /**
     * @Key("method")
     * @Type("string")
     */
    protected $method;
    /**
     * @Key("version")
     * @Type("integer")
     */
    protected $version;
    /**
     * @Key("status")
     * @Type("integer")
     */
    protected $status;
    /**
     * @Key("active")
     * @Type("boolean")
     */
    protected $active;
    /**
     * @Key("public")
     * @Type("boolean")
     */
    protected $public;
    /**
     * @Key("description")
     * @Type("string")
     */
    protected $description;
    /**
     * @Key("operationId")
     * @Type("string")
     */
    protected $operationId;
    /**
     * @Key("parameters")
     * @Type("integer")
     */
    protected $parameters;
    /**
     * @Key("request")
     * @Type("integer")
     */
    protected $request;
    /**
     * @Key("response")
     * @Type("integer")
     */
    protected $response;
    /**
     * @Key("responses")
     * @Ref("BackendRoutes\Routes_Method_Responses")
     */
    protected $responses;
    /**
     * @Key("action")
     * @Type("integer")
     */
    protected $action;
    /**
     * @Key("costs")
     * @Type("integer")
     */
    protected $costs;
    /**
     * @param string $method
     */
    public function setMethod(?string $method)
    {
        $this->method = $method;
    }
    /**
     * @return string
     */
    public function getMethod() : ?string
    {
        return $this->method;
    }
    /**
     * @param int $version
     */
    public function setVersion(?int $version)
    {
        $this->version = $version;
    }
    /**
     * @return int
     */
    public function getVersion() : ?int
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
     * @param bool $active
     */
    public function setActive(?bool $active)
    {
        $this->active = $active;
    }
    /**
     * @return bool
     */
    public function getActive() : ?bool
    {
        return $this->active;
    }
    /**
     * @param bool $public
     */
    public function setPublic(?bool $public)
    {
        $this->public = $public;
    }
    /**
     * @return bool
     */
    public function getPublic() : ?bool
    {
        return $this->public;
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
     * @param string $operationId
     */
    public function setOperationId(?string $operationId)
    {
        $this->operationId = $operationId;
    }
    /**
     * @return string
     */
    public function getOperationId() : ?string
    {
        return $this->operationId;
    }
    /**
     * @param int $parameters
     */
    public function setParameters(?int $parameters)
    {
        $this->parameters = $parameters;
    }
    /**
     * @return int
     */
    public function getParameters() : ?int
    {
        return $this->parameters;
    }
    /**
     * @param int $request
     */
    public function setRequest(?int $request)
    {
        $this->request = $request;
    }
    /**
     * @return int
     */
    public function getRequest() : ?int
    {
        return $this->request;
    }
    /**
     * @param int $response
     */
    public function setResponse(?int $response)
    {
        $this->response = $response;
    }
    /**
     * @return int
     */
    public function getResponse() : ?int
    {
        return $this->response;
    }
    /**
     * @param Routes_Method_Responses $responses
     */
    public function setResponses(?Routes_Method_Responses $responses)
    {
        $this->responses = $responses;
    }
    /**
     * @return Routes_Method_Responses
     */
    public function getResponses() : ?Routes_Method_Responses
    {
        return $this->responses;
    }
    /**
     * @param int $action
     */
    public function setAction(?int $action)
    {
        $this->action = $action;
    }
    /**
     * @return int
     */
    public function getAction() : ?int
    {
        return $this->action;
    }
    /**
     * @param int $costs
     */
    public function setCosts(?int $costs)
    {
        $this->costs = $costs;
    }
    /**
     * @return int
     */
    public function getCosts() : ?int
    {
        return $this->costs;
    }
}
/**
 * @Title("Routes Methods")
 * @PatternProperties(pattern="^(GET|POST|PUT|PATCH|DELETE)$", property=@Ref("BackendRoutes\Routes_Method"))
 */
class Routes_Methods extends \ArrayObject
{
}
/**
 * @Title("Routes Version")
 */
class Routes_Version
{
    /**
     * @Key("version")
     * @Type("integer")
     */
    protected $version;
    /**
     * @Key("status")
     * @Type("integer")
     */
    protected $status;
    /**
     * @Key("methods")
     * @Ref("BackendRoutes\Routes_Methods")
     */
    protected $methods;
    /**
     * @param int $version
     */
    public function setVersion(?int $version)
    {
        $this->version = $version;
    }
    /**
     * @return int
     */
    public function getVersion() : ?int
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
     * @param Routes_Methods $methods
     */
    public function setMethods(?Routes_Methods $methods)
    {
        $this->methods = $methods;
    }
    /**
     * @return Routes_Methods
     */
    public function getMethods() : ?Routes_Methods
    {
        return $this->methods;
    }
}
/**
 * @Title("Message")
 */
class Message
{
    /**
     * @Key("success")
     * @Type("boolean")
     */
    protected $success;
    /**
     * @Key("message")
     * @Type("string")
     */
    protected $message;
    /**
     * @param bool $success
     */
    public function setSuccess(?bool $success)
    {
        $this->success = $success;
    }
    /**
     * @return bool
     */
    public function getSuccess() : ?bool
    {
        return $this->success;
    }
    /**
     * @param string $message
     */
    public function setMessage(?string $message)
    {
        $this->message = $message;
    }
    /**
     * @return string
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
}
/**
 * @Title("Routes")
 * @Required({"path", "config"})
 */
class Routes
{
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    /**
     * @Key("priority")
     * @Type("integer")
     */
    protected $priority;
    /**
     * @Key("path")
     * @Type("string")
     */
    protected $path;
    /**
     * @Key("controller")
     * @Type("string")
     */
    protected $controller;
    /**
     * @Key("scopes")
     * @Type("array")
     * @Items(@Schema(type="string"))
     */
    protected $scopes;
    /**
     * @Key("config")
     * @Type("array")
     * @Items(@Ref("BackendRoutes\Routes_Version"))
     */
    protected $config;
    /**
     * @param int $id
     */
    public function setId(?int $id)
    {
        $this->id = $id;
    }
    /**
     * @return int
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * @param int $priority
     */
    public function setPriority(?int $priority)
    {
        $this->priority = $priority;
    }
    /**
     * @return int
     */
    public function getPriority() : ?int
    {
        return $this->priority;
    }
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
     * @param string $controller
     */
    public function setController(?string $controller)
    {
        $this->controller = $controller;
    }
    /**
     * @return string
     */
    public function getController() : ?string
    {
        return $this->controller;
    }
    /**
     * @param array<string> $scopes
     */
    public function setScopes(?array $scopes)
    {
        $this->scopes = $scopes;
    }
    /**
     * @return array<string>
     */
    public function getScopes() : ?array
    {
        return $this->scopes;
    }
    /**
     * @param array<Routes_Version> $config
     */
    public function setConfig(?array $config)
    {
        $this->config = $config;
    }
    /**
     * @return array<Routes_Version>
     */
    public function getConfig() : ?array
    {
        return $this->config;
    }
}
/**
 * @Title("Routes Collection")
 */
class Routes_Collection
{
    /**
     * @Key("totalResults")
     * @Type("integer")
     */
    protected $totalResults;
    /**
     * @Key("startIndex")
     * @Type("integer")
     */
    protected $startIndex;
    /**
     * @Key("entry")
     * @Type("array")
     * @Items(@Ref("BackendRoutes\Routes"))
     */
    protected $entry;
    /**
     * @param int $totalResults
     */
    public function setTotalResults(?int $totalResults)
    {
        $this->totalResults = $totalResults;
    }
    /**
     * @return int
     */
    public function getTotalResults() : ?int
    {
        return $this->totalResults;
    }
    /**
     * @param int $startIndex
     */
    public function setStartIndex(?int $startIndex)
    {
        $this->startIndex = $startIndex;
    }
    /**
     * @return int
     */
    public function getStartIndex() : ?int
    {
        return $this->startIndex;
    }
    /**
     * @param array<Routes> $entry
     */
    public function setEntry(?array $entry)
    {
        $this->entry = $entry;
    }
    /**
     * @return array<Routes>
     */
    public function getEntry() : ?array
    {
        return $this->entry;
    }
}
/**
 * @Title("GetQuery")
 */
class GetQuery
{
    /**
     * @Key("startIndex")
     * @Type("integer")
     */
    protected $startIndex;
    /**
     * @Key("count")
     * @Type("integer")
     */
    protected $count;
    /**
     * @Key("search")
     * @Type("string")
     */
    protected $search;
    /**
     * @param int $startIndex
     */
    public function setStartIndex(?int $startIndex)
    {
        $this->startIndex = $startIndex;
    }
    /**
     * @return int
     */
    public function getStartIndex() : ?int
    {
        return $this->startIndex;
    }
    /**
     * @param int $count
     */
    public function setCount(?int $count)
    {
        $this->count = $count;
    }
    /**
     * @return int
     */
    public function getCount() : ?int
    {
        return $this->count;
    }
    /**
     * @param string $search
     */
    public function setSearch(?string $search)
    {
        $this->search = $search;
    }
    /**
     * @return string
     */
    public function getSearch() : ?string
    {
        return $this->search;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("GetQuery")
     * @Ref("BackendRoutes\GetQuery")
     */
    protected $GetQuery;
    /**
     * @Key("Routes_Collection")
     * @Ref("BackendRoutes\Routes_Collection")
     */
    protected $Routes_Collection;
    /**
     * @Key("Routes")
     * @Ref("BackendRoutes\Routes")
     */
    protected $Routes;
    /**
     * @Key("Message")
     * @Ref("BackendRoutes\Message")
     */
    protected $Message;
    /**
     * @param GetQuery $GetQuery
     */
    public function setGetQuery(?GetQuery $GetQuery)
    {
        $this->GetQuery = $GetQuery;
    }
    /**
     * @return GetQuery
     */
    public function getGetQuery() : ?GetQuery
    {
        return $this->GetQuery;
    }
    /**
     * @param Routes_Collection $Routes_Collection
     */
    public function setRoutes_Collection(?Routes_Collection $Routes_Collection)
    {
        $this->Routes_Collection = $Routes_Collection;
    }
    /**
     * @return Routes_Collection
     */
    public function getRoutes_Collection() : ?Routes_Collection
    {
        return $this->Routes_Collection;
    }
    /**
     * @param Routes $Routes
     */
    public function setRoutes(?Routes $Routes)
    {
        $this->Routes = $Routes;
    }
    /**
     * @return Routes
     */
    public function getRoutes() : ?Routes
    {
        return $this->Routes;
    }
    /**
     * @param Message $Message
     */
    public function setMessage(?Message $Message)
    {
        $this->Message = $Message;
    }
    /**
     * @return Message
     */
    public function getMessage() : ?Message
    {
        return $this->Message;
    }
}

