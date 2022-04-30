<?php
/**
 * BackendUserUser_idPath generated on 2022-04-30
 * @see https://sdkgen.app
 */

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
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('user_id' => $this->user_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
