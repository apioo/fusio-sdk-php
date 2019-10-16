<?php

namespace ConsumerPlanInvoice;

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

        $this->url = $baseUrl . '/consumer/plan/invoice';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Consumer_Plan_Invoice_Collection
     */
    public function get(): Consumer_Plan_Invoice_Collection
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Consumer_Plan_Invoice_Collection::class);
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
 * @Title("Consumer Plan Invoice Collection")
 */
class Consumer_Plan_Invoice_Collection
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
     * @Items(@Ref("ConsumerPlanInvoice\Consumer_Plan_Invoice"))
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
     * @param array<Consumer_Plan_Invoice> $entry
     */
    public function setEntry(?array $entry)
    {
        $this->entry = $entry;
    }
    /**
     * @return array<Consumer_Plan_Invoice>
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
     * @Key("Consumer_Plan_Invoice_Collection")
     * @Ref("ConsumerPlanInvoice\Consumer_Plan_Invoice_Collection")
     */
    protected $Consumer_Plan_Invoice_Collection;
    /**
     * @param Consumer_Plan_Invoice_Collection $Consumer_Plan_Invoice_Collection
     */
    public function setConsumer_Plan_Invoice_Collection(?Consumer_Plan_Invoice_Collection $Consumer_Plan_Invoice_Collection)
    {
        $this->Consumer_Plan_Invoice_Collection = $Consumer_Plan_Invoice_Collection;
    }
    /**
     * @return Consumer_Plan_Invoice_Collection
     */
    public function getConsumer_Plan_Invoice_Collection() : ?Consumer_Plan_Invoice_Collection
    {
        return $this->Consumer_Plan_Invoice_Collection;
    }
}

