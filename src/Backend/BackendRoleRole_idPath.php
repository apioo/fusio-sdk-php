<?php 
/**
 * BackendRoleRole_idPath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class BackendRoleRole_idPath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $role_id;
    /**
     * @param string|null $role_id
     */
    public function setRole_id(?string $role_id) : void
    {
        $this->role_id = $role_id;
    }
    /**
     * @return string|null
     */
    public function getRole_id() : ?string
    {
        return $this->role_id;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('role_id' => $this->role_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}