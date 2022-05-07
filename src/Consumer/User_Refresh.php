<?php
/**
 * User_Refresh generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;


class User_Refresh implements \JsonSerializable
{
    protected ?string $refresh_token = null;
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
        return (object) array_filter(array('refresh_token' => $this->refresh_token), static function ($value) : bool {
            return $value !== null;
        });
    }
}
