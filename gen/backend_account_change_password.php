<?php

namespace BackendAccountChange_password;

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

        $this->url = $baseUrl . '/backend/account/change_password';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @param Account_Credentials $data
     * @return Message
     */
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
    /**
     * @param string $oldPassword
     */
    public function setOldPassword(?string $oldPassword)
    {
        $this->oldPassword = $oldPassword;
    }
    /**
     * @return string
     */
    public function getOldPassword() : ?string
    {
        return $this->oldPassword;
    }
    /**
     * @param string $newPassword
     */
    public function setNewPassword(?string $newPassword)
    {
        $this->newPassword = $newPassword;
    }
    /**
     * @return string
     */
    public function getNewPassword() : ?string
    {
        return $this->newPassword;
    }
    /**
     * @param string $verifyPassword
     */
    public function setVerifyPassword(?string $verifyPassword)
    {
        $this->verifyPassword = $verifyPassword;
    }
    /**
     * @return string
     */
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
     * @Key("Account_Credentials")
     * @Ref("BackendAccountChange_password\Account_Credentials")
     */
    protected $Account_Credentials;
    /**
     * @Key("Message")
     * @Ref("BackendAccountChange_password\Message")
     */
    protected $Message;
    /**
     * @param Account_Credentials $Account_Credentials
     */
    public function setAccount_Credentials(?Account_Credentials $Account_Credentials)
    {
        $this->Account_Credentials = $Account_Credentials;
    }
    /**
     * @return Account_Credentials
     */
    public function getAccount_Credentials() : ?Account_Credentials
    {
        return $this->Account_Credentials;
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

