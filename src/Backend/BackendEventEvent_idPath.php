<?php 
/**
 * BackendEventEvent_idPath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class BackendEventEvent_idPath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $event_id;
    /**
     * @param string|null $event_id
     */
    public function setEvent_id(?string $event_id) : void
    {
        $this->event_id = $event_id;
    }
    /**
     * @return string|null
     */
    public function getEvent_id() : ?string
    {
        return $this->event_id;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('event_id' => $this->event_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}