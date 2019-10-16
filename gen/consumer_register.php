<?php

namespace ConsumerRegister;

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

        $this->url = $baseUrl . '/consumer/register';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @param Consumer_User_Register $data
     * @return Consumer_Message
     */
    public function post(Consumer_User_Register $data): Consumer_Message
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
 * @Title("Consumer User Register")
 * @Required({"name", "email", "password"})
 */
class Consumer_User_Register
{
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
     * @Key("password")
     * @Type("string")
     */
    protected $password;
    /**
     * @Key("captcha")
     * @Type("string")
     */
    protected $captcha;
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
     * @param string $password
     */
    public function setPassword(?string $password)
    {
        $this->password = $password;
    }
    /**
     * @return string
     */
    public function getPassword() : ?string
    {
        return $this->password;
    }
    /**
     * @param string $captcha
     */
    public function setCaptcha(?string $captcha)
    {
        $this->captcha = $captcha;
    }
    /**
     * @return string
     */
    public function getCaptcha() : ?string
    {
        return $this->captcha;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Consumer_User_Register")
     * @Ref("ConsumerRegister\Consumer_User_Register")
     */
    protected $Consumer_User_Register;
    /**
     * @Key("Consumer_Message")
     * @Ref("ConsumerRegister\Consumer_Message")
     */
    protected $Consumer_Message;
    /**
     * @param Consumer_User_Register $Consumer_User_Register
     */
    public function setConsumer_User_Register(?Consumer_User_Register $Consumer_User_Register)
    {
        $this->Consumer_User_Register = $Consumer_User_Register;
    }
    /**
     * @return Consumer_User_Register
     */
    public function getConsumer_User_Register() : ?Consumer_User_Register
    {
        return $this->Consumer_User_Register;
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

