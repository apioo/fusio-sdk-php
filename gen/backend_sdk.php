<?php

namespace BackendSdk;

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

        $this->url = $baseUrl . '/backend/sdk';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Sdk_Types
     */
    public function get(): Sdk_Types
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Sdk_Types::class);
    }

    /**
     * @param Sdk_Generate $data
     * @return Message
     */
    public function post(Sdk_Generate $data): Message
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
            'json' => $this->convertToArray($data)
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
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
 * @Title("Sdk Generate")
 */
class Sdk_Generate
{
    /**
     * @Key("format")
     * @Type("string")
     */
    protected $format;
    /**
     * @Key("config")
     * @Type("string")
     */
    protected $config;
    /**
     * @param string $format
     */
    public function setFormat(?string $format)
    {
        $this->format = $format;
    }
    /**
     * @return string
     */
    public function getFormat() : ?string
    {
        return $this->format;
    }
    /**
     * @param string $config
     */
    public function setConfig(?string $config)
    {
        $this->config = $config;
    }
    /**
     * @return string
     */
    public function getConfig() : ?string
    {
        return $this->config;
    }
}
/**
 * @Title("Sdk Types")
 * @AdditionalProperties(@Schema(type="string"))
 */
class Sdk_Types extends \ArrayObject
{
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Sdk_Types")
     * @Ref("BackendSdk\Sdk_Types")
     */
    protected $Sdk_Types;
    /**
     * @Key("Sdk_Generate")
     * @Ref("BackendSdk\Sdk_Generate")
     */
    protected $Sdk_Generate;
    /**
     * @Key("Message")
     * @Ref("BackendSdk\Message")
     */
    protected $Message;
    /**
     * @param Sdk_Types $Sdk_Types
     */
    public function setSdk_Types(?Sdk_Types $Sdk_Types)
    {
        $this->Sdk_Types = $Sdk_Types;
    }
    /**
     * @return Sdk_Types
     */
    public function getSdk_Types() : ?Sdk_Types
    {
        return $this->Sdk_Types;
    }
    /**
     * @param Sdk_Generate $Sdk_Generate
     */
    public function setSdk_Generate(?Sdk_Generate $Sdk_Generate)
    {
        $this->Sdk_Generate = $Sdk_Generate;
    }
    /**
     * @return Sdk_Generate
     */
    public function getSdk_Generate() : ?Sdk_Generate
    {
        return $this->Sdk_Generate;
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

