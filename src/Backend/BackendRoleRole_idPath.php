<?php
/**
 * BackendRoleRole_idPath automatically generated by SDKgen please do not edit this file manually
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
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('role_id' => $this->role_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
