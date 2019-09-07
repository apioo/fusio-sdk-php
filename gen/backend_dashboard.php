<?php

namespace BackendDashboard;

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

        $this->url = $baseUrl . '/backend/dashboard';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    public function get(): Dashboard
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Dashboard::class);
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
 * @Title("Dashboard Transaction")
 */
class Dashboard_Transaction
{
    /**
     * @Key("status")
     * @Type("string")
     */
    protected $status;
    /**
     * @Key("provider")
     * @Type("string")
     */
    protected $provider;
    /**
     * @Key("transactionId")
     * @Type("string")
     */
    protected $transactionId;
    /**
     * @Key("amount")
     * @Type("number")
     */
    protected $amount;
    /**
     * @Key("date")
     * @Type("string")
     * @Format("date-time")
     */
    protected $date;
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setProvider($provider)
    {
        $this->provider = $provider;
    }
    public function getProvider()
    {
        return $this->provider;
    }
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
    }
    public function getTransactionId()
    {
        return $this->transactionId;
    }
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
    public function getAmount()
    {
        return $this->amount;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getDate()
    {
        return $this->date;
    }
}
/**
 * @Title("Dashboard User")
 */
class Dashboard_User
{
    /**
     * @Key("status")
     * @Type("integer")
     */
    protected $status;
    /**
     * @Key("name")
     * @Type("string")
     */
    protected $name;
    /**
     * @Key("date")
     * @Type("string")
     * @Format("date-time")
     */
    protected $date;
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getDate()
    {
        return $this->date;
    }
}
/**
 * @Title("Dashboard Request")
 */
class Dashboard_Request
{
    /**
     * @Key("path")
     * @Type("string")
     */
    protected $path;
    /**
     * @Key("ip")
     * @Type("string")
     */
    protected $ip;
    /**
     * @Key("date")
     * @Type("string")
     * @Format("date-time")
     */
    protected $date;
    public function setPath($path)
    {
        $this->path = $path;
    }
    public function getPath()
    {
        return $this->path;
    }
    public function setIp($ip)
    {
        $this->ip = $ip;
    }
    public function getIp()
    {
        return $this->ip;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getDate()
    {
        return $this->date;
    }
}
/**
 * @Title("Dashboard App")
 */
class Dashboard_App
{
    /**
     * @Key("name")
     * @Type("string")
     */
    protected $name;
    /**
     * @Key("date")
     * @Type("string")
     * @Format("date-time")
     */
    protected $date;
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getDate()
    {
        return $this->date;
    }
}
/**
 * @Title("Dashboard Transactions")
 */
class Dashboard_Transactions
{
    /**
     * @Key("entry")
     * @Type("array")
     * @Items(@Ref("PSX\Generation\Dashboard_Transaction"))
     */
    protected $entry;
    public function setEntry($entry)
    {
        $this->entry = $entry;
    }
    public function getEntry()
    {
        return $this->entry;
    }
}
/**
 * @Title("Dashboard Users")
 */
class Dashboard_Users
{
    /**
     * @Key("entry")
     * @Type("array")
     * @Items(@Ref("PSX\Generation\Dashboard_User"))
     */
    protected $entry;
    public function setEntry($entry)
    {
        $this->entry = $entry;
    }
    public function getEntry()
    {
        return $this->entry;
    }
}
/**
 * @Title("Dashboard Requests")
 */
class Dashboard_Requests
{
    /**
     * @Key("entry")
     * @Type("array")
     * @Items(@Ref("PSX\Generation\Dashboard_Request"))
     */
    protected $entry;
    public function setEntry($entry)
    {
        $this->entry = $entry;
    }
    public function getEntry()
    {
        return $this->entry;
    }
}
/**
 * @Title("Dashboard Apps")
 */
class Dashboard_Apps
{
    /**
     * @Key("entry")
     * @Type("array")
     * @Items(@Ref("PSX\Generation\Dashboard_App"))
     */
    protected $entry;
    public function setEntry($entry)
    {
        $this->entry = $entry;
    }
    public function getEntry()
    {
        return $this->entry;
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
 * @Title("Dashboard")
 */
class Dashboard
{
    /**
     * @Key("errorsPerRoute")
     * @Ref("PSX\Generation\Statistic_Chart")
     */
    protected $errorsPerRoute;
    /**
     * @Key("incomingRequests")
     * @Ref("PSX\Generation\Statistic_Chart")
     */
    protected $incomingRequests;
    /**
     * @Key("incomingTransactions")
     * @Ref("PSX\Generation\Statistic_Chart")
     */
    protected $incomingTransactions;
    /**
     * @Key("mostUsedRoutes")
     * @Ref("PSX\Generation\Statistic_Chart")
     */
    protected $mostUsedRoutes;
    /**
     * @Key("timePerRoute")
     * @Ref("PSX\Generation\Statistic_Chart")
     */
    protected $timePerRoute;
    /**
     * @Key("latestApps")
     * @Ref("PSX\Generation\Dashboard_Apps")
     */
    protected $latestApps;
    /**
     * @Key("latestRequests")
     * @Ref("PSX\Generation\Dashboard_Requests")
     */
    protected $latestRequests;
    /**
     * @Key("latestUsers")
     * @Ref("PSX\Generation\Dashboard_Users")
     */
    protected $latestUsers;
    /**
     * @Key("latestTransactions")
     * @Ref("PSX\Generation\Dashboard_Transactions")
     */
    protected $latestTransactions;
    public function setErrorsPerRoute($errorsPerRoute)
    {
        $this->errorsPerRoute = $errorsPerRoute;
    }
    public function getErrorsPerRoute()
    {
        return $this->errorsPerRoute;
    }
    public function setIncomingRequests($incomingRequests)
    {
        $this->incomingRequests = $incomingRequests;
    }
    public function getIncomingRequests()
    {
        return $this->incomingRequests;
    }
    public function setIncomingTransactions($incomingTransactions)
    {
        $this->incomingTransactions = $incomingTransactions;
    }
    public function getIncomingTransactions()
    {
        return $this->incomingTransactions;
    }
    public function setMostUsedRoutes($mostUsedRoutes)
    {
        $this->mostUsedRoutes = $mostUsedRoutes;
    }
    public function getMostUsedRoutes()
    {
        return $this->mostUsedRoutes;
    }
    public function setTimePerRoute($timePerRoute)
    {
        $this->timePerRoute = $timePerRoute;
    }
    public function getTimePerRoute()
    {
        return $this->timePerRoute;
    }
    public function setLatestApps($latestApps)
    {
        $this->latestApps = $latestApps;
    }
    public function getLatestApps()
    {
        return $this->latestApps;
    }
    public function setLatestRequests($latestRequests)
    {
        $this->latestRequests = $latestRequests;
    }
    public function getLatestRequests()
    {
        return $this->latestRequests;
    }
    public function setLatestUsers($latestUsers)
    {
        $this->latestUsers = $latestUsers;
    }
    public function getLatestUsers()
    {
        return $this->latestUsers;
    }
    public function setLatestTransactions($latestTransactions)
    {
        $this->latestTransactions = $latestTransactions;
    }
    public function getLatestTransactions()
    {
        return $this->latestTransactions;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Dashboard")
     * @Ref("PSX\Generation\Dashboard")
     */
    protected $Dashboard;
    public function setDashboard($Dashboard)
    {
        $this->Dashboard = $Dashboard;
    }
    public function getDashboard()
    {
        return $this->Dashboard;
    }
}

