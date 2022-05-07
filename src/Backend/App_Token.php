<?php
/**
 * App_Token generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class App_Token implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?string $token = null;
    protected ?string $scope = null;
    protected ?string $ip = null;
    protected ?\DateTime $expire = null;
    protected ?\DateTime $date = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setToken(?string $token) : void
    {
        $this->token = $token;
    }
    public function getToken() : ?string
    {
        return $this->token;
    }
    public function setScope(?string $scope) : void
    {
        $this->scope = $scope;
    }
    public function getScope() : ?string
    {
        return $this->scope;
    }
    public function setIp(?string $ip) : void
    {
        $this->ip = $ip;
    }
    public function getIp() : ?string
    {
        return $this->ip;
    }
    public function setExpire(?\DateTime $expire) : void
    {
        $this->expire = $expire;
    }
    public function getExpire() : ?\DateTime
    {
        return $this->expire;
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
        return (object) array_filter(array('id' => $this->id, 'token' => $this->token, 'scope' => $this->scope, 'ip' => $this->ip, 'expire' => $this->expire, 'date' => $this->date), static function ($value) : bool {
            return $value !== null;
        });
    }
}
