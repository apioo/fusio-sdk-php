<?php

namespace BackendPlanInvoiceInvoice_id09;

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
    public function setSuccess($success)
    {
        $this->success = $success;
    }
    public function getSuccess()
    {
        return $this->success;
    }
    public function setMessage($message)
    {
        $this->message = $message;
    }
    public function getMessage()
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
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setContractId($contractId)
    {
        $this->contractId = $contractId;
    }
    public function getContractId()
    {
        return $this->contractId;
    }
    public function setUser($user)
    {
        $this->user = $user;
    }
    public function getUser()
    {
        return $this->user;
    }
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
    }
    public function getTransactionId()
    {
        return $this->transactionId;
    }
    public function setPrevId($prevId)
    {
        $this->prevId = $prevId;
    }
    public function getPrevId()
    {
        return $this->prevId;
    }
    public function setDisplayId($displayId)
    {
        $this->displayId = $displayId;
    }
    public function getDisplayId()
    {
        return $this->displayId;
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
    public function setFromDate($fromDate)
    {
        $this->fromDate = $fromDate;
    }
    public function getFromDate()
    {
        return $this->fromDate;
    }
    public function setToDate($toDate)
    {
        $this->toDate = $toDate;
    }
    public function getToDate()
    {
        return $this->toDate;
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
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Plan_Invoice")
     * @Ref("PSX\Generation\Plan_Invoice")
     */
    protected $Plan_Invoice;
    /**
     * @Key("Message")
     * @Ref("PSX\Generation\Message")
     */
    protected $Message;
    public function setPlan_Invoice($Plan_Invoice)
    {
        $this->Plan_Invoice = $Plan_Invoice;
    }
    public function getPlan_Invoice()
    {
        return $this->Plan_Invoice;
    }
    public function setMessage($Message)
    {
        $this->Message = $Message;
    }
    public function getMessage()
    {
        return $this->Message;
    }
}

