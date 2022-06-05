<?php
/**
 * User_Provider generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;


class User_Provider implements \JsonSerializable
{
    protected ?string $code = null;
    protected ?string $clientId = null;
    protected ?string $redirectUri = null;
    public function setCode(?string $code) : void
    {
        $this->code = $code;
    }
    public function getCode() : ?string
    {
        return $this->code;
    }
    public function setClientId(?string $clientId) : void
    {
        $this->clientId = $clientId;
    }
    public function getClientId() : ?string
    {
        return $this->clientId;
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
        return (object) array_filter(array('code' => $this->code, 'clientId' => $this->clientId, 'redirectUri' => $this->redirectUri), static function ($value) : bool {
            return $value !== null;
        });
    }
}
