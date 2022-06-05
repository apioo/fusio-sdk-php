<?php
/**
 * User_JWT generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;


class User_JWT implements \JsonSerializable
{
    protected ?string $token = null;
    protected ?string $expires_in = null;
    protected ?string $refresh_token = null;
    public function setToken(?string $token) : void
    {
        $this->token = $token;
    }
    public function getToken() : ?string
    {
        return $this->token;
    }
    public function setExpires_in(?string $expires_in) : void
    {
        $this->expires_in = $expires_in;
    }
    public function getExpires_in() : ?string
    {
        return $this->expires_in;
    }
    public function setRefresh_token(?string $refresh_token) : void
    {
        $this->refresh_token = $refresh_token;
    }
    public function getRefresh_token() : ?string
    {
        return $this->refresh_token;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('token' => $this->token, 'expires_in' => $this->expires_in, 'refresh_token' => $this->refresh_token), static function ($value) : bool {
            return $value !== null;
        });
    }
}
