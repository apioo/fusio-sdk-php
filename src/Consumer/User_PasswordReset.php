<?php
/**
 * User_PasswordReset generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use PSX\Schema\Attribute\Required;

#[Required(array('token', 'newPassword'))]
class User_PasswordReset implements \JsonSerializable
{
    protected ?string $token = null;
    protected ?string $newPassword = null;
    public function setToken(?string $token) : void
    {
        $this->token = $token;
    }
    public function getToken() : ?string
    {
        return $this->token;
    }
    public function setNewPassword(?string $newPassword) : void
    {
        $this->newPassword = $newPassword;
    }
    public function getNewPassword() : ?string
    {
        return $this->newPassword;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('token' => $this->token, 'newPassword' => $this->newPassword), static function ($value) : bool {
            return $value !== null;
        });
    }
}
