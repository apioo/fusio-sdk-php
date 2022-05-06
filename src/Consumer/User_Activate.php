<?php
/**
 * User_Activate generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use PSX\Schema\Attribute\Required;

#[Required(array('token'))]
class User_Activate implements \JsonSerializable
{
    protected ?string $token = null;
    public function setToken(?string $token) : void
    {
        $this->token = $token;
    }
    public function getToken() : ?string
    {
        return $this->token;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('token' => $this->token), static function ($value) : bool {
            return $value !== null;
        });
    }
}
