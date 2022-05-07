<?php
/**
 * Event_Subscription generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;


class Event_Subscription implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $status = null;
    protected ?string $event = null;
    protected ?string $endpoint = null;
    /**
     * @var array<Event_Subscription_Response>|null
     */
    protected ?array $responses = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setStatus(?int $status) : void
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setEvent(?string $event) : void
    {
        $this->event = $event;
    }
    public function getEvent() : ?string
    {
        return $this->event;
    }
    public function setEndpoint(?string $endpoint) : void
    {
        $this->endpoint = $endpoint;
    }
    public function getEndpoint() : ?string
    {
        return $this->endpoint;
    }
    /**
     * @param array<Event_Subscription_Response>|null $responses
     */
    public function setResponses(?array $responses) : void
    {
        $this->responses = $responses;
    }
    public function getResponses() : ?array
    {
        return $this->responses;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id, 'status' => $this->status, 'event' => $this->event, 'endpoint' => $this->endpoint, 'responses' => $this->responses), static function ($value) : bool {
            return $value !== null;
        });
    }
}
