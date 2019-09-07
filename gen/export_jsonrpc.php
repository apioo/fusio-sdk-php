<?php

namespace ExportJsonrpc;

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

        $this->url = $baseUrl . '/export/jsonrpc';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    public function post(Export_Rpc_Request $data): Export_Rpc_Response
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
            'json' => $this->convertToArray($data)
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Export_Rpc_Response::class);
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
 * @Title("Export Rpc Response Error")
 */
class Export_Rpc_Response_Error
{
    /**
     * @Key("code")
     * @Type("integer")
     */
    protected $code;
    /**
     * @Key("message")
     * @Type("string")
     */
    protected $message;
    /**
     * @Key("data")
     * @Title("Export Rpc Response Error Data")
     * @Description("Error data")
     */
    protected $data;
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setMessage($message)
    {
        $this->message = $message;
    }
    public function getMessage()
    {
        return $this->message;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
    }
}
/**
 * @Title("Export Rpc Response Return Error")
 */
class Export_Rpc_Response_Return_Error
{
    /**
     * @Key("jsonrpc")
     * @Type("string")
     */
    protected $jsonrpc;
    /**
     * @Key("error")
     * @Ref("PSX\Generation\Export_Rpc_Response_Error")
     */
    protected $error;
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    public function setJsonrpc($jsonrpc)
    {
        $this->jsonrpc = $jsonrpc;
    }
    public function getJsonrpc()
    {
        return $this->jsonrpc;
    }
    public function setError($error)
    {
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
}
/**
 * @Title("Export Rpc Response Return Success")
 */
class Export_Rpc_Response_Return_Success
{
    /**
     * @Key("jsonrpc")
     * @Type("string")
     */
    protected $jsonrpc;
    /**
     * @Key("result")
     * @Title("Export Rpc Response Result")
     * @Description("Method result")
     */
    protected $result;
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    public function setJsonrpc($jsonrpc)
    {
        $this->jsonrpc = $jsonrpc;
    }
    public function getJsonrpc()
    {
        return $this->jsonrpc;
    }
    public function setResult($result)
    {
        $this->result = $result;
    }
    public function getResult()
    {
        return $this->result;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
}
/**
 * @Title("Export Rpc Request Call")
 */
class Export_Rpc_Request_Call
{
    /**
     * @Key("jsonrpc")
     * @Type("string")
     */
    protected $jsonrpc;
    /**
     * @Key("method")
     * @Type("string")
     */
    protected $method;
    /**
     * @Key("params")
     * @Title("Export Rpc Request Params")
     * @Description("Method params")
     */
    protected $params;
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    public function setJsonrpc($jsonrpc)
    {
        $this->jsonrpc = $jsonrpc;
    }
    public function getJsonrpc()
    {
        return $this->jsonrpc;
    }
    public function setMethod($method)
    {
        $this->method = $method;
    }
    public function getMethod()
    {
        return $this->method;
    }
    public function setParams($params)
    {
        $this->params = $params;
    }
    public function getParams()
    {
        return $this->params;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Export_Rpc_Request")
     * @Title("Export Rpc Request")
     * @OneOf(@Ref("PSX\Generation\Export_Rpc_Request_Call"), @Schema(type="array", title="Export Rpc Request Batch", items=@Ref("PSX\Generation\Export_Rpc_Request_Call")))
     */
    protected $Export_Rpc_Request;
    /**
     * @Key("Export_Rpc_Response")
     * @Title("Export Rpc Response")
     * @OneOf(@Schema(title="Export Rpc Response Return", oneOf={@Ref("PSX\Generation\Export_Rpc_Response_Return_Success"), @Ref("PSX\Generation\Export_Rpc_Response_Return_Error")}), @Schema(type="array", title="Export Rpc Response Batch", items=@Schema(title="Export Rpc Response Return", oneOf={@Ref("PSX\Generation\Export_Rpc_Response_Return_Success"), @Ref("PSX\Generation\Export_Rpc_Response_Return_Error")})))
     */
    protected $Export_Rpc_Response;
    public function setExport_Rpc_Request($Export_Rpc_Request)
    {
        $this->Export_Rpc_Request = $Export_Rpc_Request;
    }
    public function getExport_Rpc_Request()
    {
        return $this->Export_Rpc_Request;
    }
    public function setExport_Rpc_Response($Export_Rpc_Response)
    {
        $this->Export_Rpc_Response = $Export_Rpc_Response;
    }
    public function getExport_Rpc_Response()
    {
        return $this->Export_Rpc_Response;
    }
}

