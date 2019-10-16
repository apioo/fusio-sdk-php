<?php

namespace ConsumerSubscriptionSubscription_id09;

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
    private $subscription_id;

    public function __construct(int $subscription_id, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        $this->subscription_id = $subscription_id;

        $this->url = $baseUrl . '/consumer/subscription/' . $subscription_id . '';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Consumer_Subscription
     */
    public function get(): Consumer_Subscription
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Consumer_Subscription::class);
    }

    /**
     * @param Consumer_App $data
     * @return Consumer_Message
     */
    public function put(Consumer_App $data): Consumer_Message
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
            'json' => $this->convertToArray($data)
        ];

        $response = $this->httpClient->request('PUT', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Consumer_Message::class);
    }

    /**
     * @return Consumer_Message
     */
    public function delete(): Consumer_Message
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('DELETE', $this->url, $options);
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
 * @Title("Consumer App")
 * @Required({"event", "endpoint"})
 */
class Consumer_App
{
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    /**
     * @Key("userId")
     * @Type("integer")
     */
    protected $userId;
    /**
     * @Key("status")
     * @Type("integer")
     */
    protected $status;
    /**
     * @Key("name")
     * @Type("string")
     * @Pattern("^[A-z0-9\-\_]{3,64}$")
     */
    protected $name;
    /**
     * @Key("url")
     * @Type("string")
     * @MinLength(8)
     */
    protected $url;
    /**
     * @Key("appKey")
     * @Type("string")
     */
    protected $appKey;
    /**
     * @Key("appSecret")
     * @Type("string")
     */
    protected $appSecret;
    /**
     * @Key("date")
     * @Type("string")
     * @Format("date-time")
     */
    protected $date;
    /**
     * @Key("scopes")
     * @Type("array")
     * @Items(@Schema(type="string"))
     */
    protected $scopes;
    public function setId(?int $id)
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setUserId(?int $userId)
    {
        $this->userId = $userId;
    }
    public function getUserId() : ?int
    {
        return $this->userId;
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
    public function setUrl(?string $url)
    {
        $this->url = $url;
    }
    public function getUrl() : ?string
    {
        return $this->url;
    }
    public function setAppKey(?string $appKey)
    {
        $this->appKey = $appKey;
    }
    public function getAppKey() : ?string
    {
        return $this->appKey;
    }
    public function setAppSecret(?string $appSecret)
    {
        $this->appSecret = $appSecret;
    }
    public function getAppSecret() : ?string
    {
        return $this->appSecret;
    }
    public function setDate(?\DateTime $date)
    {
        $this->date = $date;
    }
    public function getDate() : ?\DateTime
    {
        return $this->date;
    }
    public function setScopes(?array $scopes)
    {
        $this->scopes = $scopes;
    }
    public function getScopes() : ?array
    {
        return $this->scopes;
    }
}
/**
 * @Title("Consumer Subscription")
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
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Consumer_Subscription")
     * @Ref("PSX\Generation\Consumer_Subscription")
     */
    protected $Consumer_Subscription;
    /**
     * @Key("Consumer_App")
     * @Ref("PSX\Generation\Consumer_App")
     */
    protected $Consumer_App;
    /**
     * @Key("Consumer_Message")
     * @Ref("PSX\Generation\Consumer_Message")
     */
    protected $Consumer_Message;
    public function setConsumer_Subscription(?Consumer_Subscription $Consumer_Subscription)
    {
        $this->Consumer_Subscription = $Consumer_Subscription;
    }
    public function getConsumer_Subscription() : ?Consumer_Subscription
    {
        return $this->Consumer_Subscription;
    }
    public function setConsumer_App(?Consumer_App $Consumer_App)
    {
        $this->Consumer_App = $Consumer_App;
    }
    public function getConsumer_App() : ?Consumer_App
    {
        return $this->Consumer_App;
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
