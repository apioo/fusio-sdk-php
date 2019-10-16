<?php

namespace BackendAppToken;

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

        $this->url = $baseUrl . '/backend/app/token';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @param GetQuery $query
     * @return App_Token_Collection
     */
    public function get(GetQuery $query): App_Token_Collection
    {
        $options = [
            'query' => $this->convertToArray($query),
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, App_Token_Collection::class);
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
 * @Title("App Token")
 */
class App_Token
{
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    /**
     * @Key("token")
     * @Type("string")
     */
    protected $token;
    /**
     * @Key("scope")
     * @Type("string")
     */
    protected $scope;
    /**
     * @Key("ip")
     * @Type("string")
     */
    protected $ip;
    /**
     * @Key("expire")
     * @Type("string")
     * @Format("date-time")
     */
    protected $expire;
    /**
     * @Key("date")
     * @Type("string")
     * @Format("date-time")
     */
    protected $date;
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
     * @param string $token
     */
    public function setToken(?string $token)
    {
        $this->token = $token;
    }
    /**
     * @return string
     */
    public function getToken() : ?string
    {
        return $this->token;
    }
    /**
     * @param string $scope
     */
    public function setScope(?string $scope)
    {
        $this->scope = $scope;
    }
    /**
     * @return string
     */
    public function getScope() : ?string
    {
        return $this->scope;
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
     * @param \DateTime $expire
     */
    public function setExpire(?\DateTime $expire)
    {
        $this->expire = $expire;
    }
    /**
     * @return \DateTime
     */
    public function getExpire() : ?\DateTime
    {
        return $this->expire;
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
}
/**
 * @Title("App Token Collection")
 */
class App_Token_Collection
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
     * @Items(@Ref("BackendAppToken\App_Token"))
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
     * @param array<App_Token> $entry
     */
    public function setEntry(?array $entry)
    {
        $this->entry = $entry;
    }
    /**
     * @return array<App_Token>
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
     * @Key("from")
     * @Type("string")
     * @Format("date-time")
     */
    protected $from;
    /**
     * @Key("to")
     * @Type("string")
     * @Format("date-time")
     */
    protected $to;
    /**
     * @Key("appId")
     * @Type("integer")
     */
    protected $appId;
    /**
     * @Key("userId")
     * @Type("integer")
     */
    protected $userId;
    /**
     * @Key("status")
     * @Type("integer")
     */
    protected $status;
    /**
     * @Key("scope")
     * @Type("string")
     */
    protected $scope;
    /**
     * @Key("ip")
     * @Type("string")
     */
    protected $ip;
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
     * @param \DateTime $from
     */
    public function setFrom(?\DateTime $from)
    {
        $this->from = $from;
    }
    /**
     * @return \DateTime
     */
    public function getFrom() : ?\DateTime
    {
        return $this->from;
    }
    /**
     * @param \DateTime $to
     */
    public function setTo(?\DateTime $to)
    {
        $this->to = $to;
    }
    /**
     * @return \DateTime
     */
    public function getTo() : ?\DateTime
    {
        return $this->to;
    }
    /**
     * @param int $appId
     */
    public function setAppId(?int $appId)
    {
        $this->appId = $appId;
    }
    /**
     * @return int
     */
    public function getAppId() : ?int
    {
        return $this->appId;
    }
    /**
     * @param int $userId
     */
    public function setUserId(?int $userId)
    {
        $this->userId = $userId;
    }
    /**
     * @return int
     */
    public function getUserId() : ?int
    {
        return $this->userId;
    }
    /**
     * @param int $status
     */
    public function setStatus(?int $status)
    {
        $this->status = $status;
    }
    /**
     * @return int
     */
    public function getStatus() : ?int
    {
        return $this->status;
    }
    /**
     * @param string $scope
     */
    public function setScope(?string $scope)
    {
        $this->scope = $scope;
    }
    /**
     * @return string
     */
    public function getScope() : ?string
    {
        return $this->scope;
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
     * @Ref("BackendAppToken\GetQuery")
     */
    protected $GetQuery;
    /**
     * @Key("App_Token_Collection")
     * @Ref("BackendAppToken\App_Token_Collection")
     */
    protected $App_Token_Collection;
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
     * @param App_Token_Collection $App_Token_Collection
     */
    public function setApp_Token_Collection(?App_Token_Collection $App_Token_Collection)
    {
        $this->App_Token_Collection = $App_Token_Collection;
    }
    /**
     * @return App_Token_Collection
     */
    public function getApp_Token_Collection() : ?App_Token_Collection
    {
        return $this->App_Token_Collection;
    }
}

