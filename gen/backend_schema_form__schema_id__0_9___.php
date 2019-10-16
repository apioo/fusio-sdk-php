<?php

namespace BackendSchemaFormSchema_id09;

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
    private $schema_id;

    public function __construct(int $schema_id, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        $this->schema_id = $schema_id;

        $this->url = $baseUrl . '/backend/schema/form/' . $schema_id . '';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @param Schema_Form $data
     * @return Message
     */
    public function put(Schema_Form $data): Message
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
 * @Title("Schema Form")
 * @Description("Contains a JsonSchema UI vocabulary to describe the UI of the schema")
 * @AdditionalProperties(true)
 */
class Schema_Form extends \ArrayObject
{
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Schema_Form")
     * @Ref("BackendSchemaFormSchema_id09\Schema_Form")
     */
    protected $Schema_Form;
    /**
     * @Key("Message")
     * @Ref("BackendSchemaFormSchema_id09\Message")
     */
    protected $Message;
    /**
     * @param Schema_Form $Schema_Form
     */
    public function setSchema_Form(?Schema_Form $Schema_Form)
    {
        $this->Schema_Form = $Schema_Form;
    }
    /**
     * @return Schema_Form
     */
    public function getSchema_Form() : ?Schema_Form
    {
        return $this->Schema_Form;
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

