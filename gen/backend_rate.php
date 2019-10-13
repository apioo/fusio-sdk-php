<?php

namespace BackendRate;

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

        $this->url = $baseUrl . '/backend/rate';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @param GetQuery $query
     * @return Rate_Collection
     */
    public function get(GetQuery $query): Rate_Collection
    {
        $options = [
            'query' => $this->convertToArray($query),
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Rate_Collection::class);
    }

    /**
     * @param Rate $data
     * @return Message
     */
    public function post(Rate $data): Message
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
 * @Title("Rate Allocation")
 */
class Rate_Allocation
{
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    /**
     * @Key("routeId")
     * @Type("integer")
     */
    protected $routeId;
    /**
     * @Key("appId")
     * @Type("integer")
     */
    protected $appId;
    /**
     * @Key("authenticated")
     * @Type("boolean")
     */
    protected $authenticated;
    /**
     * @Key("parameters")
     * @Type("string")
     */
    protected $parameters;
    public function setId(?int $id)
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setRouteId(?int $routeId)
    {
        $this->routeId = $routeId;
    }
    public function getRouteId() : ?int
    {
        return $this->routeId;
    }
    public function setAppId(?int $appId)
    {
        $this->appId = $appId;
    }
    public function getAppId() : ?int
    {
        return $this->appId;
    }
    public function setAuthenticated(?bool $authenticated)
    {
        $this->authenticated = $authenticated;
    }
    public function getAuthenticated() : ?bool
    {
        return $this->authenticated;
    }
    public function setParameters(?string $parameters)
    {
        $this->parameters = $parameters;
    }
    public function getParameters() : ?string
    {
        return $this->parameters;
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
 * @Title("Rate")
 * @Required({"name", "rateLimit", "timespan"})
 */
class Rate
{
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    /**
     * @Key("priority")
     * @Type("integer")
     * @Minimum(0)
     */
    protected $priority;
    /**
     * @Key("name")
     * @Type("string")
     * @Pattern("^[a-zA-Z0-9\-\_]{3,64}$")
     */
    protected $name;
    /**
     * @Key("rateLimit")
     * @Type("integer")
     * @Minimum(0)
     */
    protected $rateLimit;
    /**
     * @Key("timespan")
     * @Type("string")
     * @Format("duration")
     */
    protected $timespan;
    /**
     * @Key("allocation")
     * @Type("array")
     * @Items(@Ref("PSX\Generation\Rate_Allocation"))
     */
    protected $allocation;
    public function setId(?int $id)
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setPriority(?int $priority)
    {
        $this->priority = $priority;
    }
    public function getPriority() : ?int
    {
        return $this->priority;
    }
    public function setName(?string $name)
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setRateLimit(?int $rateLimit)
    {
        $this->rateLimit = $rateLimit;
    }
    public function getRateLimit() : ?int
    {
        return $this->rateLimit;
    }
    public function setTimespan(?\DateInterval $timespan)
    {
        $this->timespan = $timespan;
    }
    public function getTimespan() : ?\DateInterval
    {
        return $this->timespan;
    }
    public function setAllocation(?array $allocation)
    {
        $this->allocation = $allocation;
    }
    public function getAllocation() : ?array
    {
        return $this->allocation;
    }
}
/**
 * @Title("Rate Collection")
 */
class Rate_Collection
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
     * @Items(@Ref("PSX\Generation\Rate"))
     */
    protected $entry;
    public function setTotalResults(?int $totalResults)
    {
        $this->totalResults = $totalResults;
    }
    public function getTotalResults() : ?int
    {
        return $this->totalResults;
    }
    public function setStartIndex(?int $startIndex)
    {
        $this->startIndex = $startIndex;
    }
    public function getStartIndex() : ?int
    {
        return $this->startIndex;
    }
    public function setEntry(?array $entry)
    {
        $this->entry = $entry;
    }
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
    public function setStartIndex(?int $startIndex)
    {
        $this->startIndex = $startIndex;
    }
    public function getStartIndex() : ?int
    {
        return $this->startIndex;
    }
    public function setCount(?int $count)
    {
        $this->count = $count;
    }
    public function getCount() : ?int
    {
        return $this->count;
    }
    public function setSearch(?string $search)
    {
        $this->search = $search;
    }
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
     * @Ref("PSX\Generation\GetQuery")
     */
    protected $GetQuery;
    /**
     * @Key("Rate_Collection")
     * @Ref("PSX\Generation\Rate_Collection")
     */
    protected $Rate_Collection;
    /**
     * @Key("Rate")
     * @Ref("PSX\Generation\Rate")
     */
    protected $Rate;
    /**
     * @Key("Message")
     * @Ref("PSX\Generation\Message")
     */
    protected $Message;
    public function setGetQuery(?GetQuery $GetQuery)
    {
        $this->GetQuery = $GetQuery;
    }
    public function getGetQuery() : ?GetQuery
    {
        return $this->GetQuery;
    }
    public function setRate_Collection(?Rate_Collection $Rate_Collection)
    {
        $this->Rate_Collection = $Rate_Collection;
    }
    public function getRate_Collection() : ?Rate_Collection
    {
        return $this->Rate_Collection;
    }
    public function setRate(?Rate $Rate)
    {
        $this->Rate = $Rate;
    }
    public function getRate() : ?Rate
    {
        return $this->Rate;
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

