<?php

namespace BackendMarketplaceApp_name;

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
     * @var string
     */
    private $app_name;

    public function __construct(string $app_name, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        $this->app_name = $app_name;

        $this->url = $baseUrl . '/backend/marketplace/' . $app_name . '';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Marketplace_App_Local
     */
    public function get(): Marketplace_App_Local
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Marketplace_App_Local::class);
    }

    /**
     * @return Message
     */
    public function put(): Message
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
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
 * @Title("Marketplace App Local")
 */
class Marketplace_App_Local
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
     * @Key("remote")
     * @Ref("BackendMarketplaceApp_name\Marketplace_App")
     */
    protected $remote;
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
     * @param Marketplace_App $remote
     */
    public function setRemote(?Marketplace_App $remote)
    {
        $this->remote = $remote;
    }
    /**
     * @return Marketplace_App
     */
    public function getRemote() : ?Marketplace_App
    {
        return $this->remote;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Marketplace_App_Local")
     * @Ref("BackendMarketplaceApp_name\Marketplace_App_Local")
     */
    protected $Marketplace_App_Local;
    /**
     * @Key("Message")
     * @Ref("BackendMarketplaceApp_name\Message")
     */
    protected $Message;
    /**
     * @param Marketplace_App_Local $Marketplace_App_Local
     */
    public function setMarketplace_App_Local(?Marketplace_App_Local $Marketplace_App_Local)
    {
        $this->Marketplace_App_Local = $Marketplace_App_Local;
    }
    /**
     * @return Marketplace_App_Local
     */
    public function getMarketplace_App_Local() : ?Marketplace_App_Local
    {
        return $this->Marketplace_App_Local;
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

