<?php

namespace BackendRateRate_id09;

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
    private $rate_id;

    public function __construct(int $rate_id, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        $this->rate_id = $rate_id;

        $this->url = $baseUrl . '/backend/rate/' . $rate_id . '';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    public function get(): Rate
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Rate::class);
    }

    public function put(Rate $data): Message
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
 * @Title("Rate Allocation")
 */
class Rate_Allocation
{
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    /**
     * @Key("routeId")
     * @Type("integer")
     */
    protected $routeId;
    /**
     * @Key("appId")
     * @Type("integer")
     */
    protected $appId;
    /**
     * @Key("authenticated")
     * @Type("boolean")
     */
    protected $authenticated;
    /**
     * @Key("parameters")
     * @Type("string")
     */
    protected $parameters;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setRouteId($routeId)
    {
        $this->routeId = $routeId;
    }
    public function getRouteId()
    {
        return $this->routeId;
    }
    public function setAppId($appId)
    {
        $this->appId = $appId;
    }
    public function getAppId()
    {
        return $this->appId;
    }
    public function setAuthenticated($authenticated)
    {
        $this->authenticated = $authenticated;
    }
    public function getAuthenticated()
    {
        return $this->authenticated;
    }
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }
    public function getParameters()
    {
        return $this->parameters;
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
    public function setSuccess($success)
    {
        $this->success = $success;
    }
    public function getSuccess()
    {
        return $this->success;
    }
    public function setMessage($message)
    {
        $this->message = $message;
    }
    public function getMessage()
    {
        return $this->message;
    }
}
/**
 * @Title("Rate")
 */
class Rate
{
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    /**
     * @Key("priority")
     * @Type("integer")
     * @Minimum(0)
     */
    protected $priority;
    /**
     * @Key("name")
     * @Type("string")
     * @Pattern("^[a-zA-Z0-9\-\_]{3,64}$")
     */
    protected $name;
    /**
     * @Key("rateLimit")
     * @Type("integer")
     * @Minimum(0)
     */
    protected $rateLimit;
    /**
     * @Key("timespan")
     * @Type("string")
     * @Format("duration")
     */
    protected $timespan;
    /**
     * @Key("allocation")
     * @Type("array")
     * @Items(@Ref("PSX\Generation\Rate_Allocation"))
     */
    protected $allocation;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }
    public function getPriority()
    {
        return $this->priority;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setRateLimit($rateLimit)
    {
        $this->rateLimit = $rateLimit;
    }
    public function getRateLimit()
    {
        return $this->rateLimit;
    }
    public function setTimespan($timespan)
    {
        $this->timespan = $timespan;
    }
    public function getTimespan()
    {
        return $this->timespan;
    }
    public function setAllocation($allocation)
    {
        $this->allocation = $allocation;
    }
    public function getAllocation()
    {
        return $this->allocation;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Rate")
     * @Ref("PSX\Generation\Rate")
     */
    protected $Rate;
    /**
     * @Key("Message")
     * @Ref("PSX\Generation\Message")
     */
    protected $Message;
    public function setRate($Rate)
    {
        $this->Rate = $Rate;
    }
    public function getRate()
    {
        return $this->Rate;
    }
    public function setMessage($Message)
    {
        $this->Message = $Message;
    }
    public function getMessage()
    {
        return $this->Message;
    }
}

