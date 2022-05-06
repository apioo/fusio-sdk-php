<?php
/**
 * BackendAppTokenToken_idPath generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class BackendAppTokenToken_idPath implements \JsonSerializable
{
    protected ?string $token_id = null;
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
        return (object) array_filter(array('token_id' => $this->token_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
