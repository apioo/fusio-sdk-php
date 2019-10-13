<?php

namespace BackendStatisticMost_used_apps;

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

        $this->url = $baseUrl . '/backend/statistic/most_used_apps';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @param GetQuery $query
     * @return Statistic_Chart
     */
    public function get(GetQuery $query): Statistic_Chart
    {
        $options = [
            'query' => $this->convertToArray($query),
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Statistic_Chart::class);
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
 * @Title("Statistic Chart")
 */
class Statistic_Chart
{
    /**
     * @Key("labels")
     * @Type("array")
     * @Items(@Schema(type="string"))
     */
    protected $labels;
    /**
     * @Key("data")
     * @Type("array")
     * @Items(@Schema(type="array", items=@Schema(type="number")))
     */
    protected $data;
    /**
     * @Key("series")
     * @Type("array")
     * @Items(@Schema(type="string"))
     */
    protected $series;
    public function setLabels(?array $labels)
    {
        $this->labels = $labels;
    }
    public function getLabels() : ?array
    {
        return $this->labels;
    }
    public function setData(?array $data)
    {
        $this->data = $data;
    }
    public function getData() : ?array
    {
        return $this->data;
    }
    public function setSeries(?array $series)
    {
        $this->series = $series;
    }
    public function getSeries() : ?array
    {
        return $this->series;
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
    public function setFrom(?\DateTime $from)
    {
        $this->from = $from;
    }
    public function getFrom() : ?\DateTime
    {
        return $this->from;
    }
    public function setTo(?\DateTime $to)
    {
        $this->to = $to;
    }
    public function getTo() : ?\DateTime
    {
        return $this->to;
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
    public function setUserId(?int $userId)
    {
        $this->userId = $userId;
    }
    public function getUserId() : ?int
    {
        return $this->userId;
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
     * @Key("Statistic_Chart")
     * @Ref("PSX\Generation\Statistic_Chart")
     */
    protected $Statistic_Chart;
    public function setGetQuery(?GetQuery $GetQuery)
    {
        $this->GetQuery = $GetQuery;
    }
    public function getGetQuery() : ?GetQuery
    {
        return $this->GetQuery;
    }
    public function setStatistic_Chart(?Statistic_Chart $Statistic_Chart)
    {
        $this->Statistic_Chart = $Statistic_Chart;
    }
    public function getStatistic_Chart() : ?Statistic_Chart
    {
        return $this->Statistic_Chart;
    }
}

