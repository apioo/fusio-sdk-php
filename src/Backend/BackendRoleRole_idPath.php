<?php
/**
 * BackendRoleRole_idPath generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class BackendRoleRole_idPath implements \JsonSerializable
{
    protected ?string $role_id = null;
    public function setRole_id(?string $role_id) : void
    {
        $this->role_id = $role_id;
    }
    public function getRole_id() : ?string
    {
        return $this->role_id;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('role_id' => $this->role_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
