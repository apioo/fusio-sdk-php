<?php
/**
 * App generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use PSX\Schema\Attribute\Pattern;

class App implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $userId = null;
    protected ?int $status = null;
    #[Pattern('^[a-zA-Z0-9\\-\\_]{3,64}$')]
    protected ?string $name = null;
    protected ?string $url = null;
    protected ?string $parameters = null;
    protected ?string $appKey = null;
    protected ?string $appSecret = null;
    protected ?\DateTime $date = null;
    /**
     * @var array<string>|null
     */
    protected ?array $scopes = null;
    /**
     * @var array<App_Token>|null
     */
    protected ?array $tokens = null;
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
    public function setParameters(?string $parameters) : void
    {
        $this->parameters = $parameters;
    }
    public function getParameters() : ?string
    {
        return $this->parameters;
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
    public function setDate(?\DateTime $date) : void
    {
        $this->date = $date;
    }
    public function getDate() : ?\DateTime
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
    /**
     * @param array<App_Token>|null $tokens
     */
    public function setTokens(?array $tokens) : void
    {
        $this->tokens = $tokens;
    }
    public function getTokens() : ?array
    {
        return $this->tokens;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id, 'userId' => $this->userId, 'status' => $this->status, 'name' => $this->name, 'url' => $this->url, 'parameters' => $this->parameters, 'appKey' => $this->appKey, 'appSecret' => $this->appSecret, 'date' => $this->date, 'scopes' => $this->scopes, 'tokens' => $this->tokens), static function ($value) : bool {
            return $value !== null;
        });
    }
}
