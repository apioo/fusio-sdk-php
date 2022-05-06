<?php
/**
 * Schema_Preview_Response generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Schema_Preview_Response implements \JsonSerializable
{
    protected ?string $preview = null;
    public function setPreview(?string $preview) : void
    {
        $this->preview = $preview;
    }
    public function getPreview() : ?string
    {
        return $this->preview;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('preview' => $this->preview), static function ($value) : bool {
            return $value !== null;
        });
    }
}
