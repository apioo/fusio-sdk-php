<?php
/**
 * ConsumerPlanPlan_idPath generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;


class ConsumerPlanPlan_idPath implements \JsonSerializable
{
    protected ?string $plan_id = null;
    public function setPlan_id(?string $plan_id) : void
    {
        $this->plan_id = $plan_id;
    }
    public function getPlan_id() : ?string
    {
        return $this->plan_id;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('plan_id' => $this->plan_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
