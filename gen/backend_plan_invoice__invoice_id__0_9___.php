<?php

namespace BackendPlanInvoiceInvoice_id09;

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
    private $invoice_id;

    public function __construct(int $invoice_id, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        $this->invoice_id = $invoice_id;

        $this->url = $baseUrl . '/backend/plan/invoice/' . $invoice_id . '';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Plan_Invoice
     */
    public function get(): Plan_Invoice
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Plan_Invoice::class);
    }

    /**
     * @param Plan_Invoice $data
     * @return Message
     */
    public function put(Plan_Invoice $data): Message
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
            'json' => $this->convertToArray($data)
        ];

        $response = $this->httpClient->request('PUT', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Message::class);
    }

    /**
     * @return Message
     */
    public function delete(): Message
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('DELETE', $this->url, $options);
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
     * @Ref("BackendPlanInvoiceInvoice_id09\Plan_User")
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
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Plan_Invoice")
     * @Ref("BackendPlanInvoiceInvoice_id09\Plan_Invoice")
     */
    protected $Plan_Invoice;
    /**
     * @Key("Message")
     * @Ref("BackendPlanInvoiceInvoice_id09\Message")
     */
    protected $Message;
    /**
     * @param Plan_Invoice $Plan_Invoice
     */
    public function setPlan_Invoice(?Plan_Invoice $Plan_Invoice)
    {
        $this->Plan_Invoice = $Plan_Invoice;
    }
    /**
     * @return Plan_Invoice
     */
    public function getPlan_Invoice() : ?Plan_Invoice
    {
        return $this->Plan_Invoice;
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

