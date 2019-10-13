<?php

namespace BackendUser;

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

        $this->url = $baseUrl . '/backend/user';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @param GetQuery $query
     * @return User_Collection
     */
    public function get(GetQuery $query): User_Collection
    {
        $options = [
            'query' => $this->convertToArray($query),
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, User_Collection::class);
    }

    /**
     * @param User $data
     * @return Message
     */
    public function post(User $data): Message
    {
        $options = [
            'json' => $this->convertToArray($data)
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
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
    public function setId(?int $id)
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setToken(?string $token)
    {
        $this->token = $token;
    }
    public function getToken() : ?string
    {
        return $this->token;
    }
    public function setScope(?string $scope)
    {
        $this->scope = $scope;
    }
    public function getScope() : ?string
    {
        return $this->scope;
    }
    public function setIp(?string $ip)
    {
        $this->ip = $ip;
    }
    public function getIp() : ?string
    {
        return $this->ip;
    }
    public function setExpire(?\DateTime $expire)
    {
        $this->expire = $expire;
    }
    public function getExpire() : ?\DateTime
    {
        return $this->expire;
    }
    public function setDate(?\DateTime $date)
    {
        $this->date = $date;
    }
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
     * @Items(@Ref("PSX\Generation\App_Token"))
     */
    protected $tokens;
    public function setId(?int $id)
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setUserId(?int $userId)
    {
        $this->userId = $userId;
    }
    public function getUserId() : ?int
    {
        return $this->userId;
    }
    public function setStatus(?int $status)
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setName(?string $name)
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setUrl(?string $url)
    {
        $this->url = $url;
    }
    public function getUrl() : ?string
    {
        return $this->url;
    }
    public function setParameters(?string $parameters)
    {
        $this->parameters = $parameters;
    }
    public function getParameters() : ?string
    {
        return $this->parameters;
    }
    public function setAppKey(?string $appKey)
    {
        $this->appKey = $appKey;
    }
    public function getAppKey() : ?string
    {
        return $this->appKey;
    }
    public function setAppSecret(?string $appSecret)
    {
        $this->appSecret = $appSecret;
    }
    public function getAppSecret() : ?string
    {
        return $this->appSecret;
    }
    public function setDate(?\DateTime $date)
    {
        $this->date = $date;
    }
    public function getDate() : ?\DateTime
    {
        return $this->date;
    }
    public function setScopes(?array $scopes)
    {
        $this->scopes = $scopes;
    }
    public function getScopes() : ?array
    {
        return $this->scopes;
    }
    public function setTokens(?array $tokens)
    {
        $this->tokens = $tokens;
    }
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
    public function setSuccess(?bool $success)
    {
        $this->success = $success;
    }
    public function getSuccess() : ?bool
    {
        return $this->success;
    }
    public function setMessage(?string $message)
    {
        $this->message = $message;
    }
    public function getMessage() : ?string
    {
        return $this->message;
    }
}
/**
 * @Title("User")
 * @Required({"status", "name", "email", "password"})
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
     * @Items(@Ref("PSX\Generation\App"))
     */
    protected $apps;
    /**
     * @Key("attributes")
     * @Ref("PSX\Generation\User_Attributes")
     */
    protected $attributes;
    /**
     * @Key("date")
     * @Type("string")
     * @Format("date-time")
     */
    protected $date;
    /**
     * @Key("password")
     * @Type("string")
     */
    protected $password;
    public function setId(?int $id)
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setStatus(?int $status)
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setName(?string $name)
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setEmail(?string $email)
    {
        $this->email = $email;
    }
    public function getEmail() : ?string
    {
        return $this->email;
    }
    public function setPoints(?int $points)
    {
        $this->points = $points;
    }
    public function getPoints() : ?int
    {
        return $this->points;
    }
    public function setScopes(?array $scopes)
    {
        $this->scopes = $scopes;
    }
    public function getScopes() : ?array
    {
        return $this->scopes;
    }
    public function setApps(?array $apps)
    {
        $this->apps = $apps;
    }
    public function getApps() : ?array
    {
        return $this->apps;
    }
    public function setAttributes(?User_Attributes $attributes)
    {
        $this->attributes = $attributes;
    }
    public function getAttributes() : ?User_Attributes
    {
        return $this->attributes;
    }
    public function setDate(?\DateTime $date)
    {
        $this->date = $date;
    }
    public function getDate() : ?\DateTime
    {
        return $this->date;
    }
    public function setPassword(?string $password)
    {
        $this->password = $password;
    }
    public function getPassword() : ?string
    {
        return $this->password;
    }
}
/**
 * @Title("User Collection")
 */
class User_Collection
{
    /**
     * @Key("totalResults")
     * @Type("integer")
     */
    protected $totalResults;
    /**
     * @Key("startIndex")
     * @Type("integer")
     */
    protected $startIndex;
    /**
     * @Key("entry")
     * @Type("array")
     * @Items(@Ref("PSX\Generation\User"))
     */
    protected $entry;
    public function setTotalResults(?int $totalResults)
    {
        $this->totalResults = $totalResults;
    }
    public function getTotalResults() : ?int
    {
        return $this->totalResults;
    }
    public function setStartIndex(?int $startIndex)
    {
        $this->startIndex = $startIndex;
    }
    public function getStartIndex() : ?int
    {
        return $this->startIndex;
    }
    public function setEntry(?array $entry)
    {
        $this->entry = $entry;
    }
    public function getEntry() : ?array
    {
        return $this->entry;
    }
}
/**
 * @Title("GetQuery")
 */
class GetQuery
{
    /**
     * @Key("startIndex")
     * @Type("integer")
     */
    protected $startIndex;
    /**
     * @Key("count")
     * @Type("integer")
     */
    protected $count;
    /**
     * @Key("search")
     * @Type("string")
     */
    protected $search;
    public function setStartIndex(?int $startIndex)
    {
        $this->startIndex = $startIndex;
    }
    public function getStartIndex() : ?int
    {
        return $this->startIndex;
    }
    public function setCount(?int $count)
    {
        $this->count = $count;
    }
    public function getCount() : ?int
    {
        return $this->count;
    }
    public function setSearch(?string $search)
    {
        $this->search = $search;
    }
    public function getSearch() : ?string
    {
        return $this->search;
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
     * @Key("User_Collection")
     * @Ref("PSX\Generation\User_Collection")
     */
    protected $User_Collection;
    /**
     * @Key("User")
     * @Ref("PSX\Generation\User")
     */
    protected $User;
    /**
     * @Key("Message")
     * @Ref("PSX\Generation\Message")
     */
    protected $Message;
    public function setGetQuery(?GetQuery $GetQuery)
    {
        $this->GetQuery = $GetQuery;
    }
    public function getGetQuery() : ?GetQuery
    {
        return $this->GetQuery;
    }
    public function setUser_Collection(?User_Collection $User_Collection)
    {
        $this->User_Collection = $User_Collection;
    }
    public function getUser_Collection() : ?User_Collection
    {
        return $this->User_Collection;
    }
    public function setUser(?User $User)
    {
        $this->User = $User;
    }
    public function getUser() : ?User
    {
        return $this->User;
    }
    public function setMessage(?Message $Message)
    {
        $this->Message = $Message;
    }
    public function getMessage() : ?Message
    {
        return $this->Message;
    }
}

