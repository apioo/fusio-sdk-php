<?php

namespace ConsumerAccountChange_password;

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

        $this->url = $baseUrl . '/consumer/account/change_password';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @param Consumer_User_Credentials $data
     * @return Consumer_Message
     */
    public function put(Consumer_User_Credentials $data): Consumer_Message
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
 * @Title("Consumer User Credentials")
 */
class Consumer_User_Credentials
{
    /**
     * @Key("oldPassword")
     * @Type("string")
     */
    protected $oldPassword;
    /**
     * @Key("newPassword")
     * @Type("string")
     */
    protected $newPassword;
    /**
     * @Key("verifyPassword")
     * @Type("string")
     */
    protected $verifyPassword;
    public function setOldPassword(?string $oldPassword)
    {
        $this->oldPassword = $oldPassword;
    }
    public function getOldPassword() : ?string
    {
        return $this->oldPassword;
    }
    public function setNewPassword(?string $newPassword)
    {
        $this->newPassword = $newPassword;
    }
    public function getNewPassword() : ?string
    {
        return $this->newPassword;
    }
    public function setVerifyPassword(?string $verifyPassword)
    {
        $this->verifyPassword = $verifyPassword;
    }
    public function getVerifyPassword() : ?string
    {
        return $this->verifyPassword;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Consumer_User_Credentials")
     * @Ref("PSX\Generation\Consumer_User_Credentials")
     */
    protected $Consumer_User_Credentials;
    /**
     * @Key("Consumer_Message")
     * @Ref("PSX\Generation\Consumer_Message")
     */
    protected $Consumer_Message;
    public function setConsumer_User_Credentials(?Consumer_User_Credentials $Consumer_User_Credentials)
    {
        $this->Consumer_User_Credentials = $Consumer_User_Credentials;
    }
    public function getConsumer_User_Credentials() : ?Consumer_User_Credentials
    {
        return $this->Consumer_User_Credentials;
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

