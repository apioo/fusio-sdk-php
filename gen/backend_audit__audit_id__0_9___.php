<?php

namespace BackendAuditAudit_id09;

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
     * @var int
     */
    private $audit_id;

    public function __construct(int $audit_id, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        $this->audit_id = $audit_id;

        $this->url = $baseUrl . '/backend/audit/' . $audit_id . '';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Audit
     */
    public function get(): Audit
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Audit::class);
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
 * @Title("Audit Object")
 * @Description("A key value object containing the changes")
 */
class Audit_Object
{
}
/**
 * @Title("Audit User")
 */
class Audit_User
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
     */
    protected $name;
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
}
/**
 * @Title("Audit App")
 */
class Audit_App
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
     */
    protected $name;
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
}
/**
 * @Title("Audit")
 */
class Audit
{
    /**
     * @Key("id")
     * @Type("integer")
     */
    protected $id;
    /**
     * @Key("app")
     * @Ref("PSX\Generation\Audit_App")
     */
    protected $app;
    /**
     * @Key("user")
     * @Ref("PSX\Generation\Audit_User")
     */
    protected $user;
    /**
     * @Key("event")
     * @Type("string")
     */
    protected $event;
    /**
     * @Key("ip")
     * @Type("string")
     */
    protected $ip;
    /**
     * @Key("message")
     * @Type("string")
     */
    protected $message;
    /**
     * @Key("content")
     * @Ref("PSX\Generation\Audit_Object")
     */
    protected $content;
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
    public function setApp(?Audit_App $app)
    {
        $this->app = $app;
    }
    public function getApp() : ?Audit_App
    {
        return $this->app;
    }
    public function setUser(?Audit_User $user)
    {
        $this->user = $user;
    }
    public function getUser() : ?Audit_User
    {
        return $this->user;
    }
    public function setEvent(?string $event)
    {
        $this->event = $event;
    }
    public function getEvent() : ?string
    {
        return $this->event;
    }
    public function setIp(?string $ip)
    {
        $this->ip = $ip;
    }
    public function getIp() : ?string
    {
        return $this->ip;
    }
    public function setMessage(?string $message)
    {
        $this->message = $message;
    }
    public function getMessage() : ?string
    {
        return $this->message;
    }
    public function setContent(?Audit_Object $content)
    {
        $this->content = $content;
    }
    public function getContent() : ?Audit_Object
    {
        return $this->content;
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
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Audit")
     * @Ref("PSX\Generation\Audit")
     */
    protected $Audit;
    public function setAudit(?Audit $Audit)
    {
        $this->Audit = $Audit;
    }
    public function getAudit() : ?Audit
    {
        return $this->Audit;
    }
}

