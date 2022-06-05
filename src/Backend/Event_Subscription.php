<?php
/**
 * Event_Subscription generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Event_Subscription implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $eventId = null;
    protected ?int $userId = null;
    protected ?string $endpoint = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setEventId(?int $eventId) : void
    {
        $this->eventId = $eventId;
    }
    public function getEventId() : ?int
    {
        return $this->eventId;
    }
    public function setUserId(?int $userId) : void
    {
        $this->userId = $userId;
    }
    public function getUserId() : ?int
    {
        return $this->userId;
    }
    public function setEndpoint(?string $endpoint) : void
    {
        $this->endpoint = $endpoint;
    }
    public function getEndpoint() : ?string
    {
        return $this->endpoint;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id, 'eventId' => $this->eventId, 'userId' => $this->userId, 'endpoint' => $this->endpoint), static function ($value) : bool {
            return $value !== null;
        });
    }
}
