<?php

namespace BackendLogLog_id09;

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
    /**
     * @param string $trace
     */
    public function setTrace(?string $trace)
    {
        $this->trace = $trace;
    }
    /**
     * @return string
     */
    public function getTrace() : ?string
    {
        return $this->trace;
    }
    /**
     * @param string $file
     */
    public function setFile(?string $file)
    {
        $this->file = $file;
    }
    /**
     * @return string
     */
    public function getFile() : ?string
    {
        return $this->file;
    }
    /**
     * @param int $line
     */
    public function setLine(?int $line)
    {
        $this->line = $line;
    }
    /**
     * @return int
     */
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
     * @Items(@Ref("BackendLogLog_id09\Log_Error"))
     */
    protected $errors;
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
     * @param string $ip
     */
    public function setIp(?string $ip)
    {
        $this->ip = $ip;
    }
    /**
     * @return string
     */
    public function getIp() : ?string
    {
        return $this->ip;
    }
    /**
     * @param string $userAgent
     */
    public function setUserAgent(?string $userAgent)
    {
        $this->userAgent = $userAgent;
    }
    /**
     * @return string
     */
    public function getUserAgent() : ?string
    {
        return $this->userAgent;
    }
    /**
     * @param string $method
     */
    public function setMethod(?string $method)
    {
        $this->method = $method;
    }
    /**
     * @return string
     */
    public function getMethod() : ?string
    {
        return $this->method;
    }
    /**
     * @param string $path
     */
    public function setPath(?string $path)
    {
        $this->path = $path;
    }
    /**
     * @return string
     */
    public function getPath() : ?string
    {
        return $this->path;
    }
    /**
     * @param string $header
     */
    public function setHeader(?string $header)
    {
        $this->header = $header;
    }
    /**
     * @return string
     */
    public function getHeader() : ?string
    {
        return $this->header;
    }
    /**
     * @param string $body
     */
    public function setBody(?string $body)
    {
        $this->body = $body;
    }
    /**
     * @return string
     */
    public function getBody() : ?string
    {
        return $this->body;
    }
    /**
     * @param \DateTime $date
     */
    public function setDate(?\DateTime $date)
    {
        $this->date = $date;
    }
    /**
     * @return \DateTime
     */
    public function getDate() : ?\DateTime
    {
        return $this->date;
    }
    /**
     * @param array<Log_Error> $errors
     */
    public function setErrors(?array $errors)
    {
        $this->errors = $errors;
    }
    /**
     * @return array<Log_Error>
     */
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
     * @Ref("BackendLogLog_id09\Log")
     */
    protected $Log;
    /**
     * @param Log $Log
     */
    public function setLog(?Log $Log)
    {
        $this->Log = $Log;
    }
    /**
     * @return Log
     */
    public function getLog() : ?Log
    {
        return $this->Log;
    }
}

