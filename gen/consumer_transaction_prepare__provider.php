<?php

namespace ConsumerTransactionPrepareProvider;

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
     * @var string
     */
    private $provider;

    public function __construct(string $provider, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        $this->provider = $provider;

        $this->url = $baseUrl . '/consumer/transaction/prepare/' . $provider . '';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @param Consumer_Transaction_Prepare_Request $data
     * @return Consumer_Transaction_Prepare_Response
     */
    public function post(Consumer_Transaction_Prepare_Request $data): Consumer_Transaction_Prepare_Response
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
            'json' => $this->convertToArray($data)
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Consumer_Transaction_Prepare_Response::class);
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
 * @Title("Consumer Transaction Prepare Response")
 */
class Consumer_Transaction_Prepare_Response
{
    /**
     * @Key("approvalUrl")
     * @Type("string")
     */
    protected $approvalUrl;
    public function setApprovalUrl(?string $approvalUrl)
    {
        $this->approvalUrl = $approvalUrl;
    }
    public function getApprovalUrl() : ?string
    {
        return $this->approvalUrl;
    }
}
/**
 * @Title("Consumer Transaction Prepare Request")
 * @Required({"invoiceId", "returnUrl"})
 */
class Consumer_Transaction_Prepare_Request
{
    /**
     * @Key("invoiceId")
     * @Type("integer")
     */
    protected $invoiceId;
    /**
     * @Key("returnUrl")
     * @Type("string")
     */
    protected $returnUrl;
    public function setInvoiceId(?int $invoiceId)
    {
        $this->invoiceId = $invoiceId;
    }
    public function getInvoiceId() : ?int
    {
        return $this->invoiceId;
    }
    public function setReturnUrl(?string $returnUrl)
    {
        $this->returnUrl = $returnUrl;
    }
    public function getReturnUrl() : ?string
    {
        return $this->returnUrl;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Consumer_Transaction_Prepare_Request")
     * @Ref("PSX\Generation\Consumer_Transaction_Prepare_Request")
     */
    protected $Consumer_Transaction_Prepare_Request;
    /**
     * @Key("Consumer_Transaction_Prepare_Response")
     * @Ref("PSX\Generation\Consumer_Transaction_Prepare_Response")
     */
    protected $Consumer_Transaction_Prepare_Response;
    public function setConsumer_Transaction_Prepare_Request(?Consumer_Transaction_Prepare_Request $Consumer_Transaction_Prepare_Request)
    {
        $this->Consumer_Transaction_Prepare_Request = $Consumer_Transaction_Prepare_Request;
    }
    public function getConsumer_Transaction_Prepare_Request() : ?Consumer_Transaction_Prepare_Request
    {
        return $this->Consumer_Transaction_Prepare_Request;
    }
    public function setConsumer_Transaction_Prepare_Response(?Consumer_Transaction_Prepare_Response $Consumer_Transaction_Prepare_Response)
    {
        $this->Consumer_Transaction_Prepare_Response = $Consumer_Transaction_Prepare_Response;
    }
    public function getConsumer_Transaction_Prepare_Response() : ?Consumer_Transaction_Prepare_Response
    {
        return $this->Consumer_Transaction_Prepare_Response;
    }
}

