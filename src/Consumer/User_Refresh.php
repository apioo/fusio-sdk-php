<?php 
/**
 * User_Refresh generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Consumer;


class User_Refresh implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $refresh_token;
    /**
     * @param string|null $refresh_token
     */
    public function setRefresh_token(?string $refresh_token) : void
    {
        $this->refresh_token = $refresh_token;
    }
    /**
     * @return string|null
     */
    public function getRefresh_token() : ?string
    {
        return $this->refresh_token;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('refresh_token' => $this->refresh_token), static function ($value) : bool {
            return $value !== null;
        });
    }
}