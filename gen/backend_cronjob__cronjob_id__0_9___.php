<?php

namespace BackendCronjobCronjob_id09;

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

    /**
     * @var int
     */
    private $cronjob_id;

    public function __construct(int $cronjob_id, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        $this->cronjob_id = $cronjob_id;

        $this->url = $baseUrl . '/backend/cronjob/' . $cronjob_id . '';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Cronjob
     */
    public function get(): Cronjob
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Cronjob::class);
    }

    /**
     * @param Cronjob $data
     * @return Message
     */
    public function put(Cronjob $data): Message
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
 * @Title("Cronjob Error")
 */
class Cronjob_Error
{
    /**
     * @Key("message")
     * @Type("string")
     */
    protected $message;
    /**
     * @Key("trace")
     * @Type("string")
     */
    protected $trace;
    /**
     * @Key("file")
     * @Type("string")
     */
    protected $file;
    /**
     * @Key("line")
     * @Type("integer")
     */
    protected $line;
    public function setMessage(?string $message)
    {
        $this->message = $message;
    }
    public function getMessage() : ?string
    {
        return $this->message;
    }
    public function setTrace(?string $trace)
    {
        $this->trace = $trace;
    }
    public function getTrace() : ?string
    {
        return $this->trace;
    }
    public function setFile(?string $file)
    {
        $this->file = $file;
    }
    public function getFile() : ?string
    {
        return $this->file;
    }
    public function setLine(?int $line)
    {
        $this->line = $line;
    }
    public function getLine() : ?int
    {
        return $this->line;
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
 * @Title("Cronjob")
 */
class Cronjob
{
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    /**
     * @Key("name")
     * @Type("string")
     * @Pattern("^[a-zA-Z0-9\-\_]{3,64}$")
     */
    protected $name;
    /**
     * @Key("cron")
     * @Type("string")
     */
    protected $cron;
    /**
     * @Key("action")
     * @Type("integer")
     */
    protected $action;
    /**
     * @Key("executeDate")
     * @Type("string")
     * @Format("date-time")
     */
    protected $executeDate;
    /**
     * @Key("exitCode")
     * @Type("integer")
     */
    protected $exitCode;
    /**
     * @Key("errors")
     * @Type("array")
     * @Items(@Ref("PSX\Generation\Cronjob_Error"))
     */
    protected $errors;
    public function setId(?int $id)
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setName(?string $name)
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setCron(?string $cron)
    {
        $this->cron = $cron;
    }
    public function getCron() : ?string
    {
        return $this->cron;
    }
    public function setAction(?int $action)
    {
        $this->action = $action;
    }
    public function getAction() : ?int
    {
        return $this->action;
    }
    public function setExecuteDate(?\DateTime $executeDate)
    {
        $this->executeDate = $executeDate;
    }
    public function getExecuteDate() : ?\DateTime
    {
        return $this->executeDate;
    }
    public function setExitCode(?int $exitCode)
    {
        $this->exitCode = $exitCode;
    }
    public function getExitCode() : ?int
    {
        return $this->exitCode;
    }
    public function setErrors(?array $errors)
    {
        $this->errors = $errors;
    }
    public function getErrors() : ?array
    {
        return $this->errors;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Cronjob")
     * @Ref("PSX\Generation\Cronjob")
     */
    protected $Cronjob;
    /**
     * @Key("Message")
     * @Ref("PSX\Generation\Message")
     */
    protected $Message;
    public function setCronjob(?Cronjob $Cronjob)
    {
        $this->Cronjob = $Cronjob;
    }
    public function getCronjob() : ?Cronjob
    {
        return $this->Cronjob;
    }
    public function setMessage(?Message $Message)
    {
        $this->Message = $Message;
    }
    public function getMessage() : ?Message
    {
        return $this->Message;
    }
}

