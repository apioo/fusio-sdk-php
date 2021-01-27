<?php 
/**
 * User_Create generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;

/**
 * @Required({"roleId", "status", "name", "email", "password"})
 */
class User_Create extends User implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $password;
    /**
     * @param string|null $password
     */
    public function setPassword(?string $password) : void
    {
        $this->password = $password;
    }
    /**
     * @return string|null
     */
    public function getPassword() : ?string
    {
        return $this->password;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('password' => $this->password), static function ($value) : bool {
            return $value !== null;
        }));
    }
}