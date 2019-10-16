<?php

namespace BackendImportProcess;

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

        $this->url = $baseUrl . '/backend/import/process';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @param Adapter $data
     * @return Import_Response
     */
    public function post(Adapter $data): Import_Response
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
            'json' => $this->convertToArray($data)
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Import_Response::class);
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
 * @PatternProperties(pattern="^([0-9]{3})$", property=@Schema(type="string"))
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
     * @Type("string")
     */
    protected $parameters;
    /**
     * @Key("request")
     * @Type("string")
     */
    protected $request;
    /**
     * @Key("response")
     * @Type("string")
     */
    protected $response;
    /**
     * @Key("responses")
     * @Ref("BackendImportProcess\Routes_Method_Responses")
     */
    protected $responses;
    /**
     * @Key("action")
     * @Type("string")
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
     * @param string $parameters
     */
    public function setParameters(?string $parameters)
    {
        $this->parameters = $parameters;
    }
    /**
     * @return string
     */
    public function getParameters() : ?string
    {
        return $this->parameters;
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
     * @param string $response
     */
    public function setResponse(?string $response)
    {
        $this->response = $response;
    }
    /**
     * @return string
     */
    public function getResponse() : ?string
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
     * @param string $action
     */
    public function setAction(?string $action)
    {
        $this->action = $action;
    }
    /**
     * @return string
     */
    public function getAction() : ?string
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
 * @PatternProperties(pattern="^(GET|POST|PUT|PATCH|DELETE)$", property=@Ref("BackendImportProcess\Routes_Method"))
 */
class Routes_Methods extends \ArrayObject
{
}
/**
 * @Title("Connection Config")
 * @AdditionalProperties(@Schema(oneOf={@Schema(type="string"), @Schema(type="number"), @Schema(type="boolean"), @Schema(type="null"), @Schema(type="array", items=@Schema(oneOf={@Schema(type="string"), @Schema(type="number"), @Schema(type="boolean"), @Schema(type="null")}), maxItems=16)}))
 * @MaxProperties(16)
 */
class Connection_Config extends \ArrayObject
{
}
/**
 * @Title("Schema Source")
 * @AdditionalProperties(true)
 */
class Schema_Source extends \ArrayObject
{
}
/**
 * @Title("Action Config")
 * @AdditionalProperties(@Schema(oneOf={@Schema(type="string"), @Schema(type="number"), @Schema(type="boolean"), @Schema(type="null"), @Schema(type="array", items=@Schema(oneOf={@Schema(type="string"), @Schema(type="number"), @Schema(type="boolean"), @Schema(type="null")}), maxItems=16)}))
 * @MaxProperties(16)
 */
class Action_Config extends \ArrayObject
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
     * @Ref("BackendImportProcess\Routes_Methods")
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
 * @Title("Connection")
 */
class Connection
{
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    /**
     * @Key("name")
     * @Type("string")
     * @Pattern("^[a-zA-Z0-9\-\_]{3,255}$")
     */
    protected $name;
    /**
     * @Key("class")
     * @Type("string")
     */
    protected $class;
    /**
     * @Key("config")
     * @Ref("BackendImportProcess\Connection_Config")
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
     * @param string $name
     */
    public function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param string $class
     */
    public function setClass(?string $class)
    {
        $this->class = $class;
    }
    /**
     * @return string
     */
    public function getClass() : ?string
    {
        return $this->class;
    }
    /**
     * @param Connection_Config $config
     */
    public function setConfig(?Connection_Config $config)
    {
        $this->config = $config;
    }
    /**
     * @return Connection_Config
     */
    public function getConfig() : ?Connection_Config
    {
        return $this->config;
    }
}
/**
 * @Title("Schema")
 */
class Schema
{
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    /**
     * @Key("status")
     * @Type("integer")
     */
    protected $status;
    /**
     * @Key("name")
     * @Type("string")
     * @Pattern("^[a-zA-Z0-9\-\_]{3,255}$")
     */
    protected $name;
    /**
     * @Key("source")
     * @Ref("BackendImportProcess\Schema_Source")
     */
    protected $source;
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
     * @param string $name
     */
    public function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param Schema_Source $source
     */
    public function setSource(?Schema_Source $source)
    {
        $this->source = $source;
    }
    /**
     * @return Schema_Source
     */
    public function getSource() : ?Schema_Source
    {
        return $this->source;
    }
}
/**
 * @Title("Action")
 */
class Action
{
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    /**
     * @Key("status")
     * @Type("integer")
     */
    protected $status;
    /**
     * @Key("name")
     * @Type("string")
     * @Pattern("^[a-zA-Z0-9\-\_]{3,255}$")
     */
    protected $name;
    /**
     * @Key("class")
     * @Type("string")
     */
    protected $class;
    /**
     * @Key("engine")
     * @Type("string")
     */
    protected $engine;
    /**
     * @Key("config")
     * @Ref("BackendImportProcess\Action_Config")
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
     * @param string $name
     */
    public function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param string $class
     */
    public function setClass(?string $class)
    {
        $this->class = $class;
    }
    /**
     * @return string
     */
    public function getClass() : ?string
    {
        return $this->class;
    }
    /**
     * @param string $engine
     */
    public function setEngine(?string $engine)
    {
        $this->engine = $engine;
    }
    /**
     * @return string
     */
    public function getEngine() : ?string
    {
        return $this->engine;
    }
    /**
     * @param Action_Config $config
     */
    public function setConfig(?Action_Config $config)
    {
        $this->config = $config;
    }
    /**
     * @return Action_Config
     */
    public function getConfig() : ?Action_Config
    {
        return $this->config;
    }
}
/**
 * @Title("Routes")
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
     * @Items(@Ref("BackendImportProcess\Routes_Version"))
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
 * @Title("Import Response")
 */
class Import_Response
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
     * @Key("result")
     * @Type("array")
     * @Items(@Schema(type="string"))
     */
    protected $result;
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
    /**
     * @param array<string> $result
     */
    public function setResult(?array $result)
    {
        $this->result = $result;
    }
    /**
     * @return array<string>
     */
    public function getResult() : ?array
    {
        return $this->result;
    }
}
/**
 * @Title("Adapter")
 */
class Adapter
{
    /**
     * @Key("actionClass")
     * @Type("array")
     * @Items(@Schema(type="string"))
     */
    protected $actionClass;
    /**
     * @Key("connectionClass")
     * @Type("array")
     * @Items(@Schema(type="string"))
     */
    protected $connectionClass;
    /**
     * @Key("routes")
     * @Type("array")
     * @Items(@Ref("BackendImportProcess\Routes"))
     */
    protected $routes;
    /**
     * @Key("action")
     * @Type("array")
     * @Items(@Ref("BackendImportProcess\Action"))
     */
    protected $action;
    /**
     * @Key("schema")
     * @Type("array")
     * @Items(@Ref("BackendImportProcess\Schema"))
     */
    protected $schema;
    /**
     * @Key("connection")
     * @Type("array")
     * @Items(@Ref("BackendImportProcess\Connection"))
     */
    protected $connection;
    /**
     * @param array<string> $actionClass
     */
    public function setActionClass(?array $actionClass)
    {
        $this->actionClass = $actionClass;
    }
    /**
     * @return array<string>
     */
    public function getActionClass() : ?array
    {
        return $this->actionClass;
    }
    /**
     * @param array<string> $connectionClass
     */
    public function setConnectionClass(?array $connectionClass)
    {
        $this->connectionClass = $connectionClass;
    }
    /**
     * @return array<string>
     */
    public function getConnectionClass() : ?array
    {
        return $this->connectionClass;
    }
    /**
     * @param array<Routes> $routes
     */
    public function setRoutes(?array $routes)
    {
        $this->routes = $routes;
    }
    /**
     * @return array<Routes>
     */
    public function getRoutes() : ?array
    {
        return $this->routes;
    }
    /**
     * @param array<Action> $action
     */
    public function setAction(?array $action)
    {
        $this->action = $action;
    }
    /**
     * @return array<Action>
     */
    public function getAction() : ?array
    {
        return $this->action;
    }
    /**
     * @param array<Schema> $schema
     */
    public function setSchema(?array $schema)
    {
        $this->schema = $schema;
    }
    /**
     * @return array<Schema>
     */
    public function getSchema() : ?array
    {
        return $this->schema;
    }
    /**
     * @param array<Connection> $connection
     */
    public function setConnection(?array $connection)
    {
        $this->connection = $connection;
    }
    /**
     * @return array<Connection>
     */
    public function getConnection() : ?array
    {
        return $this->connection;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Adapter")
     * @Ref("BackendImportProcess\Adapter")
     */
    protected $Adapter;
    /**
     * @Key("Import_Response")
     * @Ref("BackendImportProcess\Import_Response")
     */
    protected $Import_Response;
    /**
     * @param Adapter $Adapter
     */
    public function setAdapter(?Adapter $Adapter)
    {
        $this->Adapter = $Adapter;
    }
    /**
     * @return Adapter
     */
    public function getAdapter() : ?Adapter
    {
        return $this->Adapter;
    }
    /**
     * @param Import_Response $Import_Response
     */
    public function setImport_Response(?Import_Response $Import_Response)
    {
        $this->Import_Response = $Import_Response;
    }
    /**
     * @return Import_Response
     */
    public function getImport_Response() : ?Import_Response
    {
        return $this->Import_Response;
    }
}

