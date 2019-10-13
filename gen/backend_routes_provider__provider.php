<?php

namespace BackendRoutesProviderProvider;

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
    public function setKey(?string $key)
    {
        $this->key = $key;
    }
    public function getKey() : ?string
    {
        return $this->key;
    }
    public function setValue(?string $value)
    {
        $this->value = $value;
    }
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
    public function setElement(?string $element)
    {
        $this->element = $element;
    }
    public function getElement() : ?string
    {
        return $this->element;
    }
    public function setName(?string $name)
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setTitle(?string $title)
    {
        $this->title = $title;
    }
    public function getTitle() : ?string
    {
        return $this->title;
    }
    public function setHelp(?string $help)
    {
        $this->help = $help;
    }
    public function getHelp() : ?string
    {
        return $this->help;
    }
    public function setMode(?string $mode)
    {
        $this->mode = $mode;
    }
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
    public function setElement(?string $element)
    {
        $this->element = $element;
    }
    public function getElement() : ?string
    {
        return $this->element;
    }
    public function setName(?string $name)
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setTitle(?string $title)
    {
        $this->title = $title;
    }
    public function getTitle() : ?string
    {
        return $this->title;
    }
    public function setHelp(?string $help)
    {
        $this->help = $help;
    }
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
     * @Items(@Ref("PSX\Generation\Option"))
     */
    protected $options;
    public function setElement(?string $element)
    {
        $this->element = $element;
    }
    public function getElement() : ?string
    {
        return $this->element;
    }
    public function setName(?string $name)
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setTitle(?string $title)
    {
        $this->title = $title;
    }
    public function getTitle() : ?string
    {
        return $this->title;
    }
    public function setHelp(?string $help)
    {
        $this->help = $help;
    }
    public function getHelp() : ?string
    {
        return $this->help;
    }
    public function setOptions(?array $options)
    {
        $this->options = $options;
    }
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
    public function setElement(?string $element)
    {
        $this->element = $element;
    }
    public function getElement() : ?string
    {
        return $this->element;
    }
    public function setName(?string $name)
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setTitle(?string $title)
    {
        $this->title = $title;
    }
    public function getTitle() : ?string
    {
        return $this->title;
    }
    public function setHelp(?string $help)
    {
        $this->help = $help;
    }
    public function getHelp() : ?string
    {
        return $this->help;
    }
    public function setType(?string $type)
    {
        $this->type = $type;
    }
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
     * @Ref("PSX\Generation\Routes_Provider_Config")
     */
    protected $config;
    public function setPath(?string $path)
    {
        $this->path = $path;
    }
    public function getPath() : ?string
    {
        return $this->path;
    }
    public function setScopes(?array $scopes)
    {
        $this->scopes = $scopes;
    }
    public function getScopes() : ?array
    {
        return $this->scopes;
    }
    public function setConfig(?Routes_Provider_Config $config)
    {
        $this->config = $config;
    }
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
     * @Items(@Ref("PSX\Generation\Schema"))
     */
    protected $schemas;
    /**
     * @Key("actions")
     * @Type("array")
     * @Items(@Ref("PSX\Generation\Action"))
     */
    protected $actions;
    /**
     * @Key("routes")
     * @Type("array")
     * @Items(@Ref("PSX\Generation\Routes"))
     */
    protected $routes;
    public function setSchemas(?array $schemas)
    {
        $this->schemas = $schemas;
    }
    public function getSchemas() : ?array
    {
        return $this->schemas;
    }
    public function setActions(?array $actions)
    {
        $this->actions = $actions;
    }
    public function getActions() : ?array
    {
        return $this->actions;
    }
    public function setRoutes(?array $routes)
    {
        $this->routes = $routes;
    }
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
     * @Items(@Schema(oneOf={@Ref("PSX\Generation\Input"), @Ref("PSX\Generation\Select"), @Ref("PSX\Generation\Tag"), @Ref("PSX\Generation\Textarea")}))
     */
    protected $element;
    public function setElement(?array $element)
    {
        $this->element = $element;
    }
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
    public function setClass(?string $class)
    {
        $this->class = $class;
    }
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
     * @Ref("PSX\Generation\GetQuery")
     */
    protected $GetQuery;
    /**
     * @Key("Container")
     * @Ref("PSX\Generation\Container")
     */
    protected $Container;
    /**
     * @Key("Routes_Provider_Config")
     * @Ref("PSX\Generation\Routes_Provider_Config")
     */
    protected $Routes_Provider_Config;
    /**
     * @Key("Routes_Provider_Changelog")
     * @Ref("PSX\Generation\Routes_Provider_Changelog")
     */
    protected $Routes_Provider_Changelog;
    /**
     * @Key("Routes_Provider")
     * @Ref("PSX\Generation\Routes_Provider")
     */
    protected $Routes_Provider;
    /**
     * @Key("Message")
     * @Ref("PSX\Generation\Message")
     */
    protected $Message;
    public function setGetQuery(?GetQuery $GetQuery)
    {
        $this->GetQuery = $GetQuery;
    }
    public function getGetQuery() : ?GetQuery
    {
        return $this->GetQuery;
    }
    public function setContainer(?Container $Container)
    {
        $this->Container = $Container;
    }
    public function getContainer() : ?Container
    {
        return $this->Container;
    }
    public function setRoutes_Provider_Config(?Routes_Provider_Config $Routes_Provider_Config)
    {
        $this->Routes_Provider_Config = $Routes_Provider_Config;
    }
    public function getRoutes_Provider_Config() : ?Routes_Provider_Config
    {
        return $this->Routes_Provider_Config;
    }
    public function setRoutes_Provider_Changelog(?Routes_Provider_Changelog $Routes_Provider_Changelog)
    {
        $this->Routes_Provider_Changelog = $Routes_Provider_Changelog;
    }
    public function getRoutes_Provider_Changelog() : ?Routes_Provider_Changelog
    {
        return $this->Routes_Provider_Changelog;
    }
    public function setRoutes_Provider(?Routes_Provider $Routes_Provider)
    {
        $this->Routes_Provider = $Routes_Provider;
    }
    public function getRoutes_Provider() : ?Routes_Provider
    {
        return $this->Routes_Provider;
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

