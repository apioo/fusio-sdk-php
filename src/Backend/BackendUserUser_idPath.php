<?php
/**
 * BackendUserUser_idPath automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class BackendUserUser_idPath implements \JsonSerializable
{
    protected ?string $user_id = null;
    public function setUser_id(?string $user_id) : void
    {
        $this->user_id = $user_id;
    }
    public function getUser_id() : ?string
    {
        return $this->user_id;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('user_id' => $this->user_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
