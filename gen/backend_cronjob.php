<?php

namespace BackendCronjob;

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

        $this->url = $baseUrl . '/backend/cronjob';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @param GetQuery $query
     * @return Cronjob_Collection
     */
    public function get(GetQuery $query): Cronjob_Collection
    {
        $options = [
            'query' => $this->convertToArray($query),
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Cronjob_Collection::class);
    }

    /**
     * @param Cronjob $data
     * @return Message
     */
    public function post(Cronjob $data): Message
    {
        $options = [
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
 * @Title("Cronjob")
 * @Required({"name", "cron", "action"})
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
     * @Items(@Ref("BackendCronjob\Cronjob_Error"))
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
     * @param string $cron
     */
    public function setCron(?string $cron)
    {
        $this->cron = $cron;
    }
    /**
     * @return string
     */
    public function getCron() : ?string
    {
        return $this->cron;
    }
    /**
     * @param int $action
     */
    public function setAction(?int $action)
    {
        $this->action = $action;
    }
    /**
     * @return int
     */
    public function getAction() : ?int
    {
        return $this->action;
    }
    /**
     * @param \DateTime $executeDate
     */
    public function setExecuteDate(?\DateTime $executeDate)
    {
        $this->executeDate = $executeDate;
    }
    /**
     * @return \DateTime
     */
    public function getExecuteDate() : ?\DateTime
    {
        return $this->executeDate;
    }
    /**
     * @param int $exitCode
     */
    public function setExitCode(?int $exitCode)
    {
        $this->exitCode = $exitCode;
    }
    /**
     * @return int
     */
    public function getExitCode() : ?int
    {
        return $this->exitCode;
    }
    /**
     * @param array<Cronjob_Error> $errors
     */
    public function setErrors(?array $errors)
    {
        $this->errors = $errors;
    }
    /**
     * @return array<Cronjob_Error>
     */
    public function getErrors() : ?array
    {
        return $this->errors;
    }
}
/**
 * @Title("Cronjob Collection")
 */
class Cronjob_Collection
{
    /**
     * @Key("totalResults")
     * @Type("integer")
     */
    protected $totalResults;
    /**
     * @Key("startIndex")
     * @Type("integer")
     */
    protected $startIndex;
    /**
     * @Key("entry")
     * @Type("array")
     * @Items(@Ref("BackendCronjob\Cronjob"))
     */
    protected $entry;
    /**
     * @param int $totalResults
     */
    public function setTotalResults(?int $totalResults)
    {
        $this->totalResults = $totalResults;
    }
    /**
     * @return int
     */
    public function getTotalResults() : ?int
    {
        return $this->totalResults;
    }
    /**
     * @param int $startIndex
     */
    public function setStartIndex(?int $startIndex)
    {
        $this->startIndex = $startIndex;
    }
    /**
     * @return int
     */
    public function getStartIndex() : ?int
    {
        return $this->startIndex;
    }
    /**
     * @param array<Cronjob> $entry
     */
    public function setEntry(?array $entry)
    {
        $this->entry = $entry;
    }
    /**
     * @return array<Cronjob>
     */
    public function getEntry() : ?array
    {
        return $this->entry;
    }
}
/**
 * @Title("GetQuery")
 */
class GetQuery
{
    /**
     * @Key("startIndex")
     * @Type("integer")
     */
    protected $startIndex;
    /**
     * @Key("count")
     * @Type("integer")
     */
    protected $count;
    /**
     * @Key("search")
     * @Type("string")
     */
    protected $search;
    /**
     * @param int $startIndex
     */
    public function setStartIndex(?int $startIndex)
    {
        $this->startIndex = $startIndex;
    }
    /**
     * @return int
     */
    public function getStartIndex() : ?int
    {
        return $this->startIndex;
    }
    /**
     * @param int $count
     */
    public function setCount(?int $count)
    {
        $this->count = $count;
    }
    /**
     * @return int
     */
    public function getCount() : ?int
    {
        return $this->count;
    }
    /**
     * @param string $search
     */
    public function setSearch(?string $search)
    {
        $this->search = $search;
    }
    /**
     * @return string
     */
    public function getSearch() : ?string
    {
        return $this->search;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("GetQuery")
     * @Ref("BackendCronjob\GetQuery")
     */
    protected $GetQuery;
    /**
     * @Key("Cronjob_Collection")
     * @Ref("BackendCronjob\Cronjob_Collection")
     */
    protected $Cronjob_Collection;
    /**
     * @Key("Cronjob")
     * @Ref("BackendCronjob\Cronjob")
     */
    protected $Cronjob;
    /**
     * @Key("Message")
     * @Ref("BackendCronjob\Message")
     */
    protected $Message;
    /**
     * @param GetQuery $GetQuery
     */
    public function setGetQuery(?GetQuery $GetQuery)
    {
        $this->GetQuery = $GetQuery;
    }
    /**
     * @return GetQuery
     */
    public function getGetQuery() : ?GetQuery
    {
        return $this->GetQuery;
    }
    /**
     * @param Cronjob_Collection $Cronjob_Collection
     */
    public function setCronjob_Collection(?Cronjob_Collection $Cronjob_Collection)
    {
        $this->Cronjob_Collection = $Cronjob_Collection;
    }
    /**
     * @return Cronjob_Collection
     */
    public function getCronjob_Collection() : ?Cronjob_Collection
    {
        return $this->Cronjob_Collection;
    }
    /**
     * @param Cronjob $Cronjob
     */
    public function setCronjob(?Cronjob $Cronjob)
    {
        $this->Cronjob = $Cronjob;
    }
    /**
     * @return Cronjob
     */
    public function getCronjob() : ?Cronjob
    {
        return $this->Cronjob;
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

