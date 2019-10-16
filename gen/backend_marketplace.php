<?php

namespace BackendMarketplace;

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

        $this->url = $baseUrl . '/backend/marketplace';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Marketplace_Collection
     */
    public function get(): Marketplace_Collection
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Marketplace_Collection::class);
    }

    /**
     * @param Marketplace_Install $data
     * @return Message
     */
    public function post(Marketplace_Install $data): Message
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
 * @Title("Marketplace App")
 */
class Marketplace_App
{
    /**
     * @Key("version")
     * @Type("string")
     */
    protected $version;
    /**
     * @Key("description")
     * @Type("string")
     */
    protected $description;
    /**
     * @Key("screenshot")
     * @Type("string")
     */
    protected $screenshot;
    /**
     * @Key("website")
     * @Type("string")
     */
    protected $website;
    /**
     * @Key("downloadUrl")
     * @Type("string")
     */
    protected $downloadUrl;
    /**
     * @Key("sha1Hash")
     * @Type("string")
     */
    protected $sha1Hash;
    /**
     * @param string $version
     */
    public function setVersion(?string $version)
    {
        $this->version = $version;
    }
    /**
     * @return string
     */
    public function getVersion() : ?string
    {
        return $this->version;
    }
    /**
     * @param string $description
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;
    }
    /**
     * @return string
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param string $screenshot
     */
    public function setScreenshot(?string $screenshot)
    {
        $this->screenshot = $screenshot;
    }
    /**
     * @return string
     */
    public function getScreenshot() : ?string
    {
        return $this->screenshot;
    }
    /**
     * @param string $website
     */
    public function setWebsite(?string $website)
    {
        $this->website = $website;
    }
    /**
     * @return string
     */
    public function getWebsite() : ?string
    {
        return $this->website;
    }
    /**
     * @param string $downloadUrl
     */
    public function setDownloadUrl(?string $downloadUrl)
    {
        $this->downloadUrl = $downloadUrl;
    }
    /**
     * @return string
     */
    public function getDownloadUrl() : ?string
    {
        return $this->downloadUrl;
    }
    /**
     * @param string $sha1Hash
     */
    public function setSha1Hash(?string $sha1Hash)
    {
        $this->sha1Hash = $sha1Hash;
    }
    /**
     * @return string
     */
    public function getSha1Hash() : ?string
    {
        return $this->sha1Hash;
    }
}
/**
 * @Title("Marketplace App Remote")
 */
class Marketplace_App_Remote
{
    /**
     * @Key("version")
     * @Type("string")
     */
    protected $version;
    /**
     * @Key("description")
     * @Type("string")
     */
    protected $description;
    /**
     * @Key("screenshot")
     * @Type("string")
     */
    protected $screenshot;
    /**
     * @Key("website")
     * @Type("string")
     */
    protected $website;
    /**
     * @Key("downloadUrl")
     * @Type("string")
     */
    protected $downloadUrl;
    /**
     * @Key("sha1Hash")
     * @Type("string")
     */
    protected $sha1Hash;
    /**
     * @Key("local")
     * @Ref("BackendMarketplace\Marketplace_App")
     */
    protected $local;
    /**
     * @param string $version
     */
    public function setVersion(?string $version)
    {
        $this->version = $version;
    }
    /**
     * @return string
     */
    public function getVersion() : ?string
    {
        return $this->version;
    }
    /**
     * @param string $description
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;
    }
    /**
     * @return string
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param string $screenshot
     */
    public function setScreenshot(?string $screenshot)
    {
        $this->screenshot = $screenshot;
    }
    /**
     * @return string
     */
    public function getScreenshot() : ?string
    {
        return $this->screenshot;
    }
    /**
     * @param string $website
     */
    public function setWebsite(?string $website)
    {
        $this->website = $website;
    }
    /**
     * @return string
     */
    public function getWebsite() : ?string
    {
        return $this->website;
    }
    /**
     * @param string $downloadUrl
     */
    public function setDownloadUrl(?string $downloadUrl)
    {
        $this->downloadUrl = $downloadUrl;
    }
    /**
     * @return string
     */
    public function getDownloadUrl() : ?string
    {
        return $this->downloadUrl;
    }
    /**
     * @param string $sha1Hash
     */
    public function setSha1Hash(?string $sha1Hash)
    {
        $this->sha1Hash = $sha1Hash;
    }
    /**
     * @return string
     */
    public function getSha1Hash() : ?string
    {
        return $this->sha1Hash;
    }
    /**
     * @param Marketplace_App $local
     */
    public function setLocal(?Marketplace_App $local)
    {
        $this->local = $local;
    }
    /**
     * @return Marketplace_App
     */
    public function getLocal() : ?Marketplace_App
    {
        return $this->local;
    }
}
/**
 * @Title("Marketplace Collection Apps")
 * @AdditionalProperties(@Ref("BackendMarketplace\Marketplace_App_Remote"))
 */
class Marketplace_Collection_Apps extends \ArrayObject
{
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
 * @Title("Marketplace Install")
 */
class Marketplace_Install
{
    /**
     * @Key("name")
     * @Type("string")
     */
    protected $name;
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
}
/**
 * @Title("Marketplace Collection")
 */
class Marketplace_Collection
{
    /**
     * @Key("apps")
     * @Ref("BackendMarketplace\Marketplace_Collection_Apps")
     */
    protected $apps;
    /**
     * @param Marketplace_Collection_Apps $apps
     */
    public function setApps(?Marketplace_Collection_Apps $apps)
    {
        $this->apps = $apps;
    }
    /**
     * @return Marketplace_Collection_Apps
     */
    public function getApps() : ?Marketplace_Collection_Apps
    {
        return $this->apps;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Marketplace_Collection")
     * @Ref("BackendMarketplace\Marketplace_Collection")
     */
    protected $Marketplace_Collection;
    /**
     * @Key("Marketplace_Install")
     * @Ref("BackendMarketplace\Marketplace_Install")
     */
    protected $Marketplace_Install;
    /**
     * @Key("Message")
     * @Ref("BackendMarketplace\Message")
     */
    protected $Message;
    /**
     * @param Marketplace_Collection $Marketplace_Collection
     */
    public function setMarketplace_Collection(?Marketplace_Collection $Marketplace_Collection)
    {
        $this->Marketplace_Collection = $Marketplace_Collection;
    }
    /**
     * @return Marketplace_Collection
     */
    public function getMarketplace_Collection() : ?Marketplace_Collection
    {
        return $this->Marketplace_Collection;
    }
    /**
     * @param Marketplace_Install $Marketplace_Install
     */
    public function setMarketplace_Install(?Marketplace_Install $Marketplace_Install)
    {
        $this->Marketplace_Install = $Marketplace_Install;
    }
    /**
     * @return Marketplace_Install
     */
    public function getMarketplace_Install() : ?Marketplace_Install
    {
        return $this->Marketplace_Install;
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

