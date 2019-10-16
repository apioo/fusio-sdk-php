<?php

namespace BackendStatisticCount_requests;

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

        $this->url = $baseUrl . '/backend/statistic/count_requests';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @param GetQuery $query
     * @return Statistic_Count
     */
    public function get(GetQuery $query): Statistic_Count
    {
        $options = [
            'query' => $this->convertToArray($query),
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Statistic_Count::class);
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
 * @Title("Statistic Count")
 */
class Statistic_Count
{
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
}
/**
 * @Title("GetQuery")
 */
class GetQuery
{
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
     * @Key("userId")
     * @Type("integer")
     */
    protected $userId;
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
     * @Key("search")
     * @Type("string")
     */
    protected $search;
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
     * @param int $routeId
     */
    public function setRouteId(?int $routeId)
    {
        $this->routeId = $routeId;
    }
    /**
     * @return int
     */
    public function getRouteId() : ?int
    {
        return $this->routeId;
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
     * @Ref("BackendStatisticCount_requests\GetQuery")
     */
    protected $GetQuery;
    /**
     * @Key("Statistic_Count")
     * @Ref("BackendStatisticCount_requests\Statistic_Count")
     */
    protected $Statistic_Count;
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
     * @param Statistic_Count $Statistic_Count
     */
    public function setStatistic_Count(?Statistic_Count $Statistic_Count)
    {
        $this->Statistic_Count = $Statistic_Count;
    }
    /**
     * @return Statistic_Count
     */
    public function getStatistic_Count() : ?Statistic_Count
    {
        return $this->Statistic_Count;
    }
}

