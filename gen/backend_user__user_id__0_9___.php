<?php

namespace BackendUserUser_id09;

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
    private $user_id;

    public function __construct(int $user_id, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        $this->user_id = $user_id;

        $this->url = $baseUrl . '/backend/user/' . $user_id . '';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return User
     */
    public function get(): User
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, User::class);
    }

    /**
     * @param User $data
     * @return Message
     */
    public function put(User $data): Message
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
 * @Title("App Token")
 */
class App_Token
{
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    /**
     * @Key("token")
     * @Type("string")
     */
    protected $token;
    /**
     * @Key("scope")
     * @Type("string")
     */
    protected $scope;
    /**
     * @Key("ip")
     * @Type("string")
     */
    protected $ip;
    /**
     * @Key("expire")
     * @Type("string")
     * @Format("date-time")
     */
    protected $expire;
    /**
     * @Key("date")
     * @Type("string")
     * @Format("date-time")
     */
    protected $date;
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
     * @param string $token
     */
    public function setToken(?string $token)
    {
        $this->token = $token;
    }
    /**
     * @return string
     */
    public function getToken() : ?string
    {
        return $this->token;
    }
    /**
     * @param string $scope
     */
    public function setScope(?string $scope)
    {
        $this->scope = $scope;
    }
    /**
     * @return string
     */
    public function getScope() : ?string
    {
        return $this->scope;
    }
    /**
     * @param string $ip
     */
    public function setIp(?string $ip)
    {
        $this->ip = $ip;
    }
    /**
     * @return string
     */
    public function getIp() : ?string
    {
        return $this->ip;
    }
    /**
     * @param \DateTime $expire
     */
    public function setExpire(?\DateTime $expire)
    {
        $this->expire = $expire;
    }
    /**
     * @return \DateTime
     */
    public function getExpire() : ?\DateTime
    {
        return $this->expire;
    }
    /**
     * @param \DateTime $date
     */
    public function setDate(?\DateTime $date)
    {
        $this->date = $date;
    }
    /**
     * @return \DateTime
     */
    public function getDate() : ?\DateTime
    {
        return $this->date;
    }
}
/**
 * @Title("User Attributes")
 * @AdditionalProperties(@Schema(type="string"))
 */
class User_Attributes extends \ArrayObject
{
}
/**
 * @Title("App")
 */
class App
{
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    /**
     * @Key("userId")
     * @Type("integer")
     */
    protected $userId;
    /**
     * @Key("status")
     * @Type("integer")
     */
    protected $status;
    /**
     * @Key("name")
     * @Type("string")
     * @Pattern("^[a-zA-Z0-9\-\_]{3,64}$")
     */
    protected $name;
    /**
     * @Key("url")
     * @Type("string")
     */
    protected $url;
    /**
     * @Key("parameters")
     * @Type("string")
     */
    protected $parameters;
    /**
     * @Key("appKey")
     * @Type("string")
     */
    protected $appKey;
    /**
     * @Key("appSecret")
     * @Type("string")
     */
    protected $appSecret;
    /**
     * @Key("date")
     * @Type("string")
     * @Format("date-time")
     */
    protected $date;
    /**
     * @Key("scopes")
     * @Type("array")
     * @Items(@Schema(type="string"))
     */
    protected $scopes;
    /**
     * @Key("tokens")
     * @Type("array")
     * @Items(@Ref("BackendUserUser_id09\App_Token"))
     */
    protected $tokens;
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
     * @param int $userId
     */
    public function setUserId(?int $userId)
    {
        $this->userId = $userId;
    }
    /**
     * @return int
     */
    public function getUserId() : ?int
    {
        return $this->userId;
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
    /**
     * @param string $url
     */
    public function setUrl(?string $url)
    {
        $this->url = $url;
    }
    /**
     * @return string
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * @param string $parameters
     */
    public function setParameters(?string $parameters)
    {
        $this->parameters = $parameters;
    }
    /**
     * @return string
     */
    public function getParameters() : ?string
    {
        return $this->parameters;
    }
    /**
     * @param string $appKey
     */
    public function setAppKey(?string $appKey)
    {
        $this->appKey = $appKey;
    }
    /**
     * @return string
     */
    public function getAppKey() : ?string
    {
        return $this->appKey;
    }
    /**
     * @param string $appSecret
     */
    public function setAppSecret(?string $appSecret)
    {
        $this->appSecret = $appSecret;
    }
    /**
     * @return string
     */
    public function getAppSecret() : ?string
    {
        return $this->appSecret;
    }
    /**
     * @param \DateTime $date
     */
    public function setDate(?\DateTime $date)
    {
        $this->date = $date;
    }
    /**
     * @return \DateTime
     */
    public function getDate() : ?\DateTime
    {
        return $this->date;
    }
    /**
     * @param array<string> $scopes
     */
    public function setScopes(?array $scopes)
    {
        $this->scopes = $scopes;
    }
    /**
     * @return array<string>
     */
    public function getScopes() : ?array
    {
        return $this->scopes;
    }
    /**
     * @param array<App_Token> $tokens
     */
    public function setTokens(?array $tokens)
    {
        $this->tokens = $tokens;
    }
    /**
     * @return array<App_Token>
     */
    public function getTokens() : ?array
    {
        return $this->tokens;
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
 * @Title("User")
 */
class User
{
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    /**
     * @Key("status")
     * @Type("integer")
     */
    protected $status;
    /**
     * @Key("name")
     * @Type("string")
     * @Pattern("^[a-zA-Z0-9\-\_\.]{3,32}$")
     */
    protected $name;
    /**
     * @Key("email")
     * @Type("string")
     */
    protected $email;
    /**
     * @Key("points")
     * @Type("integer")
     */
    protected $points;
    /**
     * @Key("scopes")
     * @Type("array")
     * @Items(@Schema(type="string"))
     */
    protected $scopes;
    /**
     * @Key("apps")
     * @Type("array")
     * @Items(@Ref("BackendUserUser_id09\App"))
     */
    protected $apps;
    /**
     * @Key("attributes")
     * @Ref("BackendUserUser_id09\User_Attributes")
     */
    protected $attributes;
    /**
     * @Key("date")
     * @Type("string")
     * @Format("date-time")
     */
    protected $date;
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
    /**
     * @param string $email
     */
    public function setEmail(?string $email)
    {
        $this->email = $email;
    }
    /**
     * @return string
     */
    public function getEmail() : ?string
    {
        return $this->email;
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
     * @param array<string> $scopes
     */
    public function setScopes(?array $scopes)
    {
        $this->scopes = $scopes;
    }
    /**
     * @return array<string>
     */
    public function getScopes() : ?array
    {
        return $this->scopes;
    }
    /**
     * @param array<App> $apps
     */
    public function setApps(?array $apps)
    {
        $this->apps = $apps;
    }
    /**
     * @return array<App>
     */
    public function getApps() : ?array
    {
        return $this->apps;
    }
    /**
     * @param User_Attributes $attributes
     */
    public function setAttributes(?User_Attributes $attributes)
    {
        $this->attributes = $attributes;
    }
    /**
     * @return User_Attributes
     */
    public function getAttributes() : ?User_Attributes
    {
        return $this->attributes;
    }
    /**
     * @param \DateTime $date
     */
    public function setDate(?\DateTime $date)
    {
        $this->date = $date;
    }
    /**
     * @return \DateTime
     */
    public function getDate() : ?\DateTime
    {
        return $this->date;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("User")
     * @Ref("BackendUserUser_id09\User")
     */
    protected $User;
    /**
     * @Key("Message")
     * @Ref("BackendUserUser_id09\Message")
     */
    protected $Message;
    /**
     * @param User $User
     */
    public function setUser(?User $User)
    {
        $this->User = $User;
    }
    /**
     * @return User
     */
    public function getUser() : ?User
    {
        return $this->User;
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

