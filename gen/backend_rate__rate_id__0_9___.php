<?php

namespace BackendRateRate_id09;

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
    private $rate_id;

    public function __construct(int $rate_id, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        $this->rate_id = $rate_id;

        $this->url = $baseUrl . '/backend/rate/' . $rate_id . '';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Rate
     */
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

    /**
     * @param Rate $data
     * @return Message
     */
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
     * @param int $routeId
     */
    public function setRouteId(?int $routeId)
    {
        $this->routeId = $routeId;
    }
    /**
     * @return int
     */
    public function getRouteId() : ?int
    {
        return $this->routeId;
    }
    /**
     * @param int $appId
     */
    public function setAppId(?int $appId)
    {
        $this->appId = $appId;
    }
    /**
     * @return int
     */
    public function getAppId() : ?int
    {
        return $this->appId;
    }
    /**
     * @param bool $authenticated
     */
    public function setAuthenticated(?bool $authenticated)
    {
        $this->authenticated = $authenticated;
    }
    /**
     * @return bool
     */
    public function getAuthenticated() : ?bool
    {
        return $this->authenticated;
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
     * @Items(@Ref("BackendRateRate_id09\Rate_Allocation"))
     */
    protected $allocation;
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
     * @param int $rateLimit
     */
    public function setRateLimit(?int $rateLimit)
    {
        $this->rateLimit = $rateLimit;
    }
    /**
     * @return int
     */
    public function getRateLimit() : ?int
    {
        return $this->rateLimit;
    }
    /**
     * @param \DateInterval $timespan
     */
    public function setTimespan(?\DateInterval $timespan)
    {
        $this->timespan = $timespan;
    }
    /**
     * @return \DateInterval
     */
    public function getTimespan() : ?\DateInterval
    {
        return $this->timespan;
    }
    /**
     * @param array<Rate_Allocation> $allocation
     */
    public function setAllocation(?array $allocation)
    {
        $this->allocation = $allocation;
    }
    /**
     * @return array<Rate_Allocation>
     */
    public function getAllocation() : ?array
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
     * @Ref("BackendRateRate_id09\Rate")
     */
    protected $Rate;
    /**
     * @Key("Message")
     * @Ref("BackendRateRate_id09\Message")
     */
    protected $Message;
    /**
     * @param Rate $Rate
     */
    public function setRate(?Rate $Rate)
    {
        $this->Rate = $Rate;
    }
    /**
     * @return Rate
     */
    public function getRate() : ?Rate
    {
        return $this->Rate;
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

