<?php
/**
 * ConsumerPagePage_idPath generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;


class ConsumerPagePage_idPath implements \JsonSerializable
{
    protected ?string $page_id = null;
    public function setPage_id(?string $page_id) : void
    {
        $this->page_id = $page_id;
    }
    public function getPage_id() : ?string
    {
        return $this->page_id;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('page_id' => $this->page_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
