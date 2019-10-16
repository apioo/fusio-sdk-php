<?php

namespace BackendLogErrorError_id09;

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
    private $error_id;

    public function __construct(int $error_id, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        $this->error_id = $error_id;

        $this->url = $baseUrl . '/backend/log/error/' . $error_id . '';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Log_Error
     */
    public function get(): Log_Error
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Log_Error::class);
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
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Log_Error")
     * @Ref("BackendLogErrorError_id09\Log_Error")
     */
    protected $Log_Error;
    /**
     * @param Log_Error $Log_Error
     */
    public function setLog_Error(?Log_Error $Log_Error)
    {
        $this->Log_Error = $Log_Error;
    }
    /**
     * @return Log_Error
     */
    public function getLog_Error() : ?Log_Error
    {
        return $this->Log_Error;
    }
}

