<?php
/**
 * Log generated on 2022-04-30
 * @see https://sdkgen.app
 */

class Log implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $appId = null;
    protected ?string $ip = null;
    protected ?string $userAgent = null;
    protected ?string $method = null;
    protected ?string $path = null;
    protected ?string $header = null;
    protected ?string $body = null;
    protected ?\DateTime $date = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setAppId(?int $appId) : void
    {
        $this->appId = $appId;
    }
    public function getAppId() : ?int
    {
        return $this->appId;
    }
    public function setIp(?string $ip) : void
    {
        $this->ip = $ip;
    }
    public function getIp() : ?string
    {
        return $this->ip;
    }
    public function setUserAgent(?string $userAgent) : void
    {
        $this->userAgent = $userAgent;
    }
    public function getUserAgent() : ?string
    {
        return $this->userAgent;
    }
    public function setMethod(?string $method) : void
    {
        $this->method = $method;
    }
    public function getMethod() : ?string
    {
        return $this->method;
    }
    public function setPath(?string $path) : void
    {
        $this->path = $path;
    }
    public function getPath() : ?string
    {
        return $this->path;
    }
    public function setHeader(?string $header) : void
    {
        $this->header = $header;
    }
    public function getHeader() : ?string
    {
        return $this->header;
    }
    public function setBody(?string $body) : void
    {
        $this->body = $body;
    }
    public function getBody() : ?string
    {
        return $this->body;
    }
    public function setDate(?\DateTime $date) : void
    {
        $this->date = $date;
    }
    public function getDate() : ?\DateTime
    {
        return $this->date;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id, 'appId' => $this->appId, 'ip' => $this->ip, 'userAgent' => $this->userAgent, 'method' => $this->method, 'path' => $this->path, 'header' => $this->header, 'body' => $this->body, 'date' => $this->date), static function ($value) : bool {
            return $value !== null;
        });
    }
}
