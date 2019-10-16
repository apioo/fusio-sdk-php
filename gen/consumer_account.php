<?php

namespace ConsumerAccount;

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

        $this->url = $baseUrl . '/consumer/account';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Consumer_User_Account
     */
    public function get(): Consumer_User_Account
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Consumer_User_Account::class);
    }

    /**
     * @param Consumer_User_Account $data
     * @return Consumer_Message
     */
    public function put(Consumer_User_Account $data): Consumer_Message
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
 * @Title("Consumer User Attributes")
 * @AdditionalProperties(@Schema(type="string"))
 */
class Consumer_User_Attributes extends \ArrayObject
{
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
 * @Title("Consumer User Account")
 */
class Consumer_User_Account
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
     */
    protected $name;
    /**
     * @Key("email")
     * @Type("string")
     */
    protected $email;
    /**
     * @Key("points")
     * @Type("integer")
     */
    protected $points;
    /**
     * @Key("scopes")
     * @Type("array")
     * @Items(@Schema(type="string"))
     */
    protected $scopes;
    /**
     * @Key("attributes")
     * @Ref("ConsumerAccount\Consumer_User_Attributes")
     */
    protected $attributes;
    /**
     * @Key("date")
     * @Type("string")
     * @Format("date-time")
     */
    protected $date;
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
     * @param string $email
     */
    public function setEmail(?string $email)
    {
        $this->email = $email;
    }
    /**
     * @return string
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * @param int $points
     */
    public function setPoints(?int $points)
    {
        $this->points = $points;
    }
    /**
     * @return int
     */
    public function getPoints() : ?int
    {
        return $this->points;
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
     * @param Consumer_User_Attributes $attributes
     */
    public function setAttributes(?Consumer_User_Attributes $attributes)
    {
        $this->attributes = $attributes;
    }
    /**
     * @return Consumer_User_Attributes
     */
    public function getAttributes() : ?Consumer_User_Attributes
    {
        return $this->attributes;
    }
    /**
     * @param \DateTime $date
     */
    public function setDate(?\DateTime $date)
    {
        $this->date = $date;
    }
    /**
     * @return \DateTime
     */
    public function getDate() : ?\DateTime
    {
        return $this->date;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Consumer_User_Account")
     * @Ref("ConsumerAccount\Consumer_User_Account")
     */
    protected $Consumer_User_Account;
    /**
     * @Key("Consumer_Message")
     * @Ref("ConsumerAccount\Consumer_Message")
     */
    protected $Consumer_Message;
    /**
     * @param Consumer_User_Account $Consumer_User_Account
     */
    public function setConsumer_User_Account(?Consumer_User_Account $Consumer_User_Account)
    {
        $this->Consumer_User_Account = $Consumer_User_Account;
    }
    /**
     * @return Consumer_User_Account
     */
    public function getConsumer_User_Account() : ?Consumer_User_Account
    {
        return $this->Consumer_User_Account;
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

