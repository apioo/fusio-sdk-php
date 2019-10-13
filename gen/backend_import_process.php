<?php

namespace BackendImportProcess;

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
     * @Ref("PSX\Generation\Routes_Method_Responses")
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
    public function setParameters(?string $parameters)
    {
        $this->parameters = $parameters;
    }
    public function getParameters() : ?string
    {
        return $this->parameters;
    }
    public function setRequest(?string $request)
    {
        $this->request = $request;
    }
    public function getRequest() : ?string
    {
        return $this->request;
    }
    public function setResponse(?string $response)
    {
        $this->response = $response;
    }
    public function getResponse() : ?string
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
    public function setAction(?string $action)
    {
        $this->action = $action;
    }
    public function getAction() : ?string
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
     * @Ref("PSX\Generation\Connection_Config")
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
    public function setName(?string $name)
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setClass(?string $class)
    {
        $this->class = $class;
    }
    public function getClass() : ?string
    {
        return $this->class;
    }
    public function setConfig(?Connection_Config $config)
    {
        $this->config = $config;
    }
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
     * @Ref("PSX\Generation\Schema_Source")
     */
    protected $source;
    public function setId(?int $id)
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setStatus(?int $status)
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setName(?string $name)
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setSource(?Schema_Source $source)
    {
        $this->source = $source;
    }
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
     * @Ref("PSX\Generation\Action_Config")
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
    public function setStatus(?int $status)
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setName(?string $name)
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setClass(?string $class)
    {
        $this->class = $class;
    }
    public function getClass() : ?string
    {
        return $this->class;
    }
    public function setEngine(?string $engine)
    {
        $this->engine = $engine;
    }
    public function getEngine() : ?string
    {
        return $this->engine;
    }
    public function setConfig(?Action_Config $config)
    {
        $this->config = $config;
    }
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
    public function setResult(?array $result)
    {
        $this->result = $result;
    }
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
     * @Items(@Ref("PSX\Generation\Routes"))
     */
    protected $routes;
    /**
     * @Key("action")
     * @Type("array")
     * @Items(@Ref("PSX\Generation\Action"))
     */
    protected $action;
    /**
     * @Key("schema")
     * @Type("array")
     * @Items(@Ref("PSX\Generation\Schema"))
     */
    protected $schema;
    /**
     * @Key("connection")
     * @Type("array")
     * @Items(@Ref("PSX\Generation\Connection"))
     */
    protected $connection;
    public function setActionClass(?array $actionClass)
    {
        $this->actionClass = $actionClass;
    }
    public function getActionClass() : ?array
    {
        return $this->actionClass;
    }
    public function setConnectionClass(?array $connectionClass)
    {
        $this->connectionClass = $connectionClass;
    }
    public function getConnectionClass() : ?array
    {
        return $this->connectionClass;
    }
    public function setRoutes(?array $routes)
    {
        $this->routes = $routes;
    }
    public function getRoutes() : ?array
    {
        return $this->routes;
    }
    public function setAction(?array $action)
    {
        $this->action = $action;
    }
    public function getAction() : ?array
    {
        return $this->action;
    }
    public function setSchema(?array $schema)
    {
        $this->schema = $schema;
    }
    public function getSchema() : ?array
    {
        return $this->schema;
    }
    public function setConnection(?array $connection)
    {
        $this->connection = $connection;
    }
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
     * @Ref("PSX\Generation\Adapter")
     */
    protected $Adapter;
    /**
     * @Key("Import_Response")
     * @Ref("PSX\Generation\Import_Response")
     */
    protected $Import_Response;
    public function setAdapter(?Adapter $Adapter)
    {
        $this->Adapter = $Adapter;
    }
    public function getAdapter() : ?Adapter
    {
        return $this->Adapter;
    }
    public function setImport_Response(?Import_Response $Import_Response)
    {
        $this->Import_Response = $Import_Response;
    }
    public function getImport_Response() : ?Import_Response
    {
        return $this->Import_Response;
    }
}

