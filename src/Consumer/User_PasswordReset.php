<?php 
/**
 * User_PasswordReset generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Consumer;

/**
 * @Required({"token", "newPassword"})
 */
class User_PasswordReset implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $token;
    /**
     * @var string|null
     */
    protected $newPassword;
    /**
     * @param string|null $token
     */
    public function setToken(?string $token) : void
    {
        $this->token = $token;
    }
    /**
     * @return string|null
     */
    public function getToken() : ?string
    {
        return $this->token;
    }
    /**
     * @param string|null $newPassword
     */
    public function setNewPassword(?string $newPassword) : void
    {
        $this->newPassword = $newPassword;
    }
    /**
     * @return string|null
     */
    public function getNewPassword() : ?string
    {
        return $this->newPassword;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('token' => $this->token, 'newPassword' => $this->newPassword), static function ($value) : bool {
            return $value !== null;
        });
    }
}