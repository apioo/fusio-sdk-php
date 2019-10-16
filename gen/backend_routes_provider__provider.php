<?php

namespace BackendRoutesProviderProvider;

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
    private $provider;

    public function __construct(string $provider, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        $this->provider = $provider;

        $this->url = $baseUrl . '/backend/routes/provider/' . $provider . '';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @param GetQuery $query
     * @return Container
     */
    public function get(GetQuery $query): Container
    {
        $options = [
            'query' => $this->convertToArray($query),
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Container::class);
    }

    /**
     * @param Routes_Provider_Config $data
     * @return Routes_Provider_Changelog
     */
    public function put(Routes_Provider_Config $data): Routes_Provider_Changelog
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
            'json' => $this->convertToArray($data)
        ];

        $response = $this->httpClient->request('PUT', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Routes_Provider_Changelog::class);
    }

    /**
     * @param Routes_Provider $data
     * @return Message
     */
    public function post(Routes_Provider $data): Message
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
     * @Ref("BackendRoutesProviderProvider\Routes_Method_Responses")
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
 * @PatternProperties(pattern="^(GET|POST|PUT|PATCH|DELETE)$", property=@Ref("BackendRoutesProviderProvider\Routes_Method"))
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
     * @Ref("BackendRoutesProviderProvider\Routes_Methods")
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
 * @Title("Action Config")
 * @AdditionalProperties(@Schema(oneOf={@Schema(type="string"), @Schema(type="number"), @Schema(type="boolean"), @Schema(type="null"), @Schema(type="array", items=@Schema(oneOf={@Schema(type="string"), @Schema(type="number"), @Schema(type="boolean"), @Schema(type="null")}), maxItems=16)}))
 * @MaxProperties(16)
 */
class Action_Config extends \ArrayObject
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
 * @Title("option")
 */
class Option
{
    /**
     * @Key("key")
     * @Type("string")
     */
    protected $key;
    /**
     * @Key("value")
     * @Type("string")
     */
    protected $value;
    /**
     * @param string $key
     */
    public function setKey(?string $key)
    {
        $this->key = $key;
    }
    /**
     * @return string
     */
    public function getKey() : ?string
    {
        return $this->key;
    }
    /**
     * @param string $value
     */
    public function setValue(?string $value)
    {
        $this->value = $value;
    }
    /**
     * @return string
     */
    public function getValue() : ?string
    {
        return $this->value;
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
     * @Items(@Ref("BackendRoutesProviderProvider\Routes_Version"))
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
     * @Ref("BackendRoutesProviderProvider\Action_Config")
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
     * @Ref("BackendRoutesProviderProvider\Schema_Source")
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
 * @Title("textarea")
 */
class Textarea
{
    /**
     * @Key("element")
     * @Type("string")
     */
    protected $element;
    /**
     * @Key("name")
     * @Type("string")
     */
    protected $name;
    /**
     * @Key("title")
     * @Type("string")
     */
    protected $title;
    /**
     * @Key("help")
     * @Type("string")
     */
    protected $help;
    /**
     * @Key("mode")
     * @Type("string")
     */
    protected $mode;
    /**
     * @param string $element
     */
    public function setElement(?string $element)
    {
        $this->element = $element;
    }
    /**
     * @return string
     */
    public function getElement() : ?string
    {
        return $this->element;
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
     * @param string $title
     */
    public function setTitle(?string $title)
    {
        $this->title = $title;
    }
    /**
     * @return string
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * @param string $help
     */
    public function setHelp(?string $help)
    {
        $this->help = $help;
    }
    /**
     * @return string
     */
    public function getHelp() : ?string
    {
        return $this->help;
    }
    /**
     * @param string $mode
     */
    public function setMode(?string $mode)
    {
        $this->mode = $mode;
    }
    /**
     * @return string
     */
    public function getMode() : ?string
    {
        return $this->mode;
    }
}
/**
 * @Title("tag")
 */
class Tag
{
    /**
     * @Key("element")
     * @Type("string")
     */
    protected $element;
    /**
     * @Key("name")
     * @Type("string")
     */
    protected $name;
    /**
     * @Key("title")
     * @Type("string")
     */
    protected $title;
    /**
     * @Key("help")
     * @Type("string")
     */
    protected $help;
    /**
     * @param string $element
     */
    public function setElement(?string $element)
    {
        $this->element = $element;
    }
    /**
     * @return string
     */
    public function getElement() : ?string
    {
        return $this->element;
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
     * @param string $title
     */
    public function setTitle(?string $title)
    {
        $this->title = $title;
    }
    /**
     * @return string
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * @param string $help
     */
    public function setHelp(?string $help)
    {
        $this->help = $help;
    }
    /**
     * @return string
     */
    public function getHelp() : ?string
    {
        return $this->help;
    }
}
/**
 * @Title("select")
 */
class Select
{
    /**
     * @Key("element")
     * @Type("string")
     */
    protected $element;
    /**
     * @Key("name")
     * @Type("string")
     */
    protected $name;
    /**
     * @Key("title")
     * @Type("string")
     */
    protected $title;
    /**
     * @Key("help")
     * @Type("string")
     */
    protected $help;
    /**
     * @Key("options")
     * @Type("array")
     * @Items(@Ref("BackendRoutesProviderProvider\Option"))
     */
    protected $options;
    /**
     * @param string $element
     */
    public function setElement(?string $element)
    {
        $this->element = $element;
    }
    /**
     * @return string
     */
    public function getElement() : ?string
    {
        return $this->element;
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
     * @param string $title
     */
    public function setTitle(?string $title)
    {
        $this->title = $title;
    }
    /**
     * @return string
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * @param string $help
     */
    public function setHelp(?string $help)
    {
        $this->help = $help;
    }
    /**
     * @return string
     */
    public function getHelp() : ?string
    {
        return $this->help;
    }
    /**
     * @param array<Option> $options
     */
    public function setOptions(?array $options)
    {
        $this->options = $options;
    }
    /**
     * @return array<Option>
     */
    public function getOptions() : ?array
    {
        return $this->options;
    }
}
/**
 * @Title("input")
 */
class Input
{
    /**
     * @Key("element")
     * @Type("string")
     */
    protected $element;
    /**
     * @Key("name")
     * @Type("string")
     */
    protected $name;
    /**
     * @Key("title")
     * @Type("string")
     */
    protected $title;
    /**
     * @Key("help")
     * @Type("string")
     */
    protected $help;
    /**
     * @Key("type")
     * @Type("string")
     */
    protected $type;
    /**
     * @param string $element
     */
    public function setElement(?string $element)
    {
        $this->element = $element;
    }
    /**
     * @return string
     */
    public function getElement() : ?string
    {
        return $this->element;
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
     * @param string $title
     */
    public function setTitle(?string $title)
    {
        $this->title = $title;
    }
    /**
     * @return string
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * @param string $help
     */
    public function setHelp(?string $help)
    {
        $this->help = $help;
    }
    /**
     * @return string
     */
    public function getHelp() : ?string
    {
        return $this->help;
    }
    /**
     * @param string $type
     */
    public function setType(?string $type)
    {
        $this->type = $type;
    }
    /**
     * @return string
     */
    public function getType() : ?string
    {
        return $this->type;
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
 * @Title("Routes Provider")
 */
class Routes_Provider
{
    /**
     * @Key("path")
     * @Type("string")
     */
    protected $path;
    /**
     * @Key("scopes")
     * @Type("array")
     * @Items(@Schema(type="string"))
     */
    protected $scopes;
    /**
     * @Key("config")
     * @Ref("BackendRoutesProviderProvider\Routes_Provider_Config")
     */
    protected $config;
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
     * @param Routes_Provider_Config $config
     */
    public function setConfig(?Routes_Provider_Config $config)
    {
        $this->config = $config;
    }
    /**
     * @return Routes_Provider_Config
     */
    public function getConfig() : ?Routes_Provider_Config
    {
        return $this->config;
    }
}
/**
 * @Title("Routes Provider Changelog")
 */
class Routes_Provider_Changelog
{
    /**
     * @Key("schemas")
     * @Type("array")
     * @Items(@Ref("BackendRoutesProviderProvider\Schema"))
     */
    protected $schemas;
    /**
     * @Key("actions")
     * @Type("array")
     * @Items(@Ref("BackendRoutesProviderProvider\Action"))
     */
    protected $actions;
    /**
     * @Key("routes")
     * @Type("array")
     * @Items(@Ref("BackendRoutesProviderProvider\Routes"))
     */
    protected $routes;
    /**
     * @param array<Schema> $schemas
     */
    public function setSchemas(?array $schemas)
    {
        $this->schemas = $schemas;
    }
    /**
     * @return array<Schema>
     */
    public function getSchemas() : ?array
    {
        return $this->schemas;
    }
    /**
     * @param array<Action> $actions
     */
    public function setActions(?array $actions)
    {
        $this->actions = $actions;
    }
    /**
     * @return array<Action>
     */
    public function getActions() : ?array
    {
        return $this->actions;
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
}
/**
 * @Title("Routes Provider Config")
 * @AdditionalProperties(@Schema(oneOf={@Schema(type="string"), @Schema(type="number"), @Schema(type="boolean"), @Schema(type="null"), @Schema(type="array", items=@Schema(oneOf={@Schema(type="string"), @Schema(type="number"), @Schema(type="boolean"), @Schema(type="null")}), maxItems=16)}))
 * @MaxProperties(16)
 */
class Routes_Provider_Config extends \ArrayObject
{
}
/**
 * @Title("container")
 */
class Container
{
    /**
     * @Key("element")
     * @Type("array")
     * @Items(@Schema(oneOf={@Ref("BackendRoutesProviderProvider\Input"), @Ref("BackendRoutesProviderProvider\Select"), @Ref("BackendRoutesProviderProvider\Tag"), @Ref("BackendRoutesProviderProvider\Textarea")}))
     */
    protected $element;
    /**
     * @param array<Input|Select|Tag|Textarea> $element
     */
    public function setElement(?array $element)
    {
        $this->element = $element;
    }
    /**
     * @return array<Input|Select|Tag|Textarea>
     */
    public function getElement() : ?array
    {
        return $this->element;
    }
}
/**
 * @Title("GetQuery")
 */
class GetQuery
{
    /**
     * @Key("class")
     * @Type("string")
     */
    protected $class;
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
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("GetQuery")
     * @Ref("BackendRoutesProviderProvider\GetQuery")
     */
    protected $GetQuery;
    /**
     * @Key("Container")
     * @Ref("BackendRoutesProviderProvider\Container")
     */
    protected $Container;
    /**
     * @Key("Routes_Provider_Config")
     * @Ref("BackendRoutesProviderProvider\Routes_Provider_Config")
     */
    protected $Routes_Provider_Config;
    /**
     * @Key("Routes_Provider_Changelog")
     * @Ref("BackendRoutesProviderProvider\Routes_Provider_Changelog")
     */
    protected $Routes_Provider_Changelog;
    /**
     * @Key("Routes_Provider")
     * @Ref("BackendRoutesProviderProvider\Routes_Provider")
     */
    protected $Routes_Provider;
    /**
     * @Key("Message")
     * @Ref("BackendRoutesProviderProvider\Message")
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
     * @param Container $Container
     */
    public function setContainer(?Container $Container)
    {
        $this->Container = $Container;
    }
    /**
     * @return Container
     */
    public function getContainer() : ?Container
    {
        return $this->Container;
    }
    /**
     * @param Routes_Provider_Config $Routes_Provider_Config
     */
    public function setRoutes_Provider_Config(?Routes_Provider_Config $Routes_Provider_Config)
    {
        $this->Routes_Provider_Config = $Routes_Provider_Config;
    }
    /**
     * @return Routes_Provider_Config
     */
    public function getRoutes_Provider_Config() : ?Routes_Provider_Config
    {
        return $this->Routes_Provider_Config;
    }
    /**
     * @param Routes_Provider_Changelog $Routes_Provider_Changelog
     */
    public function setRoutes_Provider_Changelog(?Routes_Provider_Changelog $Routes_Provider_Changelog)
    {
        $this->Routes_Provider_Changelog = $Routes_Provider_Changelog;
    }
    /**
     * @return Routes_Provider_Changelog
     */
    public function getRoutes_Provider_Changelog() : ?Routes_Provider_Changelog
    {
        return $this->Routes_Provider_Changelog;
    }
    /**
     * @param Routes_Provider $Routes_Provider
     */
    public function setRoutes_Provider(?Routes_Provider $Routes_Provider)
    {
        $this->Routes_Provider = $Routes_Provider;
    }
    /**
     * @return Routes_Provider
     */
    public function getRoutes_Provider() : ?Routes_Provider
    {
        return $this->Routes_Provider;
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

