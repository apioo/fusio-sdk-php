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

    /**
     * @return Dashboard
     */
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
    public function setStatus(?string $status)
    {
        $this->status = $status;
    }
    public function getStatus() : ?string
    {
        return $this->status;
    }
    public function setProvider(?string $provider)
    {
        $this->provider = $provider;
    }
    public function getProvider() : ?string
    {
        return $this->provider;
    }
    public function setTransactionId(?string $transactionId)
    {
        $this->transactionId = $transactionId;
    }
    public function getTransactionId() : ?string
    {
        return $this->transactionId;
    }
    public function setAmount(?float $amount)
    {
        $this->amount = $amount;
    }
    public function getAmount() : ?float
    {
        return $this->amount;
    }
    public function setDate(?\DateTime $date)
    {
        $this->date = $date;
    }
    public function getDate() : ?\DateTime
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
    public function setStatus(?int $status)
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setName(?string $name)
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setDate(?\DateTime $date)
    {
        $this->date = $date;
    }
    public function getDate() : ?\DateTime
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
    public function setPath(?string $path)
    {
        $this->path = $path;
    }
    public function getPath() : ?string
    {
        return $this->path;
    }
    public function setIp(?string $ip)
    {
        $this->ip = $ip;
    }
    public function getIp() : ?string
    {
        return $this->ip;
    }
    public function setDate(?\DateTime $date)
    {
        $this->date = $date;
    }
    public function getDate() : ?\DateTime
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
    public function setName(?string $name)
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setDate(?\DateTime $date)
    {
        $this->date = $date;
    }
    public function getDate() : ?\DateTime
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
    public function setErrorsPerRoute(?Statistic_Chart $errorsPerRoute)
    {
        $this->errorsPerRoute = $errorsPerRoute;
    }
    public function getErrorsPerRoute() : ?Statistic_Chart
    {
        return $this->errorsPerRoute;
    }
    public function setIncomingRequests(?Statistic_Chart $incomingRequests)
    {
        $this->incomingRequests = $incomingRequests;
    }
    public function getIncomingRequests() : ?Statistic_Chart
    {
        return $this->incomingRequests;
    }
    public function setIncomingTransactions(?Statistic_Chart $incomingTransactions)
    {
        $this->incomingTransactions = $incomingTransactions;
    }
    public function getIncomingTransactions() : ?Statistic_Chart
    {
        return $this->incomingTransactions;
    }
    public function setMostUsedRoutes(?Statistic_Chart $mostUsedRoutes)
    {
        $this->mostUsedRoutes = $mostUsedRoutes;
    }
    public function getMostUsedRoutes() : ?Statistic_Chart
    {
        return $this->mostUsedRoutes;
    }
    public function setTimePerRoute(?Statistic_Chart $timePerRoute)
    {
        $this->timePerRoute = $timePerRoute;
    }
    public function getTimePerRoute() : ?Statistic_Chart
    {
        return $this->timePerRoute;
    }
    public function setLatestApps(?Dashboard_Apps $latestApps)
    {
        $this->latestApps = $latestApps;
    }
    public function getLatestApps() : ?Dashboard_Apps
    {
        return $this->latestApps;
    }
    public function setLatestRequests(?Dashboard_Requests $latestRequests)
    {
        $this->latestRequests = $latestRequests;
    }
    public function getLatestRequests() : ?Dashboard_Requests
    {
        return $this->latestRequests;
    }
    public function setLatestUsers(?Dashboard_Users $latestUsers)
    {
        $this->latestUsers = $latestUsers;
    }
    public function getLatestUsers() : ?Dashboard_Users
    {
        return $this->latestUsers;
    }
    public function setLatestTransactions(?Dashboard_Transactions $latestTransactions)
    {
        $this->latestTransactions = $latestTransactions;
    }
    public function getLatestTransactions() : ?Dashboard_Transactions
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
    public function setDashboard(?Dashboard $Dashboard)
    {
        $this->Dashboard = $Dashboard;
    }
    public function getDashboard() : ?Dashboard
    {
        return $this->Dashboard;
    }
}

