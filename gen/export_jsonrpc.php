<?php

namespace ExportJsonrpc;

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

        $this->url = $baseUrl . '/export/jsonrpc';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @param Export_Rpc_Request_Call|array&lt;Export_Rpc_Request_Call&gt; $data
     * @return Export_Rpc_Response_Return_Success|Export_Rpc_Response_Return_Error|array&lt;Export_Rpc_Response_Return_Success|Export_Rpc_Response_Return_Error&gt;
     */
    public function post( $data)
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
            'json' => $this->convertToArray($data)
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, null);
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
    /**
     * @param int $code
     */
    public function setCode(?int $code)
    {
        $this->code = $code;
    }
    /**
     * @return int
     */
    public function getCode() : ?int
    {
        return $this->code;
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
    /**
     * @param  $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
    /**
     * @return 
     */
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
     * @Ref("ExportJsonrpc\Export_Rpc_Response_Error")
     */
    protected $error;
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    /**
     * @param string $jsonrpc
     */
    public function setJsonrpc(?string $jsonrpc)
    {
        $this->jsonrpc = $jsonrpc;
    }
    /**
     * @return string
     */
    public function getJsonrpc() : ?string
    {
        return $this->jsonrpc;
    }
    /**
     * @param Export_Rpc_Response_Error $error
     */
    public function setError(?Export_Rpc_Response_Error $error)
    {
        $this->error = $error;
    }
    /**
     * @return Export_Rpc_Response_Error
     */
    public function getError() : ?Export_Rpc_Response_Error
    {
        return $this->error;
    }
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
    /**
     * @param string $jsonrpc
     */
    public function setJsonrpc(?string $jsonrpc)
    {
        $this->jsonrpc = $jsonrpc;
    }
    /**
     * @return string
     */
    public function getJsonrpc() : ?string
    {
        return $this->jsonrpc;
    }
    /**
     * @param  $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }
    /**
     * @return 
     */
    public function getResult()
    {
        return $this->result;
    }
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
    /**
     * @param string $jsonrpc
     */
    public function setJsonrpc(?string $jsonrpc)
    {
        $this->jsonrpc = $jsonrpc;
    }
    /**
     * @return string
     */
    public function getJsonrpc() : ?string
    {
        return $this->jsonrpc;
    }
    /**
     * @param string $method
     */
    public function setMethod(?string $method)
    {
        $this->method = $method;
    }
    /**
     * @return string
     */
    public function getMethod() : ?string
    {
        return $this->method;
    }
    /**
     * @param  $params
     */
    public function setParams($params)
    {
        $this->params = $params;
    }
    /**
     * @return 
     */
    public function getParams()
    {
        return $this->params;
    }
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
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Export_Rpc_Request")
     * @Title("Export Rpc Request")
     * @OneOf(@Ref("ExportJsonrpc\Export_Rpc_Request_Call"), @Schema(type="array", title="Export Rpc Request Batch", items=@Ref("ExportJsonrpc\Export_Rpc_Request_Call")))
     */
    protected $Export_Rpc_Request;
    /**
     * @Key("Export_Rpc_Response")
     * @Title("Export Rpc Response")
     * @OneOf(@Schema(title="Export Rpc Response Return", oneOf={@Ref("ExportJsonrpc\Export_Rpc_Response_Return_Success"), @Ref("ExportJsonrpc\Export_Rpc_Response_Return_Error")}), @Schema(type="array", title="Export Rpc Response Batch", items=@Schema(title="Export Rpc Response Return", oneOf={@Ref("ExportJsonrpc\Export_Rpc_Response_Return_Success"), @Ref("ExportJsonrpc\Export_Rpc_Response_Return_Error")})))
     */
    protected $Export_Rpc_Response;
    /**
     * @param Export_Rpc_Request_Call|array<Export_Rpc_Request_Call> $Export_Rpc_Request
     */
    public function setExport_Rpc_Request($Export_Rpc_Request)
    {
        $this->Export_Rpc_Request = $Export_Rpc_Request;
    }
    /**
     * @return Export_Rpc_Request_Call|array<Export_Rpc_Request_Call>
     */
    public function getExport_Rpc_Request()
    {
        return $this->Export_Rpc_Request;
    }
    /**
     * @param Export_Rpc_Response_Return_Success|Export_Rpc_Response_Return_Error|array<Export_Rpc_Response_Return_Success|Export_Rpc_Response_Return_Error> $Export_Rpc_Response
     */
    public function setExport_Rpc_Response($Export_Rpc_Response)
    {
        $this->Export_Rpc_Response = $Export_Rpc_Response;
    }
    /**
     * @return Export_Rpc_Response_Return_Success|Export_Rpc_Response_Return_Error|array<Export_Rpc_Response_Return_Success|Export_Rpc_Response_Return_Error>
     */
    public function getExport_Rpc_Response()
    {
        return $this->Export_Rpc_Response;
    }
}

