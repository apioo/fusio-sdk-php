<?php
/**
 * BackendAppApp_idTokenToken_idPath generated on 2022-04-30
 * @see https://sdkgen.app
 */

class BackendAppApp_idTokenToken_idPath implements \JsonSerializable
{
    protected ?string $app_id = null;
    protected ?string $token_id = null;
    public function setApp_id(?string $app_id) : void
    {
        $this->app_id = $app_id;
    }
    public function getApp_id() : ?string
    {
        return $this->app_id;
    }
    public function setToken_id(?string $token_id) : void
    {
        $this->token_id = $token_id;
    }
    public function getToken_id() : ?string
    {
        return $this->token_id;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('app_id' => $this->app_id, 'token_id' => $this->token_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
