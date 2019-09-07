<?php

namespace BackendAccountChange_password;

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

        $this->url = $baseUrl . '/backend/account/change_password';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    public function put(Account_Credentials $data): Message
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
 * @Title("Account Credentials")
 * @Required({"oldPassword", "newPassword", "verifyPassword"})
 */
class Account_Credentials
{
    /**
     * @Key("oldPassword")
     * @Type("string")
     * @MaxLength(128)
     * @MinLength(8)
     */
    protected $oldPassword;
    /**
     * @Key("newPassword")
     * @Type("string")
     * @MaxLength(128)
     * @MinLength(8)
     */
    protected $newPassword;
    /**
     * @Key("verifyPassword")
     * @Type("string")
     * @MaxLength(128)
     * @MinLength(8)
     */
    protected $verifyPassword;
    public function setOldPassword($oldPassword)
    {
        $this->oldPassword = $oldPassword;
    }
    public function getOldPassword()
    {
        return $this->oldPassword;
    }
    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;
    }
    public function getNewPassword()
    {
        return $this->newPassword;
    }
    public function setVerifyPassword($verifyPassword)
    {
        $this->verifyPassword = $verifyPassword;
    }
    public function getVerifyPassword()
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
     * @Key("Account_Credentials")
     * @Ref("PSX\Generation\Account_Credentials")
     */
    protected $Account_Credentials;
    /**
     * @Key("Message")
     * @Ref("PSX\Generation\Message")
     */
    protected $Message;
    public function setAccount_Credentials($Account_Credentials)
    {
        $this->Account_Credentials = $Account_Credentials;
    }
    public function getAccount_Credentials()
    {
        return $this->Account_Credentials;
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

