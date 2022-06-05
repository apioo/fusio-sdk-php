<?php
/**
 * BackendTrashTypePath generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class BackendTrashTypePath implements \JsonSerializable
{
    protected ?string $type = null;
    public function setType(?string $type) : void
    {
        $this->type = $type;
    }
    public function getType() : ?string
    {
        return $this->type;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('type' => $this->type), static function ($value) : bool {
            return $value !== null;
        });
    }
}
