<?php

namespace ConsumerSubscription;

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
    public function setStatus(?int $status)
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setCode(?int $code)
    {
        $this->code = $code;
    }
    public function getCode() : ?int
    {
        return $this->code;
    }
    public function setAttempts(?int $attempts)
    {
        $this->attempts = $attempts;
    }
    public function getAttempts() : ?int
    {
        return $this->attempts;
    }
    public function setExecuteDate(?string $executeDate)
    {
        $this->executeDate = $executeDate;
    }
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
     * @Items(@Ref("PSX\Generation\Consumer_Subscription_Response"))
     */
    protected $responses;
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
    public function setEvent(?string $event)
    {
        $this->event = $event;
    }
    public function getEvent() : ?string
    {
        return $this->event;
    }
    public function setEndpoint(?string $endpoint)
    {
        $this->endpoint = $endpoint;
    }
    public function getEndpoint() : ?string
    {
        return $this->endpoint;
    }
    public function setResponses(?array $responses)
    {
        $this->responses = $responses;
    }
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
     * @Items(@Ref("PSX\Generation\Consumer_Subscription"))
     */
    protected $entry;
    public function setTotalResults(?int $totalResults)
    {
        $this->totalResults = $totalResults;
    }
    public function getTotalResults() : ?int
    {
        return $this->totalResults;
    }
    public function setStartIndex(?int $startIndex)
    {
        $this->startIndex = $startIndex;
    }
    public function getStartIndex() : ?int
    {
        return $this->startIndex;
    }
    public function setEntry(?array $entry)
    {
        $this->entry = $entry;
    }
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
     * @Ref("PSX\Generation\Consumer_Subscription_Collection")
     */
    protected $Consumer_Subscription_Collection;
    /**
     * @Key("Consumer_Subscription")
     * @Ref("PSX\Generation\Consumer_Subscription")
     */
    protected $Consumer_Subscription;
    /**
     * @Key("Consumer_Message")
     * @Ref("PSX\Generation\Consumer_Message")
     */
    protected $Consumer_Message;
    public function setConsumer_Subscription_Collection(?Consumer_Subscription_Collection $Consumer_Subscription_Collection)
    {
        $this->Consumer_Subscription_Collection = $Consumer_Subscription_Collection;
    }
    public function getConsumer_Subscription_Collection() : ?Consumer_Subscription_Collection
    {
        return $this->Consumer_Subscription_Collection;
    }
    public function setConsumer_Subscription(?Consumer_Subscription $Consumer_Subscription)
    {
        $this->Consumer_Subscription = $Consumer_Subscription;
    }
    public function getConsumer_Subscription() : ?Consumer_Subscription
    {
        return $this->Consumer_Subscription;
    }
    public function setConsumer_Message(?Consumer_Message $Consumer_Message)
    {
        $this->Consumer_Message = $Consumer_Message;
    }
    public function getConsumer_Message() : ?Consumer_Message
    {
        return $this->Consumer_Message;
    }
}

