<?php
/**
 * BackendEventEvent_idPath generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class BackendEventEvent_idPath implements \JsonSerializable
{
    protected ?string $event_id = null;
    public function setEvent_id(?string $event_id) : void
    {
        $this->event_id = $event_id;
    }
    public function getEvent_id() : ?string
    {
        return $this->event_id;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('event_id' => $this->event_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
