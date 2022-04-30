<?php
/**
 * App generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use PSX\Schema\Attribute\MinLength;
use PSX\Schema\Attribute\Pattern;

class App implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $userId = null;
    protected ?int $status = null;
    #[Pattern('^[A-z0-9\\-\\_]{3,64}$')]
    protected ?string $name = null;
    #[MinLength(8)]
    protected ?string $url = null;
    protected ?string $appKey = null;
    protected ?string $appSecret = null;
    protected ?string $date = null;
    /**
     * @var array<string>|null
     */
    protected ?array $scopes = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setUserId(?int $userId) : void
    {
        $this->userId = $userId;
    }
    public function getUserId() : ?int
    {
        return $this->userId;
    }
    public function setStatus(?int $status) : void
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setUrl(?string $url) : void
    {
        $this->url = $url;
    }
    public function getUrl() : ?string
    {
        return $this->url;
    }
    public function setAppKey(?string $appKey) : void
    {
        $this->appKey = $appKey;
    }
    public function getAppKey() : ?string
    {
        return $this->appKey;
    }
    public function setAppSecret(?string $appSecret) : void
    {
        $this->appSecret = $appSecret;
    }
    public function getAppSecret() : ?string
    {
        return $this->appSecret;
    }
    public function setDate(?string $date) : void
    {
        $this->date = $date;
    }
    public function getDate() : ?string
    {
        return $this->date;
    }
    /**
     * @param array<string>|null $scopes
     */
    public function setScopes(?array $scopes) : void
    {
        $this->scopes = $scopes;
    }
    public function getScopes() : ?array
    {
        return $this->scopes;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id, 'userId' => $this->userId, 'status' => $this->status, 'name' => $this->name, 'url' => $this->url, 'appKey' => $this->appKey, 'appSecret' => $this->appSecret, 'date' => $this->date, 'scopes' => $this->scopes), static function ($value) : bool {
            return $value !== null;
        });
    }
}
