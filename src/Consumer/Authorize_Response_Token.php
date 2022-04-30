<?php
/**
 * Authorize_Response_Token generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;


class Authorize_Response_Token implements \JsonSerializable
{
    protected ?string $access_token = null;
    protected ?string $token_type = null;
    protected ?string $expires_in = null;
    protected ?string $scope = null;
    public function setAccess_token(?string $access_token) : void
    {
        $this->access_token = $access_token;
    }
    public function getAccess_token() : ?string
    {
        return $this->access_token;
    }
    public function setToken_type(?string $token_type) : void
    {
        $this->token_type = $token_type;
    }
    public function getToken_type() : ?string
    {
        return $this->token_type;
    }
    public function setExpires_in(?string $expires_in) : void
    {
        $this->expires_in = $expires_in;
    }
    public function getExpires_in() : ?string
    {
        return $this->expires_in;
    }
    public function setScope(?string $scope) : void
    {
        $this->scope = $scope;
    }
    public function getScope() : ?string
    {
        return $this->scope;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('access_token' => $this->access_token, 'token_type' => $this->token_type, 'expires_in' => $this->expires_in, 'scope' => $this->scope), static function ($value) : bool {
            return $value !== null;
        });
    }
}
