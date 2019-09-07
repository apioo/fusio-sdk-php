<?php

namespace ConsumerLogin;

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

        $this->url = $baseUrl . '/consumer/login';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    public function post(Consumer_User_Login $data): Consumer_User_JWT
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
 * @Title("Consumer User Login")
 */
class Consumer_User_Login
{
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
     * @Key("scopes")
     * @Type("array")
     * @Items(@Schema(type="string"))
     */
    protected $scopes;
    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPassword()
    {
        return $this->password;
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
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Consumer_User_Login")
     * @Ref("PSX\Generation\Consumer_User_Login")
     */
    protected $Consumer_User_Login;
    /**
     * @Key("Consumer_User_JWT")
     * @Ref("PSX\Generation\Consumer_User_JWT")
     */
    protected $Consumer_User_JWT;
    public function setConsumer_User_Login($Consumer_User_Login)
    {
        $this->Consumer_User_Login = $Consumer_User_Login;
    }
    public function getConsumer_User_Login()
    {
        return $this->Consumer_User_Login;
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

