<?php

namespace ConsumerTransaction;

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

        $this->url = $baseUrl . '/consumer/transaction';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    public function get(): Consumer_Transaction_Collection
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Consumer_Transaction_Collection::class);
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
 * @Title("Consumer Transaction")
 */
class Consumer_Transaction
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
     * @Key("updateDate")
     * @Type("string")
     * @Format("date-time")
     */
    protected $updateDate;
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
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;
    }
    public function getUpdateDate()
    {
        return $this->updateDate;
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
 * @Title("Consumer Transaction Collection")
 */
class Consumer_Transaction_Collection
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
     * @Items(@Ref("PSX\Generation\Consumer_Transaction"))
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
     * @Key("Consumer_Transaction_Collection")
     * @Ref("PSX\Generation\Consumer_Transaction_Collection")
     */
    protected $Consumer_Transaction_Collection;
    public function setConsumer_Transaction_Collection($Consumer_Transaction_Collection)
    {
        $this->Consumer_Transaction_Collection = $Consumer_Transaction_Collection;
    }
    public function getConsumer_Transaction_Collection()
    {
        return $this->Consumer_Transaction_Collection;
    }
}

