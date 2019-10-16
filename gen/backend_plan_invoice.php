<?php

namespace BackendPlanInvoice;

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

        $this->url = $baseUrl . '/backend/plan/invoice';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @param GetQuery $query
     * @return Plan_Invoice_Collection
     */
    public function get(GetQuery $query): Plan_Invoice_Collection
    {
        $options = [
            'query' => $this->convertToArray($query),
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Plan_Invoice_Collection::class);
    }

    /**
     * @param Plan_Invoice_Create $data
     * @return Message
     */
    public function post(Plan_Invoice_Create $data): Message
    {
        $options = [
            'json' => $this->convertToArray($data)
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Message::class);
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
 * @Title("Plan User")
 */
class Plan_User
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
}
/**
 * @Title("Plan Invoice")
 */
class Plan_Invoice
{
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    /**
     * @Key("contractId")
     * @Type("integer")
     */
    protected $contractId;
    /**
     * @Key("user")
     * @Ref("BackendPlanInvoice\Plan_User")
     */
    protected $user;
    /**
     * @Key("transactionId")
     * @Type("integer")
     */
    protected $transactionId;
    /**
     * @Key("prevId")
     * @Type("integer")
     */
    protected $prevId;
    /**
     * @Key("displayId")
     * @Type("string")
     */
    protected $displayId;
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
     * @Key("fromDate")
     * @Type("string")
     * @Format("date")
     */
    protected $fromDate;
    /**
     * @Key("toDate")
     * @Type("string")
     * @Format("date")
     */
    protected $toDate;
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
     * @param Plan_User $user
     */
    public function setUser(?Plan_User $user)
    {
        $this->user = $user;
    }
    /**
     * @return Plan_User
     */
    public function getUser() : ?Plan_User
    {
        return $this->user;
    }
    /**
     * @param int $transactionId
     */
    public function setTransactionId(?int $transactionId)
    {
        $this->transactionId = $transactionId;
    }
    /**
     * @return int
     */
    public function getTransactionId() : ?int
    {
        return $this->transactionId;
    }
    /**
     * @param int $prevId
     */
    public function setPrevId(?int $prevId)
    {
        $this->prevId = $prevId;
    }
    /**
     * @return int
     */
    public function getPrevId() : ?int
    {
        return $this->prevId;
    }
    /**
     * @param string $displayId
     */
    public function setDisplayId(?string $displayId)
    {
        $this->displayId = $displayId;
    }
    /**
     * @return string
     */
    public function getDisplayId() : ?string
    {
        return $this->displayId;
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
     * @param \DateTime $fromDate
     */
    public function setFromDate(?\DateTime $fromDate)
    {
        $this->fromDate = $fromDate;
    }
    /**
     * @return \DateTime
     */
    public function getFromDate() : ?\DateTime
    {
        return $this->fromDate;
    }
    /**
     * @param \DateTime $toDate
     */
    public function setToDate(?\DateTime $toDate)
    {
        $this->toDate = $toDate;
    }
    /**
     * @return \DateTime
     */
    public function getToDate() : ?\DateTime
    {
        return $this->toDate;
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
 * @Title("Message")
 */
class Message
{
    /**
     * @Key("success")
     * @Type("boolean")
     */
    protected $success;
    /**
     * @Key("message")
     * @Type("string")
     */
    protected $message;
    /**
     * @param bool $success
     */
    public function setSuccess(?bool $success)
    {
        $this->success = $success;
    }
    /**
     * @return bool
     */
    public function getSuccess() : ?bool
    {
        return $this->success;
    }
    /**
     * @param string $message
     */
    public function setMessage(?string $message)
    {
        $this->message = $message;
    }
    /**
     * @return string
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
}
/**
 * @Title("Plan Invoice Create")
 * @Required({"contractId", "startDate"})
 */
class Plan_Invoice_Create
{
    /**
     * @Key("contractId")
     * @Type("integer")
     */
    protected $contractId;
    /**
     * @Key("startDate")
     * @Type("string")
     * @Format("date-time")
     */
    protected $startDate;
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
     * @param \DateTime $startDate
     */
    public function setStartDate(?\DateTime $startDate)
    {
        $this->startDate = $startDate;
    }
    /**
     * @return \DateTime
     */
    public function getStartDate() : ?\DateTime
    {
        return $this->startDate;
    }
}
/**
 * @Title("Plan Invoice Collection")
 */
class Plan_Invoice_Collection
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
     * @Items(@Ref("BackendPlanInvoice\Plan_Invoice"))
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
     * @param array<Plan_Invoice> $entry
     */
    public function setEntry(?array $entry)
    {
        $this->entry = $entry;
    }
    /**
     * @return array<Plan_Invoice>
     */
    public function getEntry() : ?array
    {
        return $this->entry;
    }
}
/**
 * @Title("GetQuery")
 */
class GetQuery
{
    /**
     * @Key("startIndex")
     * @Type("integer")
     */
    protected $startIndex;
    /**
     * @Key("count")
     * @Type("integer")
     */
    protected $count;
    /**
     * @Key("search")
     * @Type("string")
     */
    protected $search;
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
     * @param int $count
     */
    public function setCount(?int $count)
    {
        $this->count = $count;
    }
    /**
     * @return int
     */
    public function getCount() : ?int
    {
        return $this->count;
    }
    /**
     * @param string $search
     */
    public function setSearch(?string $search)
    {
        $this->search = $search;
    }
    /**
     * @return string
     */
    public function getSearch() : ?string
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
     * @Ref("BackendPlanInvoice\GetQuery")
     */
    protected $GetQuery;
    /**
     * @Key("Plan_Invoice_Collection")
     * @Ref("BackendPlanInvoice\Plan_Invoice_Collection")
     */
    protected $Plan_Invoice_Collection;
    /**
     * @Key("Plan_Invoice_Create")
     * @Ref("BackendPlanInvoice\Plan_Invoice_Create")
     */
    protected $Plan_Invoice_Create;
    /**
     * @Key("Message")
     * @Ref("BackendPlanInvoice\Message")
     */
    protected $Message;
    /**
     * @param GetQuery $GetQuery
     */
    public function setGetQuery(?GetQuery $GetQuery)
    {
        $this->GetQuery = $GetQuery;
    }
    /**
     * @return GetQuery
     */
    public function getGetQuery() : ?GetQuery
    {
        return $this->GetQuery;
    }
    /**
     * @param Plan_Invoice_Collection $Plan_Invoice_Collection
     */
    public function setPlan_Invoice_Collection(?Plan_Invoice_Collection $Plan_Invoice_Collection)
    {
        $this->Plan_Invoice_Collection = $Plan_Invoice_Collection;
    }
    /**
     * @return Plan_Invoice_Collection
     */
    public function getPlan_Invoice_Collection() : ?Plan_Invoice_Collection
    {
        return $this->Plan_Invoice_Collection;
    }
    /**
     * @param Plan_Invoice_Create $Plan_Invoice_Create
     */
    public function setPlan_Invoice_Create(?Plan_Invoice_Create $Plan_Invoice_Create)
    {
        $this->Plan_Invoice_Create = $Plan_Invoice_Create;
    }
    /**
     * @return Plan_Invoice_Create
     */
    public function getPlan_Invoice_Create() : ?Plan_Invoice_Create
    {
        return $this->Plan_Invoice_Create;
    }
    /**
     * @param Message $Message
     */
    public function setMessage(?Message $Message)
    {
        $this->Message = $Message;
    }
    /**
     * @return Message
     */
    public function getMessage() : ?Message
    {
        return $this->Message;
    }
}

