<?php
/**
 * Account_ChangePassword generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use PSX\Schema\Attribute\MaxLength;
use PSX\Schema\Attribute\MinLength;

class Account_ChangePassword implements \JsonSerializable
{
    #[MinLength(8)]
    #[MaxLength(128)]
    protected ?string $oldPassword = null;
    #[MinLength(8)]
    #[MaxLength(128)]
    protected ?string $newPassword = null;
    #[MinLength(8)]
    #[MaxLength(128)]
    protected ?string $verifyPassword = null;
    public function setOldPassword(?string $oldPassword) : void
    {
        $this->oldPassword = $oldPassword;
    }
    public function getOldPassword() : ?string
    {
        return $this->oldPassword;
    }
    public function setNewPassword(?string $newPassword) : void
    {
        $this->newPassword = $newPassword;
    }
    public function getNewPassword() : ?string
    {
        return $this->newPassword;
    }
    public function setVerifyPassword(?string $verifyPassword) : void
    {
        $this->verifyPassword = $verifyPassword;
    }
    public function getVerifyPassword() : ?string
    {
        return $this->verifyPassword;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('oldPassword' => $this->oldPassword, 'newPassword' => $this->newPassword, 'verifyPassword' => $this->verifyPassword), static function ($value) : bool {
            return $value !== null;
        });
    }
}
