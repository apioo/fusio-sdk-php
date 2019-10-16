<?php

namespace ConsumerSubscription;

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

        $this->url = $baseUrl . '/consumer/subscription';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Consumer_Subscription_Collection
     */
    public function get(): Consumer_Subscription_Collection
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Consumer_Subscription_Collection::class);
    }

    /**
     * @param Consumer_Subscription $data
     * @return Consumer_Message
     */
    public function post(Consumer_Subscription $data): Consumer_Message
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
            'json' => $this->convertToArray($data)
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Consumer_Message::class);
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
 * @Title("Consumer Subscription Response")
 */
class Consumer_Subscription_Response
{
    /**
     * @Key("status")
     * @Type("integer")
     */
    protected $status;
    /**
     * @Key("code")
     * @Type("integer")
     */
    protected $code;
    /**
     * @Key("attempts")
     * @Type("integer")
     */
    protected $attempts;
    /**
     * @Key("executeDate")
     * @Type("string")
     */
    protected $executeDate;
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
     * @param int $code
     */
    public function setCode(?int $code)
    {
        $this->code = $code;
    }
    /**
     * @return int
     */
    public function getCode() : ?int
    {
        return $this->code;
    }
    /**
     * @param int $attempts
     */
    public function setAttempts(?int $attempts)
    {
        $this->attempts = $attempts;
    }
    /**
     * @return int
     */
    public function getAttempts() : ?int
    {
        return $this->attempts;
    }
    /**
     * @param string $executeDate
     */
    public function setExecuteDate(?string $executeDate)
    {
        $this->executeDate = $executeDate;
    }
    /**
     * @return string
     */
    public function getExecuteDate() : ?string
    {
        return $this->executeDate;
    }
}
/**
 * @Title("Consumer Message")
 */
class Consumer_Message
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
 * @Title("Consumer Subscription")
 * @Required({"event", "endpoint"})
 */
class Consumer_Subscription
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
     * @Key("event")
     * @Type("string")
     * @MinLength(3)
     */
    protected $event;
    /**
     * @Key("endpoint")
     * @Type("string")
     * @MinLength(8)
     */
    protected $endpoint;
    /**
     * @Key("responses")
     * @Type("array")
     * @Items(@Ref("ConsumerSubscription\Consumer_Subscription_Response"))
     */
    protected $responses;
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
     * @param string $event
     */
    public function setEvent(?string $event)
    {
        $this->event = $event;
    }
    /**
     * @return string
     */
    public function getEvent() : ?string
    {
        return $this->event;
    }
    /**
     * @param string $endpoint
     */
    public function setEndpoint(?string $endpoint)
    {
        $this->endpoint = $endpoint;
    }
    /**
     * @return string
     */
    public function getEndpoint() : ?string
    {
        return $this->endpoint;
    }
    /**
     * @param array<Consumer_Subscription_Response> $responses
     */
    public function setResponses(?array $responses)
    {
        $this->responses = $responses;
    }
    /**
     * @return array<Consumer_Subscription_Response>
     */
    public function getResponses() : ?array
    {
        return $this->responses;
    }
}
/**
 * @Title("Consumer Subscription Collection")
 */
class Consumer_Subscription_Collection
{
    /**
     * @Key("totalResults")
     * @Type("integer")
     */
    protected $totalResults;
    /**
     * @Key("startIndex")
     * @Type("integer")
     */
    protected $startIndex;
    /**
     * @Key("entry")
     * @Type("array")
     * @Items(@Ref("ConsumerSubscription\Consumer_Subscription"))
     */
    protected $entry;
    /**
     * @param int $totalResults
     */
    public function setTotalResults(?int $totalResults)
    {
        $this->totalResults = $totalResults;
    }
    /**
     * @return int
     */
    public function getTotalResults() : ?int
    {
        return $this->totalResults;
    }
    /**
     * @param int $startIndex
     */
    public function setStartIndex(?int $startIndex)
    {
        $this->startIndex = $startIndex;
    }
    /**
     * @return int
     */
    public function getStartIndex() : ?int
    {
        return $this->startIndex;
    }
    /**
     * @param array<Consumer_Subscription> $entry
     */
    public function setEntry(?array $entry)
    {
        $this->entry = $entry;
    }
    /**
     * @return array<Consumer_Subscription>
     */
    public function getEntry() : ?array
    {
        return $this->entry;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Consumer_Subscription_Collection")
     * @Ref("ConsumerSubscription\Consumer_Subscription_Collection")
     */
    protected $Consumer_Subscription_Collection;
    /**
     * @Key("Consumer_Subscription")
     * @Ref("ConsumerSubscription\Consumer_Subscription")
     */
    protected $Consumer_Subscription;
    /**
     * @Key("Consumer_Message")
     * @Ref("ConsumerSubscription\Consumer_Message")
     */
    protected $Consumer_Message;
    /**
     * @param Consumer_Subscription_Collection $Consumer_Subscription_Collection
     */
    public function setConsumer_Subscription_Collection(?Consumer_Subscription_Collection $Consumer_Subscription_Collection)
    {
        $this->Consumer_Subscription_Collection = $Consumer_Subscription_Collection;
    }
    /**
     * @return Consumer_Subscription_Collection
     */
    public function getConsumer_Subscription_Collection() : ?Consumer_Subscription_Collection
    {
        return $this->Consumer_Subscription_Collection;
    }
    /**
     * @param Consumer_Subscription $Consumer_Subscription
     */
    public function setConsumer_Subscription(?Consumer_Subscription $Consumer_Subscription)
    {
        $this->Consumer_Subscription = $Consumer_Subscription;
    }
    /**
     * @return Consumer_Subscription
     */
    public function getConsumer_Subscription() : ?Consumer_Subscription
    {
        return $this->Consumer_Subscription;
    }
    /**
     * @param Consumer_Message $Consumer_Message
     */
    public function setConsumer_Message(?Consumer_Message $Consumer_Message)
    {
        $this->Consumer_Message = $Consumer_Message;
    }
    /**
     * @return Consumer_Message
     */
    public function getConsumer_Message() : ?Consumer_Message
    {
        return $this->Consumer_Message;
    }
}

