<?php
/**
 * User_Login generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;


class User_Login implements \JsonSerializable
{
    protected ?string $username = null;
    protected ?string $password = null;
    /**
     * @var array<string>|null
     */
    protected ?array $scopes = null;
    public function setUsername(?string $username) : void
    {
        $this->username = $username;
    }
    public function getUsername() : ?string
    {
        return $this->username;
    }
    public function setPassword(?string $password) : void
    {
        $this->password = $password;
    }
    public function getPassword() : ?string
    {
        return $this->password;
    }
    /**
     * @param array<string>|null $scopes
     */
    public function setScopes(?array $scopes) : void
    {
        $this->scopes = $scopes;
    }
    public function getScopes() : ?array
    {
        return $this->scopes;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('username' => $this->username, 'password' => $this->password, 'scopes' => $this->scopes), static function ($value) : bool {
            return $value !== null;
        });
    }
}
