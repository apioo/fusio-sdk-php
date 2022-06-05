<?php
/**
 * BackendPagePage_idPath generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class BackendPagePage_idPath implements \JsonSerializable
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
