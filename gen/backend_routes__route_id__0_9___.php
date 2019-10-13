<?php

namespace BackendRoutesRoute_id09;

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
     * @var int
     */
    private $route_id;

    public function __construct(int $route_id, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        $this->route_id = $route_id;

        $this->url = $baseUrl . '/backend/routes/' . $route_id . '';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Routes
     */
    public function get(): Routes
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Routes::class);
    }

    /**
     * @param Routes $data
     * @return Message
     */
    public function put(Routes $data): Message
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
            'json' => $this->convertToArray($data)
        ];

        $response = $this->httpClient->request('PUT', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Message::class);
    }

    /**
     * @return Message
     */
    public function delete(): Message
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('DELETE', $this->url, $options);
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
     * @Ref("PSX\Generation\Routes_Method_Responses")
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
    public function setMethod(?string $method)
    {
        $this->method = $method;
    }
    public function getMethod() : ?string
    {
        return $this->method;
    }
    public function setVersion(?int $version)
    {
        $this->version = $version;
    }
    public function getVersion() : ?int
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
    public function setActive(?bool $active)
    {
        $this->active = $active;
    }
    public function getActive() : ?bool
    {
        return $this->active;
    }
    public function setPublic(?bool $public)
    {
        $this->public = $public;
    }
    public function getPublic() : ?bool
    {
        return $this->public;
    }
    public function setDescription(?string $description)
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setOperationId(?string $operationId)
    {
        $this->operationId = $operationId;
    }
    public function getOperationId() : ?string
    {
        return $this->operationId;
    }
    public function setParameters(?int $parameters)
    {
        $this->parameters = $parameters;
    }
    public function getParameters() : ?int
    {
        return $this->parameters;
    }
    public function setRequest(?int $request)
    {
        $this->request = $request;
    }
    public function getRequest() : ?int
    {
        return $this->request;
    }
    public function setResponse(?int $response)
    {
        $this->response = $response;
    }
    public function getResponse() : ?int
    {
        return $this->response;
    }
    public function setResponses(?Routes_Method_Responses $responses)
    {
        $this->responses = $responses;
    }
    public function getResponses() : ?Routes_Method_Responses
    {
        return $this->responses;
    }
    public function setAction(?int $action)
    {
        $this->action = $action;
    }
    public function getAction() : ?int
    {
        return $this->action;
    }
    public function setCosts(?int $costs)
    {
        $this->costs = $costs;
    }
    public function getCosts() : ?int
    {
        return $this->costs;
    }
}
/**
 * @Title("Routes Methods")
 * @PatternProperties(pattern="^(GET|POST|PUT|PATCH|DELETE)$", property=@Ref("PSX\Generation\Routes_Method"))
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
     * @Ref("PSX\Generation\Routes_Methods")
     */
    protected $methods;
    public function setVersion(?int $version)
    {
        $this->version = $version;
    }
    public function getVersion() : ?int
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
    public function setMethods(?Routes_Methods $methods)
    {
        $this->methods = $methods;
    }
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
    public function setSuccess(?bool $success)
    {
        $this->success = $success;
    }
    public function getSuccess() : ?bool
    {
        return $this->success;
    }
    public function setMessage(?string $message)
    {
        $this->message = $message;
    }
    public function getMessage() : ?string
    {
        return $this->message;
    }
}
/**
 * @Title("Routes")
 * @Required({"config"})
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
     * @Items(@Ref("PSX\Generation\Routes_Version"))
     */
    protected $config;
    public function setId(?int $id)
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setPriority(?int $priority)
    {
        $this->priority = $priority;
    }
    public function getPriority() : ?int
    {
        return $this->priority;
    }
    public function setPath(?string $path)
    {
        $this->path = $path;
    }
    public function getPath() : ?string
    {
        return $this->path;
    }
    public function setController(?string $controller)
    {
        $this->controller = $controller;
    }
    public function getController() : ?string
    {
        return $this->controller;
    }
    public function setScopes(?array $scopes)
    {
        $this->scopes = $scopes;
    }
    public function getScopes() : ?array
    {
        return $this->scopes;
    }
    public function setConfig(?array $config)
    {
        $this->config = $config;
    }
    public function getConfig() : ?array
    {
        return $this->config;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Routes")
     * @Ref("PSX\Generation\Routes")
     */
    protected $Routes;
    /**
     * @Key("Message")
     * @Ref("PSX\Generation\Message")
     */
    protected $Message;
    public function setRoutes(?Routes $Routes)
    {
        $this->Routes = $Routes;
    }
    public function getRoutes() : ?Routes
    {
        return $this->Routes;
    }
    public function setMessage(?Message $Message)
    {
        $this->Message = $Message;
    }
    public function getMessage() : ?Message
    {
        return $this->Message;
    }
}

