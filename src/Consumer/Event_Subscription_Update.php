<?php 
/**
 * Event_Subscription_Update generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Consumer;

/**
 * @Required({"event", "endpoint"})
 */
class Event_Subscription_Update implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $event;
    /**
     * @var string|null
     */
    protected $endpoint;
    /**
     * @param string|null $event
     */
    public function setEvent(?string $event) : void
    {
        $this->event = $event;
    }
    /**
     * @return string|null
     */
    public function getEvent() : ?string
    {
        return $this->event;
    }
    /**
     * @param string|null $endpoint
     */
    public function setEndpoint(?string $endpoint) : void
    {
        $this->endpoint = $endpoint;
    }
    /**
     * @return string|null
     */
    public function getEndpoint() : ?string
    {
        return $this->endpoint;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('event' => $this->event, 'endpoint' => $this->endpoint), static function ($value) : bool {
            return $value !== null;
        });
    }
}