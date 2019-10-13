<?php

namespace BackendActionExecuteAction_id09;

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
    private $action_id;

    public function __construct(int $action_id, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        $this->action_id = $action_id;

        $this->url = $baseUrl . '/backend/action/execute/' . $action_id . '';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @param Action_Request $data
     * @return Action_Response
     */
    public function post(Action_Request $data): Action_Response
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
            'json' => $this->convertToArray($data)
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Action_Response::class);
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
 * @Title("Action Response Body")
 * @AdditionalProperties(true)
 */
class Action_Response_Body extends \ArrayObject
{
}
/**
 * @Title("Action Response Headers")
 * @AdditionalProperties(@Schema(type="string"))
 */
class Action_Response_Headers extends \ArrayObject
{
}
/**
 * @Title("Action Request Body")
 * @AdditionalProperties(true)
 */
class Action_Request_Body extends \ArrayObject
{
}
/**
 * @Title("Action Response")
 */
class Action_Response
{
    /**
     * @Key("statusCode")
     * @Type("integer")
     */
    protected $statusCode;
    /**
     * @Key("headers")
     * @Ref("PSX\Generation\Action_Response_Headers")
     */
    protected $headers;
    /**
     * @Key("body")
     * @Ref("PSX\Generation\Action_Response_Body")
     */
    protected $body;
    public function setStatusCode(?int $statusCode)
    {
        $this->statusCode = $statusCode;
    }
    public function getStatusCode() : ?int
    {
        return $this->statusCode;
    }
    public function setHeaders(?Action_Response_Headers $headers)
    {
        $this->headers = $headers;
    }
    public function getHeaders() : ?Action_Response_Headers
    {
        return $this->headers;
    }
    public function setBody(?Action_Response_Body $body)
    {
        $this->body = $body;
    }
    public function getBody() : ?Action_Response_Body
    {
        return $this->body;
    }
}
/**
 * @Title("Action Request")
 * @Required({"method"})
 */
class Action_Request
{
    /**
     * @Key("method")
     * @Type("string")
     * @Pattern("GET|POST|PUT|PATCH|DELETE")
     */
    protected $method;
    /**
     * @Key("uriFragments")
     * @Type("string")
     */
    protected $uriFragments;
    /**
     * @Key("parameters")
     * @Type("string")
     */
    protected $parameters;
    /**
     * @Key("headers")
     * @Type("string")
     */
    protected $headers;
    /**
     * @Key("body")
     * @Ref("PSX\Generation\Action_Request_Body")
     */
    protected $body;
    public function setMethod(?string $method)
    {
        $this->method = $method;
    }
    public function getMethod() : ?string
    {
        return $this->method;
    }
    public function setUriFragments(?string $uriFragments)
    {
        $this->uriFragments = $uriFragments;
    }
    public function getUriFragments() : ?string
    {
        return $this->uriFragments;
    }
    public function setParameters(?string $parameters)
    {
        $this->parameters = $parameters;
    }
    public function getParameters() : ?string
    {
        return $this->parameters;
    }
    public function setHeaders(?string $headers)
    {
        $this->headers = $headers;
    }
    public function getHeaders() : ?string
    {
        return $this->headers;
    }
    public function setBody(?Action_Request_Body $body)
    {
        $this->body = $body;
    }
    public function getBody() : ?Action_Request_Body
    {
        return $this->body;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Action_Request")
     * @Ref("PSX\Generation\Action_Request")
     */
    protected $Action_Request;
    /**
     * @Key("Action_Response")
     * @Ref("PSX\Generation\Action_Response")
     */
    protected $Action_Response;
    public function setAction_Request(?Action_Request $Action_Request)
    {
        $this->Action_Request = $Action_Request;
    }
    public function getAction_Request() : ?Action_Request
    {
        return $this->Action_Request;
    }
    public function setAction_Response(?Action_Response $Action_Response)
    {
        $this->Action_Response = $Action_Response;
    }
    public function getAction_Response() : ?Action_Response
    {
        return $this->Action_Response;
    }
}

