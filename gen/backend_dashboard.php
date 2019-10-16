<?php

namespace BackendDashboard;

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
    /**
     * @param string $status
     */
    public function setStatus(?string $status)
    {
        $this->status = $status;
    }
    /**
     * @return string
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * @param string $provider
     */
    public function setProvider(?string $provider)
    {
        $this->provider = $provider;
    }
    /**
     * @return string
     */
    public function getProvider() : ?string
    {
        return $this->provider;
    }
    /**
     * @param string $transactionId
     */
    public function setTransactionId(?string $transactionId)
    {
        $this->transactionId = $transactionId;
    }
    /**
     * @return string
     */
    public function getTransactionId() : ?string
    {
        return $this->transactionId;
    }
    /**
     * @param float $amount
     */
    public function setAmount(?float $amount)
    {
        $this->amount = $amount;
    }
    /**
     * @return float
     */
    public function getAmount() : ?float
    {
        return $this->amount;
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
 * @Title("Dashboard Transactions")
 */
class Dashboard_Transactions
{
    /**
     * @Key("entry")
     * @Type("array")
     * @Items(@Ref("BackendDashboard\Dashboard_Transaction"))
     */
    protected $entry;
    /**
     * @param array<Dashboard_Transaction> $entry
     */
    public function setEntry(?array $entry)
    {
        $this->entry = $entry;
    }
    /**
     * @return array<Dashboard_Transaction>
     */
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
     * @Items(@Ref("BackendDashboard\Dashboard_User"))
     */
    protected $entry;
    /**
     * @param array<Dashboard_User> $entry
     */
    public function setEntry(?array $entry)
    {
        $this->entry = $entry;
    }
    /**
     * @return array<Dashboard_User>
     */
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
     * @Items(@Ref("BackendDashboard\Dashboard_Request"))
     */
    protected $entry;
    /**
     * @param array<Dashboard_Request> $entry
     */
    public function setEntry(?array $entry)
    {
        $this->entry = $entry;
    }
    /**
     * @return array<Dashboard_Request>
     */
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
     * @Items(@Ref("BackendDashboard\Dashboard_App"))
     */
    protected $entry;
    /**
     * @param array<Dashboard_App> $entry
     */
    public function setEntry(?array $entry)
    {
        $this->entry = $entry;
    }
    /**
     * @return array<Dashboard_App>
     */
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
 * @Title("Dashboard")
 */
class Dashboard
{
    /**
     * @Key("errorsPerRoute")
     * @Ref("BackendDashboard\Statistic_Chart")
     */
    protected $errorsPerRoute;
    /**
     * @Key("incomingRequests")
     * @Ref("BackendDashboard\Statistic_Chart")
     */
    protected $incomingRequests;
    /**
     * @Key("incomingTransactions")
     * @Ref("BackendDashboard\Statistic_Chart")
     */
    protected $incomingTransactions;
    /**
     * @Key("mostUsedRoutes")
     * @Ref("BackendDashboard\Statistic_Chart")
     */
    protected $mostUsedRoutes;
    /**
     * @Key("timePerRoute")
     * @Ref("BackendDashboard\Statistic_Chart")
     */
    protected $timePerRoute;
    /**
     * @Key("latestApps")
     * @Ref("BackendDashboard\Dashboard_Apps")
     */
    protected $latestApps;
    /**
     * @Key("latestRequests")
     * @Ref("BackendDashboard\Dashboard_Requests")
     */
    protected $latestRequests;
    /**
     * @Key("latestUsers")
     * @Ref("BackendDashboard\Dashboard_Users")
     */
    protected $latestUsers;
    /**
     * @Key("latestTransactions")
     * @Ref("BackendDashboard\Dashboard_Transactions")
     */
    protected $latestTransactions;
    /**
     * @param Statistic_Chart $errorsPerRoute
     */
    public function setErrorsPerRoute(?Statistic_Chart $errorsPerRoute)
    {
        $this->errorsPerRoute = $errorsPerRoute;
    }
    /**
     * @return Statistic_Chart
     */
    public function getErrorsPerRoute() : ?Statistic_Chart
    {
        return $this->errorsPerRoute;
    }
    /**
     * @param Statistic_Chart $incomingRequests
     */
    public function setIncomingRequests(?Statistic_Chart $incomingRequests)
    {
        $this->incomingRequests = $incomingRequests;
    }
    /**
     * @return Statistic_Chart
     */
    public function getIncomingRequests() : ?Statistic_Chart
    {
        return $this->incomingRequests;
    }
    /**
     * @param Statistic_Chart $incomingTransactions
     */
    public function setIncomingTransactions(?Statistic_Chart $incomingTransactions)
    {
        $this->incomingTransactions = $incomingTransactions;
    }
    /**
     * @return Statistic_Chart
     */
    public function getIncomingTransactions() : ?Statistic_Chart
    {
        return $this->incomingTransactions;
    }
    /**
     * @param Statistic_Chart $mostUsedRoutes
     */
    public function setMostUsedRoutes(?Statistic_Chart $mostUsedRoutes)
    {
        $this->mostUsedRoutes = $mostUsedRoutes;
    }
    /**
     * @return Statistic_Chart
     */
    public function getMostUsedRoutes() : ?Statistic_Chart
    {
        return $this->mostUsedRoutes;
    }
    /**
     * @param Statistic_Chart $timePerRoute
     */
    public function setTimePerRoute(?Statistic_Chart $timePerRoute)
    {
        $this->timePerRoute = $timePerRoute;
    }
    /**
     * @return Statistic_Chart
     */
    public function getTimePerRoute() : ?Statistic_Chart
    {
        return $this->timePerRoute;
    }
    /**
     * @param Dashboard_Apps $latestApps
     */
    public function setLatestApps(?Dashboard_Apps $latestApps)
    {
        $this->latestApps = $latestApps;
    }
    /**
     * @return Dashboard_Apps
     */
    public function getLatestApps() : ?Dashboard_Apps
    {
        return $this->latestApps;
    }
    /**
     * @param Dashboard_Requests $latestRequests
     */
    public function setLatestRequests(?Dashboard_Requests $latestRequests)
    {
        $this->latestRequests = $latestRequests;
    }
    /**
     * @return Dashboard_Requests
     */
    public function getLatestRequests() : ?Dashboard_Requests
    {
        return $this->latestRequests;
    }
    /**
     * @param Dashboard_Users $latestUsers
     */
    public function setLatestUsers(?Dashboard_Users $latestUsers)
    {
        $this->latestUsers = $latestUsers;
    }
    /**
     * @return Dashboard_Users
     */
    public function getLatestUsers() : ?Dashboard_Users
    {
        return $this->latestUsers;
    }
    /**
     * @param Dashboard_Transactions $latestTransactions
     */
    public function setLatestTransactions(?Dashboard_Transactions $latestTransactions)
    {
        $this->latestTransactions = $latestTransactions;
    }
    /**
     * @return Dashboard_Transactions
     */
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
     * @Ref("BackendDashboard\Dashboard")
     */
    protected $Dashboard;
    /**
     * @param Dashboard $Dashboard
     */
    public function setDashboard(?Dashboard $Dashboard)
    {
        $this->Dashboard = $Dashboard;
    }
    /**
     * @return Dashboard
     */
    public function getDashboard() : ?Dashboard
    {
        return $this->Dashboard;
    }
}

