<?php

namespace BackendStatisticMost_used_routes;

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

        $this->url = $baseUrl . '/backend/statistic/most_used_routes';
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
    /**
     * @param array<string> $labels
     */
    public function setLabels(?array $labels)
    {
        $this->labels = $labels;
    }
    /**
     * @return array<string>
     */
    public function getLabels() : ?array
    {
        return $this->labels;
    }
    /**
     * @param array<array<float>> $data
     */
    public function setData(?array $data)
    {
        $this->data = $data;
    }
    /**
     * @return array<array<float>>
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * @param array<string> $series
     */
    public function setSeries(?array $series)
    {
        $this->series = $series;
    }
    /**
     * @return array<string>
     */
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
     * @Ref("BackendStatisticMost_used_routes\GetQuery")
     */
    protected $GetQuery;
    /**
     * @Key("Statistic_Chart")
     * @Ref("BackendStatisticMost_used_routes\Statistic_Chart")
     */
    protected $Statistic_Chart;
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
     * @param Statistic_Chart $Statistic_Chart
     */
    public function setStatistic_Chart(?Statistic_Chart $Statistic_Chart)
    {
        $this->Statistic_Chart = $Statistic_Chart;
    }
    /**
     * @return Statistic_Chart
     */
    public function getStatistic_Chart() : ?Statistic_Chart
    {
        return $this->Statistic_Chart;
    }
}

