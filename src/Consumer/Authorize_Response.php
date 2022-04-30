<?php
/**
 * Authorize_Response generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;


class Authorize_Response implements \JsonSerializable
{
    protected ?string $type = null;
    protected ?Authorize_Response_Token $token = null;
    protected ?string $code = null;
    protected ?string $redirectUri = null;
    public function setType(?string $type) : void
    {
        $this->type = $type;
    }
    public function getType() : ?string
    {
        return $this->type;
    }
    public function setToken(?Authorize_Response_Token $token) : void
    {
        $this->token = $token;
    }
    public function getToken() : ?Authorize_Response_Token
    {
        return $this->token;
    }
    public function setCode(?string $code) : void
    {
        $this->code = $code;
    }
    public function getCode() : ?string
    {
        return $this->code;
    }
    public function setRedirectUri(?string $redirectUri) : void
    {
        $this->redirectUri = $redirectUri;
    }
    public function getRedirectUri() : ?string
    {
        return $this->redirectUri;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('type' => $this->type, 'token' => $this->token, 'code' => $this->code, 'redirectUri' => $this->redirectUri), static function ($value) : bool {
            return $value !== null;
        });
    }
}
