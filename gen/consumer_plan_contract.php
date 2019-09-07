<?php

namespace ConsumerPlanContract;

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

        $this->url = $baseUrl . '/consumer/plan/contract';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

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
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
    public function getAmount()
    {
        return $this->amount;
    }
    public function setPoints($points)
    {
        $this->points = $points;
    }
    public function getPoints()
    {
        return $this->points;
    }
    public function setPayDate($payDate)
    {
        $this->payDate = $payDate;
    }
    public function getPayDate()
    {
        return $this->payDate;
    }
    public function setInsertDate($insertDate)
    {
        $this->insertDate = $insertDate;
    }
    public function getInsertDate()
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
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPoints($points)
    {
        $this->points = $points;
    }
    public function getPoints()
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
     * @Ref("PSX\Generation\Consumer_Plan")
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
     * @Items(@Ref("PSX\Generation\Consumer_Plan_Invoice"))
     */
    protected $invoices;
    /**
     * @Key("insertDate")
     * @Type("string")
     * @Format("date-time")
     */
    protected $insertDate;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setPlan($plan)
    {
        $this->plan = $plan;
    }
    public function getPlan()
    {
        return $this->plan;
    }
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
    public function getAmount()
    {
        return $this->amount;
    }
    public function setPoints($points)
    {
        $this->points = $points;
    }
    public function getPoints()
    {
        return $this->points;
    }
    public function setPeriod($period)
    {
        $this->period = $period;
    }
    public function getPeriod()
    {
        return $this->period;
    }
    public function setInvoices($invoices)
    {
        $this->invoices = $invoices;
    }
    public function getInvoices()
    {
        return $this->invoices;
    }
    public function setInsertDate($insertDate)
    {
        $this->insertDate = $insertDate;
    }
    public function getInsertDate()
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
    public function setContractId($contractId)
    {
        $this->contractId = $contractId;
    }
    public function getContractId()
    {
        return $this->contractId;
    }
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;
    }
    public function getInvoiceId()
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
    public function setPlanId($planId)
    {
        $this->planId = $planId;
    }
    public function getPlanId()
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
     * @Items(@Ref("PSX\Generation\Consumer_Plan_Contract"))
     */
    protected $entry;
    public function setTotalResults($totalResults)
    {
        $this->totalResults = $totalResults;
    }
    public function getTotalResults()
    {
        return $this->totalResults;
    }
    public function setStartIndex($startIndex)
    {
        $this->startIndex = $startIndex;
    }
    public function getStartIndex()
    {
        return $this->startIndex;
    }
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
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Consumer_Plan_Contract_Collection")
     * @Ref("PSX\Generation\Consumer_Plan_Contract_Collection")
     */
    protected $Consumer_Plan_Contract_Collection;
    /**
     * @Key("Consumer_Plan_Order_Request")
     * @Ref("PSX\Generation\Consumer_Plan_Order_Request")
     */
    protected $Consumer_Plan_Order_Request;
    /**
     * @Key("Consumer_Plan_Order_Response")
     * @Ref("PSX\Generation\Consumer_Plan_Order_Response")
     */
    protected $Consumer_Plan_Order_Response;
    public function setConsumer_Plan_Contract_Collection($Consumer_Plan_Contract_Collection)
    {
        $this->Consumer_Plan_Contract_Collection = $Consumer_Plan_Contract_Collection;
    }
    public function getConsumer_Plan_Contract_Collection()
    {
        return $this->Consumer_Plan_Contract_Collection;
    }
    public function setConsumer_Plan_Order_Request($Consumer_Plan_Order_Request)
    {
        $this->Consumer_Plan_Order_Request = $Consumer_Plan_Order_Request;
    }
    public function getConsumer_Plan_Order_Request()
    {
        return $this->Consumer_Plan_Order_Request;
    }
    public function setConsumer_Plan_Order_Response($Consumer_Plan_Order_Response)
    {
        $this->Consumer_Plan_Order_Response = $Consumer_Plan_Order_Response;
    }
    public function getConsumer_Plan_Order_Response()
    {
        return $this->Consumer_Plan_Order_Response;
    }
}

