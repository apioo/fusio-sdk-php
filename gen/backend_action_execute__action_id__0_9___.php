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
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
    }
    public function getStatusCode()
    {
        return $this->statusCode;
    }
    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }
    public function getHeaders()
    {
        return $this->headers;
    }
    public function setBody($body)
    {
        $this->body = $body;
    }
    public function getBody()
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
    public function setMethod($method)
    {
        $this->method = $method;
    }
    public function getMethod()
    {
        return $this->method;
    }
    public function setUriFragments($uriFragments)
    {
        $this->uriFragments = $uriFragments;
    }
    public function getUriFragments()
    {
        return $this->uriFragments;
    }
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }
    public function getParameters()
    {
        return $this->parameters;
    }
    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }
    public function getHeaders()
    {
        return $this->headers;
    }
    public function setBody($body)
    {
        $this->body = $body;
    }
    public function getBody()
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
    public function setAction_Request($Action_Request)
    {
        $this->Action_Request = $Action_Request;
    }
    public function getAction_Request()
    {
        return $this->Action_Request;
    }
    public function setAction_Response($Action_Response)
    {
        $this->Action_Response = $Action_Response;
    }
    public function getAction_Response()
    {
        return $this->Action_Response;
    }
}

