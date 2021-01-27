<?php 
/**
 * BackendAppTokenToken_idPath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class BackendAppTokenToken_idPath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $token_id;
    /**
     * @param string|null $token_id
     */
    public function setToken_id(?string $token_id) : void
    {
        $this->token_id = $token_id;
    }
    /**
     * @return string|null
     */
    public function getToken_id() : ?string
    {
        return $this->token_id;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('token_id' => $this->token_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}