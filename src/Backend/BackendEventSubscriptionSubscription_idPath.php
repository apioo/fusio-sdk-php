<?php 
/**
 * BackendEventSubscriptionSubscription_idPath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class BackendEventSubscriptionSubscription_idPath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $subscription_id;
    /**
     * @param string|null $subscription_id
     */
    public function setSubscription_id(?string $subscription_id) : void
    {
        $this->subscription_id = $subscription_id;
    }
    /**
     * @return string|null
     */
    public function getSubscription_id() : ?string
    {
        return $this->subscription_id;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('subscription_id' => $this->subscription_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}