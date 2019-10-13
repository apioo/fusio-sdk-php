<?php

namespace BackendLogLog_id09;

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
    private $log_id;

    public function __construct(int $log_id, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        $this->log_id = $log_id;

        $this->url = $baseUrl . '/backend/log/' . $log_id . '';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Log
     */
    public function get(): Log
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Log::class);
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
 * @Title("Log Error")
 */
class Log_Error
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
 * @Title("Log")
 */
class Log
{
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    /**
     * @Key("ip")
     * @Type("string")
     */
    protected $ip;
    /**
     * @Key("userAgent")
     * @Type("string")
     */
    protected $userAgent;
    /**
     * @Key("method")
     * @Type("string")
     */
    protected $method;
    /**
     * @Key("path")
     * @Type("string")
     */
    protected $path;
    /**
     * @Key("header")
     * @Type("string")
     */
    protected $header;
    /**
     * @Key("body")
     * @Type("string")
     */
    protected $body;
    /**
     * @Key("date")
     * @Type("string")
     * @Format("date-time")
     */
    protected $date;
    /**
     * @Key("errors")
     * @Type("array")
     * @Items(@Ref("PSX\Generation\Log_Error"))
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
    public function setIp(?string $ip)
    {
        $this->ip = $ip;
    }
    public function getIp() : ?string
    {
        return $this->ip;
    }
    public function setUserAgent(?string $userAgent)
    {
        $this->userAgent = $userAgent;
    }
    public function getUserAgent() : ?string
    {
        return $this->userAgent;
    }
    public function setMethod(?string $method)
    {
        $this->method = $method;
    }
    public function getMethod() : ?string
    {
        return $this->method;
    }
    public function setPath(?string $path)
    {
        $this->path = $path;
    }
    public function getPath() : ?string
    {
        return $this->path;
    }
    public function setHeader(?string $header)
    {
        $this->header = $header;
    }
    public function getHeader() : ?string
    {
        return $this->header;
    }
    public function setBody(?string $body)
    {
        $this->body = $body;
    }
    public function getBody() : ?string
    {
        return $this->body;
    }
    public function setDate(?\DateTime $date)
    {
        $this->date = $date;
    }
    public function getDate() : ?\DateTime
    {
        return $this->date;
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
     * @Key("Log")
     * @Ref("PSX\Generation\Log")
     */
    protected $Log;
    public function setLog(?Log $Log)
    {
        $this->Log = $Log;
    }
    public function getLog() : ?Log
    {
        return $this->Log;
    }
}

