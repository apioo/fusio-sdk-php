<?php

namespace BackendPlanInvoice;

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
    public function setId(?int $id)
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setName(?string $name)
    {
        $this->name = $name;
    }
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
     * @Ref("PSX\Generation\Plan_User")
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
    public function setId(?int $id)
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setContractId(?int $contractId)
    {
        $this->contractId = $contractId;
    }
    public function getContractId() : ?int
    {
        return $this->contractId;
    }
    public function setUser(?Plan_User $user)
    {
        $this->user = $user;
    }
    public function getUser() : ?Plan_User
    {
        return $this->user;
    }
    public function setTransactionId(?int $transactionId)
    {
        $this->transactionId = $transactionId;
    }
    public function getTransactionId() : ?int
    {
        return $this->transactionId;
    }
    public function setPrevId(?int $prevId)
    {
        $this->prevId = $prevId;
    }
    public function getPrevId() : ?int
    {
        return $this->prevId;
    }
    public function setDisplayId(?string $displayId)
    {
        $this->displayId = $displayId;
    }
    public function getDisplayId() : ?string
    {
        return $this->displayId;
    }
    public function setStatus(?int $status)
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setAmount(?float $amount)
    {
        $this->amount = $amount;
    }
    public function getAmount() : ?float
    {
        return $this->amount;
    }
    public function setPoints(?int $points)
    {
        $this->points = $points;
    }
    public function getPoints() : ?int
    {
        return $this->points;
    }
    public function setFromDate(?\DateTime $fromDate)
    {
        $this->fromDate = $fromDate;
    }
    public function getFromDate() : ?\DateTime
    {
        return $this->fromDate;
    }
    public function setToDate(?\DateTime $toDate)
    {
        $this->toDate = $toDate;
    }
    public function getToDate() : ?\DateTime
    {
        return $this->toDate;
    }
    public function setPayDate(?\DateTime $payDate)
    {
        $this->payDate = $payDate;
    }
    public function getPayDate() : ?\DateTime
    {
        return $this->payDate;
    }
    public function setInsertDate(?\DateTime $insertDate)
    {
        $this->insertDate = $insertDate;
    }
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
    public function setSuccess(?bool $success)
    {
        $this->success = $success;
    }
    public function getSuccess() : ?bool
    {
        return $this->success;
    }
    public function setMessage(?string $message)
    {
        $this->message = $message;
    }
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
    public function setContractId(?int $contractId)
    {
        $this->contractId = $contractId;
    }
    public function getContractId() : ?int
    {
        return $this->contractId;
    }
    public function setStartDate(?\DateTime $startDate)
    {
        $this->startDate = $startDate;
    }
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
     * @Items(@Ref("PSX\Generation\Plan_Invoice"))
     */
    protected $entry;
    public function setTotalResults(?int $totalResults)
    {
        $this->totalResults = $totalResults;
    }
    public function getTotalResults() : ?int
    {
        return $this->totalResults;
    }
    public function setStartIndex(?int $startIndex)
    {
        $this->startIndex = $startIndex;
    }
    public function getStartIndex() : ?int
    {
        return $this->startIndex;
    }
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
    public function setStartIndex(?int $startIndex)
    {
        $this->startIndex = $startIndex;
    }
    public function getStartIndex() : ?int
    {
        return $this->startIndex;
    }
    public function setCount(?int $count)
    {
        $this->count = $count;
    }
    public function getCount() : ?int
    {
        return $this->count;
    }
    public function setSearch(?string $search)
    {
        $this->search = $search;
    }
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
     * @Ref("PSX\Generation\GetQuery")
     */
    protected $GetQuery;
    /**
     * @Key("Plan_Invoice_Collection")
     * @Ref("PSX\Generation\Plan_Invoice_Collection")
     */
    protected $Plan_Invoice_Collection;
    /**
     * @Key("Plan_Invoice_Create")
     * @Ref("PSX\Generation\Plan_Invoice_Create")
     */
    protected $Plan_Invoice_Create;
    /**
     * @Key("Message")
     * @Ref("PSX\Generation\Message")
     */
    protected $Message;
    public function setGetQuery(?GetQuery $GetQuery)
    {
        $this->GetQuery = $GetQuery;
    }
    public function getGetQuery() : ?GetQuery
    {
        return $this->GetQuery;
    }
    public function setPlan_Invoice_Collection(?Plan_Invoice_Collection $Plan_Invoice_Collection)
    {
        $this->Plan_Invoice_Collection = $Plan_Invoice_Collection;
    }
    public function getPlan_Invoice_Collection() : ?Plan_Invoice_Collection
    {
        return $this->Plan_Invoice_Collection;
    }
    public function setPlan_Invoice_Create(?Plan_Invoice_Create $Plan_Invoice_Create)
    {
        $this->Plan_Invoice_Create = $Plan_Invoice_Create;
    }
    public function getPlan_Invoice_Create() : ?Plan_Invoice_Create
    {
        return $this->Plan_Invoice_Create;
    }
    public function setMessage(?Message $Message)
    {
        $this->Message = $Message;
    }
    public function getMessage() : ?Message
    {
        return $this->Message;
    }
}

