<?php

namespace ConsumerActivate;

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

        $this->url = $baseUrl . '/consumer/activate';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

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
    public function setToken($token)
    {
        $this->token = $token;
    }
    public function getToken()
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
     * @Ref("PSX\Generation\Consumer_User_Activate")
     */
    protected $Consumer_User_Activate;
    /**
     * @Key("Consumer_Message")
     * @Ref("PSX\Generation\Consumer_Message")
     */
    protected $Consumer_Message;
    public function setConsumer_User_Activate($Consumer_User_Activate)
    {
        $this->Consumer_User_Activate = $Consumer_User_Activate;
    }
    public function getConsumer_User_Activate()
    {
        return $this->Consumer_User_Activate;
    }
    public function setConsumer_Message($Consumer_Message)
    {
        $this->Consumer_Message = $Consumer_Message;
    }
    public function getConsumer_Message()
    {
        return $this->Consumer_Message;
    }
}

