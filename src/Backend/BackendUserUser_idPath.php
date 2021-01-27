<?php 
/**
 * BackendUserUser_idPath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class BackendUserUser_idPath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $user_id;
    /**
     * @param string|null $user_id
     */
    public function setUser_id(?string $user_id) : void
    {
        $this->user_id = $user_id;
    }
    /**
     * @return string|null
     */
    public function getUser_id() : ?string
    {
        return $this->user_id;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('user_id' => $this->user_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}