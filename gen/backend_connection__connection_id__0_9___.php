<?php

namespace BackendConnectionConnection_id09;

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

    /**
     * @var int
     */
    private $connection_id;

    public function __construct(int $connection_id, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        $this->connection_id = $connection_id;

        $this->url = $baseUrl . '/backend/connection/' . $connection_id . '';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Connection
     */
    public function get(): Connection
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Connection::class);
    }

    /**
     * @param Connection $data
     * @return Message
     */
    public function put(Connection $data): Message
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

    /**
     * @return Message
     */
    public function delete(): Message
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('DELETE', $this->url, $options);
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
 * @Title("Connection Config")
 * @AdditionalProperties(@Schema(oneOf={@Schema(type="string"), @Schema(type="number"), @Schema(type="boolean"), @Schema(type="null"), @Schema(type="array", items=@Schema(oneOf={@Schema(type="string"), @Schema(type="number"), @Schema(type="boolean"), @Schema(type="null")}), maxItems=16)}))
 * @MaxProperties(16)
 */
class Connection_Config extends \ArrayObject
{
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
 * @Title("Connection")
 */
class Connection
{
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    /**
     * @Key("name")
     * @Type("string")
     * @Pattern("^[a-zA-Z0-9\-\_]{3,255}$")
     */
    protected $name;
    /**
     * @Key("class")
     * @Type("string")
     */
    protected $class;
    /**
     * @Key("config")
     * @Ref("BackendConnectionConnection_id09\Connection_Config")
     */
    protected $config;
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
     * @param string $class
     */
    public function setClass(?string $class)
    {
        $this->class = $class;
    }
    /**
     * @return string
     */
    public function getClass() : ?string
    {
        return $this->class;
    }
    /**
     * @param Connection_Config $config
     */
    public function setConfig(?Connection_Config $config)
    {
        $this->config = $config;
    }
    /**
     * @return Connection_Config
     */
    public function getConfig() : ?Connection_Config
    {
        return $this->config;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Connection")
     * @Ref("BackendConnectionConnection_id09\Connection")
     */
    protected $Connection;
    /**
     * @Key("Message")
     * @Ref("BackendConnectionConnection_id09\Message")
     */
    protected $Message;
    /**
     * @param Connection $Connection
     */
    public function setConnection(?Connection $Connection)
    {
        $this->Connection = $Connection;
    }
    /**
     * @return Connection
     */
    public function getConnection() : ?Connection
    {
        return $this->Connection;
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

