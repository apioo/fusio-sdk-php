<?php

namespace BackendToken;

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

        $this->url = $baseUrl . '/backend/token';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @param Authorization_code|Password|Client_credentials|Refresh_token $data
     * @param string $clientId
     * @param string $clientSecret
     * @return Access_token
     */
    public function post($data, string $clientId, string $clientSecret): Access_token
    {
        $options = [
            'form_params' => $this->convertToArray($data)->getProperties(),
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode($clientId . ':' . $clientSecret)
            ],
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Access_token::class);
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
 * @Title("access_token")
 */
class Access_token
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
     * @Key("refresh_token")
     * @Type("string")
     */
    protected $refresh_token;
    public function setAccess_token(?string $access_token)
    {
        $this->access_token = $access_token;
    }
    public function getAccess_token() : ?string
    {
        return $this->access_token;
    }
    public function setToken_type(?string $token_type)
    {
        $this->token_type = $token_type;
    }
    public function getToken_type() : ?string
    {
        return $this->token_type;
    }
    public function setExpires_in(?string $expires_in)
    {
        $this->expires_in = $expires_in;
    }
    public function getExpires_in() : ?string
    {
        return $this->expires_in;
    }
    public function setRefresh_token(?string $refresh_token)
    {
        $this->refresh_token = $refresh_token;
    }
    public function getRefresh_token() : ?string
    {
        return $this->refresh_token;
    }
}
/**
 * @Title("refresh_token")
 * @Required({"grant_type", "refresh_token"})
 */
class Refresh_token
{
    /**
     * @Key("grant_type")
     * @Type("string")
     */
    protected $grant_type;
    /**
     * @Key("refresh_token")
     * @Type("string")
     */
    protected $refresh_token;
    /**
     * @Key("scope")
     * @Type("string")
     */
    protected $scope;
    public function setGrant_type(?string $grant_type)
    {
        $this->grant_type = $grant_type;
    }
    public function getGrant_type() : ?string
    {
        return $this->grant_type;
    }
    public function setRefresh_token(?string $refresh_token)
    {
        $this->refresh_token = $refresh_token;
    }
    public function getRefresh_token() : ?string
    {
        return $this->refresh_token;
    }
    public function setScope(?string $scope)
    {
        $this->scope = $scope;
    }
    public function getScope() : ?string
    {
        return $this->scope;
    }
}
/**
 * @Title("client_credentials")
 * @Required({"grant_type"})
 */
class Client_credentials
{
    /**
     * @Key("grant_type")
     * @Type("string")
     */
    protected $grant_type;
    /**
     * @Key("scope")
     * @Type("string")
     */
    protected $scope;
    public function setGrant_type(?string $grant_type)
    {
        $this->grant_type = $grant_type;
    }
    public function getGrant_type() : ?string
    {
        return $this->grant_type;
    }
    public function setScope(?string $scope)
    {
        $this->scope = $scope;
    }
    public function getScope() : ?string
    {
        return $this->scope;
    }
}
/**
 * @Title("password")
 * @Required({"grant_type", "username", "password"})
 */
class Password
{
    /**
     * @Key("grant_type")
     * @Type("string")
     */
    protected $grant_type;
    /**
     * @Key("username")
     * @Type("string")
     */
    protected $username;
    /**
     * @Key("password")
     * @Type("string")
     */
    protected $password;
    /**
     * @Key("scope")
     * @Type("string")
     */
    protected $scope;
    public function setGrant_type(?string $grant_type)
    {
        $this->grant_type = $grant_type;
    }
    public function getGrant_type() : ?string
    {
        return $this->grant_type;
    }
    public function setUsername(?string $username)
    {
        $this->username = $username;
    }
    public function getUsername() : ?string
    {
        return $this->username;
    }
    public function setPassword(?string $password)
    {
        $this->password = $password;
    }
    public function getPassword() : ?string
    {
        return $this->password;
    }
    public function setScope(?string $scope)
    {
        $this->scope = $scope;
    }
    public function getScope() : ?string
    {
        return $this->scope;
    }
}
/**
 * @Title("authorization_code")
 * @Required({"grant_type", "code"})
 */
class Authorization_code
{
    /**
     * @Key("grant_type")
     * @Type("string")
     */
    protected $grant_type;
    /**
     * @Key("code")
     * @Type("string")
     */
    protected $code;
    /**
     * @Key("redirect_uri")
     * @Type("string")
     */
    protected $redirect_uri;
    /**
     * @Key("client_id")
     * @Type("string")
     */
    protected $client_id;
    public function setGrant_type(?string $grant_type)
    {
        $this->grant_type = $grant_type;
    }
    public function getGrant_type() : ?string
    {
        return $this->grant_type;
    }
    public function setCode(?string $code)
    {
        $this->code = $code;
    }
    public function getCode() : ?string
    {
        return $this->code;
    }
    public function setRedirect_uri(?string $redirect_uri)
    {
        $this->redirect_uri = $redirect_uri;
    }
    public function getRedirect_uri() : ?string
    {
        return $this->redirect_uri;
    }
    public function setClient_id(?string $client_id)
    {
        $this->client_id = $client_id;
    }
    public function getClient_id() : ?string
    {
        return $this->client_id;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Authorization")
     * @Title("authorization")
     * @OneOf(@Ref("PSX\Generation\Authorization_code"), @Ref("PSX\Generation\Password"), @Ref("PSX\Generation\Client_credentials"), @Ref("PSX\Generation\Refresh_token"))
     */
    protected $Authorization;
    /**
     * @Key("Access_token")
     * @Ref("PSX\Generation\Access_token")
     */
    protected $Access_token;
    public function setAuthorization($Authorization)
    {
        $this->Authorization = $Authorization;
    }
    public function getAuthorization()
    {
        return $this->Authorization;
    }
    public function setAccess_token(?Access_token $Access_token)
    {
        $this->Access_token = $Access_token;
    }
    public function getAccess_token() : ?Access_token
    {
        return $this->Access_token;
    }
}

