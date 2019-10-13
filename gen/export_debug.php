<?php

namespace ExportDebug;

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

        $this->url = $baseUrl . '/export/debug';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Export_Debug
     */
    public function get(): Export_Debug
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Export_Debug::class);
    }

    /**
     * @param Passthru $data
     * @return Export_Debug
     */
    public function post(Passthru $data): Export_Debug
    {
        $options = [
            'json' => $this->convertToArray($data)
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Export_Debug::class);
    }

    /**
     * @param Passthru $data
     * @return Export_Debug
     */
    public function put(Passthru $data): Export_Debug
    {
        $options = [
            'json' => $this->convertToArray($data)
        ];

        $response = $this->httpClient->request('PUT', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Export_Debug::class);
    }

    /**
     * @return Export_Debug
     */
    public function delete(): Export_Debug
    {
        $options = [
        ];

        $response = $this->httpClient->request('DELETE', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Export_Debug::class);
    }

    /**
     * @param Passthru $data
     * @return Export_Debug
     */
    public function patch(Passthru $data): Export_Debug
    {
        $options = [
            'json' => $this->convertToArray($data)
        ];

        $response = $this->httpClient->request('PATCH', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Export_Debug::class);
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
 * @Title("Export Debug Request")
 */
class Export_Debug_Request
{
}
/**
 * @Title("Export Debug Parameters")
 */
class Export_Debug_Parameters
{
}
/**
 * @Title("Export Debug Headers")
 */
class Export_Debug_Headers
{
}
/**
 * @Title("passthru")
 * @Description("No schema information available")
 */
class Passthru
{
}
/**
 * @Title("Export Debug")
 */
class Export_Debug
{
    /**
     * @Key("method")
     * @Type("string")
     */
    protected $method;
    /**
     * @Key("headers")
     * @Ref("PSX\Generation\Export_Debug_Headers")
     */
    protected $headers;
    /**
     * @Key("parameters")
     * @Ref("PSX\Generation\Export_Debug_Parameters")
     */
    protected $parameters;
    /**
     * @Key("body")
     * @Ref("PSX\Generation\Export_Debug_Request")
     */
    protected $body;
    public function setMethod(?string $method)
    {
        $this->method = $method;
    }
    public function getMethod() : ?string
    {
        return $this->method;
    }
    public function setHeaders(?Export_Debug_Headers $headers)
    {
        $this->headers = $headers;
    }
    public function getHeaders() : ?Export_Debug_Headers
    {
        return $this->headers;
    }
    public function setParameters(?Export_Debug_Parameters $parameters)
    {
        $this->parameters = $parameters;
    }
    public function getParameters() : ?Export_Debug_Parameters
    {
        return $this->parameters;
    }
    public function setBody(?Export_Debug_Request $body)
    {
        $this->body = $body;
    }
    public function getBody() : ?Export_Debug_Request
    {
        return $this->body;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Export_Debug")
     * @Ref("PSX\Generation\Export_Debug")
     */
    protected $Export_Debug;
    /**
     * @Key("Passthru")
     * @Ref("PSX\Generation\Passthru")
     */
    protected $Passthru;
    public function setExport_Debug(?Export_Debug $Export_Debug)
    {
        $this->Export_Debug = $Export_Debug;
    }
    public function getExport_Debug() : ?Export_Debug
    {
        return $this->Export_Debug;
    }
    public function setPassthru(?Passthru $Passthru)
    {
        $this->Passthru = $Passthru;
    }
    public function getPassthru() : ?Passthru
    {
        return $this->Passthru;
    }
}

