<?php

namespace BackendActionExecuteAction_id09;

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
     * @Ref("BackendActionExecuteAction_id09\Action_Response_Headers")
     */
    protected $headers;
    /**
     * @Key("body")
     * @Ref("BackendActionExecuteAction_id09\Action_Response_Body")
     */
    protected $body;
    /**
     * @param int $statusCode
     */
    public function setStatusCode(?int $statusCode)
    {
        $this->statusCode = $statusCode;
    }
    /**
     * @return int
     */
    public function getStatusCode() : ?int
    {
        return $this->statusCode;
    }
    /**
     * @param Action_Response_Headers $headers
     */
    public function setHeaders(?Action_Response_Headers $headers)
    {
        $this->headers = $headers;
    }
    /**
     * @return Action_Response_Headers
     */
    public function getHeaders() : ?Action_Response_Headers
    {
        return $this->headers;
    }
    /**
     * @param Action_Response_Body $body
     */
    public function setBody(?Action_Response_Body $body)
    {
        $this->body = $body;
    }
    /**
     * @return Action_Response_Body
     */
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
     * @Ref("BackendActionExecuteAction_id09\Action_Request_Body")
     */
    protected $body;
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
     * @param string $uriFragments
     */
    public function setUriFragments(?string $uriFragments)
    {
        $this->uriFragments = $uriFragments;
    }
    /**
     * @return string
     */
    public function getUriFragments() : ?string
    {
        return $this->uriFragments;
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
     * @param string $headers
     */
    public function setHeaders(?string $headers)
    {
        $this->headers = $headers;
    }
    /**
     * @return string
     */
    public function getHeaders() : ?string
    {
        return $this->headers;
    }
    /**
     * @param Action_Request_Body $body
     */
    public function setBody(?Action_Request_Body $body)
    {
        $this->body = $body;
    }
    /**
     * @return Action_Request_Body
     */
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
     * @Ref("BackendActionExecuteAction_id09\Action_Request")
     */
    protected $Action_Request;
    /**
     * @Key("Action_Response")
     * @Ref("BackendActionExecuteAction_id09\Action_Response")
     */
    protected $Action_Response;
    /**
     * @param Action_Request $Action_Request
     */
    public function setAction_Request(?Action_Request $Action_Request)
    {
        $this->Action_Request = $Action_Request;
    }
    /**
     * @return Action_Request
     */
    public function getAction_Request() : ?Action_Request
    {
        return $this->Action_Request;
    }
    /**
     * @param Action_Response $Action_Response
     */
    public function setAction_Response(?Action_Response $Action_Response)
    {
        $this->Action_Response = $Action_Response;
    }
    /**
     * @return Action_Response
     */
    public function getAction_Response() : ?Action_Response
    {
        return $this->Action_Response;
    }
}

