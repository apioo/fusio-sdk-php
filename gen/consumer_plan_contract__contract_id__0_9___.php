<?php

namespace ConsumerPlanContractContract_id09;

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

    /**
     * @var int
     */
    private $contract_id;

    public function __construct(int $contract_id, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        $this->contract_id = $contract_id;

        $this->url = $baseUrl . '/consumer/plan/contract/' . $contract_id . '';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Consumer_Plan_Contract
     */
    public function get(): Consumer_Plan_Contract
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Consumer_Plan_Contract::class);
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
     * @Ref("ConsumerPlanContractContract_id09\Consumer_Plan")
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
     * @Items(@Ref("ConsumerPlanContractContract_id09\Consumer_Plan_Invoice"))
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
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Consumer_Plan_Contract")
     * @Ref("ConsumerPlanContractContract_id09\Consumer_Plan_Contract")
     */
    protected $Consumer_Plan_Contract;
    /**
     * @param Consumer_Plan_Contract $Consumer_Plan_Contract
     */
    public function setConsumer_Plan_Contract(?Consumer_Plan_Contract $Consumer_Plan_Contract)
    {
        $this->Consumer_Plan_Contract = $Consumer_Plan_Contract;
    }
    /**
     * @return Consumer_Plan_Contract
     */
    public function getConsumer_Plan_Contract() : ?Consumer_Plan_Contract
    {
        return $this->Consumer_Plan_Contract;
    }
}

