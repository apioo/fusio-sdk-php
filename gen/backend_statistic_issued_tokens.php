<?php

namespace BackendStatisticIssued_tokens;

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

        $this->url = $baseUrl . '/backend/statistic/issued_tokens';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

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
    public function setLabels($labels)
    {
        $this->labels = $labels;
    }
    public function getLabels()
    {
        return $this->labels;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
    }
    public function setSeries($series)
    {
        $this->series = $series;
    }
    public function getSeries()
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
    public function setFrom($from)
    {
        $this->from = $from;
    }
    public function getFrom()
    {
        return $this->from;
    }
    public function setTo($to)
    {
        $this->to = $to;
    }
    public function getTo()
    {
        return $this->to;
    }
    public function setAppId($appId)
    {
        $this->appId = $appId;
    }
    public function getAppId()
    {
        return $this->appId;
    }
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
    public function getUserId()
    {
        return $this->userId;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setScope($scope)
    {
        $this->scope = $scope;
    }
    public function getScope()
    {
        return $this->scope;
    }
    public function setIp($ip)
    {
        $this->ip = $ip;
    }
    public function getIp()
    {
        return $this->ip;
    }
    public function setSearch($search)
    {
        $this->search = $search;
    }
    public function getSearch()
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
    public function setGetQuery($GetQuery)
    {
        $this->GetQuery = $GetQuery;
    }
    public function getGetQuery()
    {
        return $this->GetQuery;
    }
    public function setStatistic_Chart($Statistic_Chart)
    {
        $this->Statistic_Chart = $Statistic_Chart;
    }
    public function getStatistic_Chart()
    {
        return $this->Statistic_Chart;
    }
}

