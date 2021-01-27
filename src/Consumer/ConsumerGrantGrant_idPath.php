<?php 
/**
 * ConsumerGrantGrant_idPath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Consumer;


class ConsumerGrantGrant_idPath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $grant_id;
    /**
     * @param string|null $grant_id
     */
    public function setGrant_id(?string $grant_id) : void
    {
        $this->grant_id = $grant_id;
    }
    /**
     * @return string|null
     */
    public function getGrant_id() : ?string
    {
        return $this->grant_id;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('grant_id' => $this->grant_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}