<?php

namespace ConsumerAuthorize;

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

        $this->url = $baseUrl . '/consumer/authorize';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    public function get(GetQuery $query): Consumer_Authorize_Meta
    {
        $options = [
            'query' => $this->convertToArray($query),
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Consumer_Authorize_Meta::class);
    }

    public function post(Consumer_Authorize_Request $data): Consumer_Authorize_Response
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
            'json' => $this->convertToArray($data)
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Consumer_Authorize_Response::class);
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
 * @Title("Consumer Authorize Token")
 */
class Consumer_Authorize_Token
{
    /**
     * @Key("access_token")
     * @Type("string")
     */
    protected $access_token;
    /**
     * @Key("token_type")
     * @Type("string")
     */
    protected $token_type;
    /**
     * @Key("expires_in")
     * @Type("string")
     */
    protected $expires_in;
    /**
     * @Key("scope")
     * @Type("string")
     */
    protected $scope;
    public function setAccess_token($access_token)
    {
        $this->access_token = $access_token;
    }
    public function getAccess_token()
    {
        return $this->access_token;
    }
    public function setToken_type($token_type)
    {
        $this->token_type = $token_type;
    }
    public function getToken_type()
    {
        return $this->token_type;
    }
    public function setExpires_in($expires_in)
    {
        $this->expires_in = $expires_in;
    }
    public function getExpires_in()
    {
        return $this->expires_in;
    }
    public function setScope($scope)
    {
        $this->scope = $scope;
    }
    public function getScope()
    {
        return $this->scope;
    }
}
/**
 * @Title("Consumer Scope")
 */
class Consumer_Scope
{
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    /**
     * @Key("name")
     * @Type("string")
     * @Pattern("^[A-z0-9\-\_]{3,64}$")
     */
    protected $name;
    /**
     * @Key("description")
     * @Type("string")
     */
    protected $description;
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
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
}
/**
 * @Title("Consumer Authorize Response")
 */
class Consumer_Authorize_Response
{
    /**
     * @Key("type")
     * @Type("string")
     */
    protected $type;
    /**
     * @Key("token")
     * @Ref("PSX\Generation\Consumer_Authorize_Token")
     */
    protected $token;
    /**
     * @Key("code")
     * @Type("string")
     */
    protected $code;
    /**
     * @Key("redirectUri")
     * @Type("string")
     */
    protected $redirectUri;
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setToken($token)
    {
        $this->token = $token;
    }
    public function getToken()
    {
        return $this->token;
    }
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
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
 * @Title("Consumer Authorize Request")
 * @Required({"responseType", "clientId", "scope", "allow"})
 */
class Consumer_Authorize_Request
{
    /**
     * @Key("responseType")
     * @Type("string")
     */
    protected $responseType;
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
    /**
     * @Key("scope")
     * @Type("string")
     */
    protected $scope;
    /**
     * @Key("state")
     * @Type("string")
     */
    protected $state;
    /**
     * @Key("allow")
     * @Type("boolean")
     */
    protected $allow;
    public function setResponseType($responseType)
    {
        $this->responseType = $responseType;
    }
    public function getResponseType()
    {
        return $this->responseType;
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
    public function setScope($scope)
    {
        $this->scope = $scope;
    }
    public function getScope()
    {
        return $this->scope;
    }
    public function setState($state)
    {
        $this->state = $state;
    }
    public function getState()
    {
        return $this->state;
    }
    public function setAllow($allow)
    {
        $this->allow = $allow;
    }
    public function getAllow()
    {
        return $this->allow;
    }
}
/**
 * @Title("Consumer Authorize Meta")
 */
class Consumer_Authorize_Meta
{
    /**
     * @Key("name")
     * @Type("string")
     */
    protected $name;
    /**
     * @Key("url")
     * @Type("string")
     */
    protected $url;
    /**
     * @Key("scopes")
     * @Type("array")
     * @Items(@Ref("PSX\Generation\Consumer_Scope"))
     */
    protected $scopes;
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
    public function setScopes($scopes)
    {
        $this->scopes = $scopes;
    }
    public function getScopes()
    {
        return $this->scopes;
    }
}
/**
 * @Title("GetQuery")
 */
class GetQuery
{
    /**
     * @Key("client_id")
     * @Type("string")
     */
    protected $client_id;
    /**
     * @Key("scope")
     * @Type("string")
     */
    protected $scope;
    public function setClient_id($client_id)
    {
        $this->client_id = $client_id;
    }
    public function getClient_id()
    {
        return $this->client_id;
    }
    public function setScope($scope)
    {
        $this->scope = $scope;
    }
    public function getScope()
    {
        return $this->scope;
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
     * @Key("Consumer_Authorize_Meta")
     * @Ref("PSX\Generation\Consumer_Authorize_Meta")
     */
    protected $Consumer_Authorize_Meta;
    /**
     * @Key("Consumer_Authorize_Request")
     * @Ref("PSX\Generation\Consumer_Authorize_Request")
     */
    protected $Consumer_Authorize_Request;
    /**
     * @Key("Consumer_Authorize_Response")
     * @Ref("PSX\Generation\Consumer_Authorize_Response")
     */
    protected $Consumer_Authorize_Response;
    public function setGetQuery($GetQuery)
    {
        $this->GetQuery = $GetQuery;
    }
    public function getGetQuery()
    {
        return $this->GetQuery;
    }
    public function setConsumer_Authorize_Meta($Consumer_Authorize_Meta)
    {
        $this->Consumer_Authorize_Meta = $Consumer_Authorize_Meta;
    }
    public function getConsumer_Authorize_Meta()
    {
        return $this->Consumer_Authorize_Meta;
    }
    public function setConsumer_Authorize_Request($Consumer_Authorize_Request)
    {
        $this->Consumer_Authorize_Request = $Consumer_Authorize_Request;
    }
    public function getConsumer_Authorize_Request()
    {
        return $this->Consumer_Authorize_Request;
    }
    public function setConsumer_Authorize_Response($Consumer_Authorize_Response)
    {
        $this->Consumer_Authorize_Response = $Consumer_Authorize_Response;
    }
    public function getConsumer_Authorize_Response()
    {
        return $this->Consumer_Authorize_Response;
    }
}

