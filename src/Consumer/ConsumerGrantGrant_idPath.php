<?php
/**
 * ConsumerGrantGrant_idPath generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;


class ConsumerGrantGrant_idPath implements \JsonSerializable
{
    protected ?string $grant_id = null;
    public function setGrant_id(?string $grant_id) : void
    {
        $this->grant_id = $grant_id;
    }
    public function getGrant_id() : ?string
    {
        return $this->grant_id;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('grant_id' => $this->grant_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
