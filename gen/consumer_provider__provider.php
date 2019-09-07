<?php

namespace ConsumerProviderProvider;

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

        $this->url = $baseUrl . '/consumer/provider/' . $provider . '';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    public function post(Consumer_User_Provider $data): Consumer_User_JWT
    {
        $options = [
            'json' => $this->convertToArray($data)
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Consumer_User_JWT::class);
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
 * @Title("Consumer User JWT")
 */
class Consumer_User_JWT
{
    /**
     * @Key("token")
     * @Type("string")
     */
    protected $token;
    public function setToken($token)
    {
        $this->token = $token;
    }
    public function getToken()
    {
        return $this->token;
    }
}
/**
 * @Title("Consumer User Provider")
 * @AdditionalProperties(true)
 */
class Consumer_User_Provider extends \ArrayObject
{
    /**
     * @Key("code")
     * @Type("string")
     */
    protected $code;
    /**
     * @Key("clientId")
     * @Type("string")
     */
    protected $clientId;
    /**
     * @Key("redirectUri")
     * @Type("string")
     */
    protected $redirectUri;
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
    }
    public function getClientId()
    {
        return $this->clientId;
    }
    public function setRedirectUri($redirectUri)
    {
        $this->redirectUri = $redirectUri;
    }
    public function getRedirectUri()
    {
        return $this->redirectUri;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Consumer_User_Provider")
     * @Ref("PSX\Generation\Consumer_User_Provider")
     */
    protected $Consumer_User_Provider;
    /**
     * @Key("Consumer_User_JWT")
     * @Ref("PSX\Generation\Consumer_User_JWT")
     */
    protected $Consumer_User_JWT;
    public function setConsumer_User_Provider($Consumer_User_Provider)
    {
        $this->Consumer_User_Provider = $Consumer_User_Provider;
    }
    public function getConsumer_User_Provider()
    {
        return $this->Consumer_User_Provider;
    }
    public function setConsumer_User_JWT($Consumer_User_JWT)
    {
        $this->Consumer_User_JWT = $Consumer_User_JWT;
    }
    public function getConsumer_User_JWT()
    {
        return $this->Consumer_User_JWT;
    }
}

