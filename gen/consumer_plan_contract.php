<?php

namespace ConsumerPlanContract;

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

        $this->url = $baseUrl . '/consumer/plan/contract';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Consumer_Plan_Contract_Collection
     */
    public function get(): Consumer_Plan_Contract_Collection
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Consumer_Plan_Contract_Collection::class);
    }

    /**
     * @param Consumer_Plan_Order_Request $data
     * @return Consumer_Plan_Order_Response
     */
    public function post(Consumer_Plan_Order_Request $data): Consumer_Plan_Order_Response
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
            'json' => $this->convertToArray($data)
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Consumer_Plan_Order_Response::class);
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
 * @Title("Consumer Plan Invoice")
 */
class Consumer_Plan_Invoice
{
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    /**
     * @Key("status")
     * @Type("integer")
     */
    protected $status;
    /**
     * @Key("amount")
     * @Type("number")
     */
    protected $amount;
    /**
     * @Key("points")
     * @Type("integer")
     */
    protected $points;
    /**
     * @Key("payDate")
     * @Type("string")
     * @Format("date-time")
     */
    protected $payDate;
    /**
     * @Key("insertDate")
     * @Type("string")
     * @Format("date-time")
     */
    protected $insertDate;
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
     * @param int $points
     */
    public function setPoints(?int $points)
    {
        $this->points = $points;
    }
    /**
     * @return int
     */
    public function getPoints() : ?int
    {
        return $this->points;
    }
    /**
     * @param \DateTime $payDate
     */
    public function setPayDate(?\DateTime $payDate)
    {
        $this->payDate = $payDate;
    }
    /**
     * @return \DateTime
     */
    public function getPayDate() : ?\DateTime
    {
        return $this->payDate;
    }
    /**
     * @param \DateTime $insertDate
     */
    public function setInsertDate(?\DateTime $insertDate)
    {
        $this->insertDate = $insertDate;
    }
    /**
     * @return \DateTime
     */
    public function getInsertDate() : ?\DateTime
    {
        return $this->insertDate;
    }
}
/**
 * @Title("Consumer Plan")
 */
class Consumer_Plan
{
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    /**
     * @Key("name")
     * @Type("string")
     */
    protected $name;
    /**
     * @Key("description")
     * @Type("string")
     */
    protected $description;
    /**
     * @Key("price")
     * @Type("number")
     */
    protected $price;
    /**
     * @Key("points")
     * @Type("integer")
     */
    protected $points;
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
     * @param string $description
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;
    }
    /**
     * @return string
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param float $price
     */
    public function setPrice(?float $price)
    {
        $this->price = $price;
    }
    /**
     * @return float
     */
    public function getPrice() : ?float
    {
        return $this->price;
    }
    /**
     * @param int $points
     */
    public function setPoints(?int $points)
    {
        $this->points = $points;
    }
    /**
     * @return int
     */
    public function getPoints() : ?int
    {
        return $this->points;
    }
}
/**
 * @Title("Consumer Plan Contract")
 */
class Consumer_Plan_Contract
{
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    /**
     * @Key("status")
     * @Type("integer")
     */
    protected $status;
    /**
     * @Key("plan")
     * @Ref("ConsumerPlanContract\Consumer_Plan")
     */
    protected $plan;
    /**
     * @Key("amount")
     * @Type("number")
     */
    protected $amount;
    /**
     * @Key("points")
     * @Type("integer")
     */
    protected $points;
    /**
     * @Key("period")
     * @Type("integer")
     */
    protected $period;
    /**
     * @Key("invoices")
     * @Type("array")
     * @Items(@Ref("ConsumerPlanContract\Consumer_Plan_Invoice"))
     */
    protected $invoices;
    /**
     * @Key("insertDate")
     * @Type("string")
     * @Format("date-time")
     */
    protected $insertDate;
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
     * @param Consumer_Plan $plan
     */
    public function setPlan(?Consumer_Plan $plan)
    {
        $this->plan = $plan;
    }
    /**
     * @return Consumer_Plan
     */
    public function getPlan() : ?Consumer_Plan
    {
        return $this->plan;
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
     * @param int $points
     */
    public function setPoints(?int $points)
    {
        $this->points = $points;
    }
    /**
     * @return int
     */
    public function getPoints() : ?int
    {
        return $this->points;
    }
    /**
     * @param int $period
     */
    public function setPeriod(?int $period)
    {
        $this->period = $period;
    }
    /**
     * @return int
     */
    public function getPeriod() : ?int
    {
        return $this->period;
    }
    /**
     * @param array<Consumer_Plan_Invoice> $invoices
     */
    public function setInvoices(?array $invoices)
    {
        $this->invoices = $invoices;
    }
    /**
     * @return array<Consumer_Plan_Invoice>
     */
    public function getInvoices() : ?array
    {
        return $this->invoices;
    }
    /**
     * @param \DateTime $insertDate
     */
    public function setInsertDate(?\DateTime $insertDate)
    {
        $this->insertDate = $insertDate;
    }
    /**
     * @return \DateTime
     */
    public function getInsertDate() : ?\DateTime
    {
        return $this->insertDate;
    }
}
/**
 * @Title("Consumer Plan Order Response")
 */
class Consumer_Plan_Order_Response
{
    /**
     * @Key("contractId")
     * @Type("integer")
     */
    protected $contractId;
    /**
     * @Key("invoiceId")
     * @Type("integer")
     */
    protected $invoiceId;
    /**
     * @param int $contractId
     */
    public function setContractId(?int $contractId)
    {
        $this->contractId = $contractId;
    }
    /**
     * @return int
     */
    public function getContractId() : ?int
    {
        return $this->contractId;
    }
    /**
     * @param int $invoiceId
     */
    public function setInvoiceId(?int $invoiceId)
    {
        $this->invoiceId = $invoiceId;
    }
    /**
     * @return int
     */
    public function getInvoiceId() : ?int
    {
        return $this->invoiceId;
    }
}
/**
 * @Title("Consumer Plan Order Request")
 * @Required({"planId"})
 */
class Consumer_Plan_Order_Request
{
    /**
     * @Key("planId")
     * @Type("integer")
     */
    protected $planId;
    /**
     * @param int $planId
     */
    public function setPlanId(?int $planId)
    {
        $this->planId = $planId;
    }
    /**
     * @return int
     */
    public function getPlanId() : ?int
    {
        return $this->planId;
    }
}
/**
 * @Title("Consumer Plan Contract Collection")
 */
class Consumer_Plan_Contract_Collection
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
     * @Items(@Ref("ConsumerPlanContract\Consumer_Plan_Contract"))
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
     * @param array<Consumer_Plan_Contract> $entry
     */
    public function setEntry(?array $entry)
    {
        $this->entry = $entry;
    }
    /**
     * @return array<Consumer_Plan_Contract>
     */
    public function getEntry() : ?array
    {
        return $this->entry;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Consumer_Plan_Contract_Collection")
     * @Ref("ConsumerPlanContract\Consumer_Plan_Contract_Collection")
     */
    protected $Consumer_Plan_Contract_Collection;
    /**
     * @Key("Consumer_Plan_Order_Request")
     * @Ref("ConsumerPlanContract\Consumer_Plan_Order_Request")
     */
    protected $Consumer_Plan_Order_Request;
    /**
     * @Key("Consumer_Plan_Order_Response")
     * @Ref("ConsumerPlanContract\Consumer_Plan_Order_Response")
     */
    protected $Consumer_Plan_Order_Response;
    /**
     * @param Consumer_Plan_Contract_Collection $Consumer_Plan_Contract_Collection
     */
    public function setConsumer_Plan_Contract_Collection(?Consumer_Plan_Contract_Collection $Consumer_Plan_Contract_Collection)
    {
        $this->Consumer_Plan_Contract_Collection = $Consumer_Plan_Contract_Collection;
    }
    /**
     * @return Consumer_Plan_Contract_Collection
     */
    public function getConsumer_Plan_Contract_Collection() : ?Consumer_Plan_Contract_Collection
    {
        return $this->Consumer_Plan_Contract_Collection;
    }
    /**
     * @param Consumer_Plan_Order_Request $Consumer_Plan_Order_Request
     */
    public function setConsumer_Plan_Order_Request(?Consumer_Plan_Order_Request $Consumer_Plan_Order_Request)
    {
        $this->Consumer_Plan_Order_Request = $Consumer_Plan_Order_Request;
    }
    /**
     * @return Consumer_Plan_Order_Request
     */
    public function getConsumer_Plan_Order_Request() : ?Consumer_Plan_Order_Request
    {
        return $this->Consumer_Plan_Order_Request;
    }
    /**
     * @param Consumer_Plan_Order_Response $Consumer_Plan_Order_Response
     */
    public function setConsumer_Plan_Order_Response(?Consumer_Plan_Order_Response $Consumer_Plan_Order_Response)
    {
        $this->Consumer_Plan_Order_Response = $Consumer_Plan_Order_Response;
    }
    /**
     * @return Consumer_Plan_Order_Response
     */
    public function getConsumer_Plan_Order_Response() : ?Consumer_Plan_Order_Response
    {
        return $this->Consumer_Plan_Order_Response;
    }
}

