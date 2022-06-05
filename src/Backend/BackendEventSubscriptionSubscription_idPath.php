<?php
/**
 * BackendEventSubscriptionSubscription_idPath generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class BackendEventSubscriptionSubscription_idPath implements \JsonSerializable
{
    protected ?string $subscription_id = null;
    public function setSubscription_id(?string $subscription_id) : void
    {
        $this->subscription_id = $subscription_id;
    }
    public function getSubscription_id() : ?string
    {
        return $this->subscription_id;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('subscription_id' => $this->subscription_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
