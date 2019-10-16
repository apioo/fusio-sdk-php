<?php

namespace ConsumerActivate;

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

        $this->url = $baseUrl . '/consumer/activate';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @param Consumer_User_Activate $data
     * @return Consumer_Message
     */
    public function post(Consumer_User_Activate $data): Consumer_Message
    {
        $options = [
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
 * @Title("Consumer User Activate")
 * @Required({"token"})
 */
class Consumer_User_Activate
{
    /**
     * @Key("token")
     * @Type("string")
     */
    protected $token;
    /**
     * @param string $token
     */
    public function setToken(?string $token)
    {
        $this->token = $token;
    }
    /**
     * @return string
     */
    public function getToken() : ?string
    {
        return $this->token;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Consumer_User_Activate")
     * @Ref("ConsumerActivate\Consumer_User_Activate")
     */
    protected $Consumer_User_Activate;
    /**
     * @Key("Consumer_Message")
     * @Ref("ConsumerActivate\Consumer_Message")
     */
    protected $Consumer_Message;
    /**
     * @param Consumer_User_Activate $Consumer_User_Activate
     */
    public function setConsumer_User_Activate(?Consumer_User_Activate $Consumer_User_Activate)
    {
        $this->Consumer_User_Activate = $Consumer_User_Activate;
    }
    /**
     * @return Consumer_User_Activate
     */
    public function getConsumer_User_Activate() : ?Consumer_User_Activate
    {
        return $this->Consumer_User_Activate;
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

