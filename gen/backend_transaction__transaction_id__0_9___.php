<?php

namespace BackendTransactionTransaction_id09;

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
    private $transaction_id;

    public function __construct(int $transaction_id, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        $this->transaction_id = $transaction_id;

        $this->url = $baseUrl . '/backend/transaction/' . $transaction_id . '';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Transaction
     */
    public function get(): Transaction
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Transaction::class);
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
 * @Title("Transaction")
 */
class Transaction
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
     * @param \DateTime $updateDate
     */
    public function setUpdateDate(?\DateTime $updateDate)
    {
        $this->updateDate = $updateDate;
    }
    /**
     * @return \DateTime
     */
    public function getUpdateDate() : ?\DateTime
    {
        return $this->updateDate;
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
     * @Key("Transaction")
     * @Ref("BackendTransactionTransaction_id09\Transaction")
     */
    protected $Transaction;
    /**
     * @param Transaction $Transaction
     */
    public function setTransaction(?Transaction $Transaction)
    {
        $this->Transaction = $Transaction;
    }
    /**
     * @return Transaction
     */
    public function getTransaction() : ?Transaction
    {
        return $this->Transaction;
    }
}

