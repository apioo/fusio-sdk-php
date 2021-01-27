<?php 
/**
 * ConsumerPlanPlan_idPath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Consumer;


class ConsumerPlanPlan_idPath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $plan_id;
    /**
     * @param string|null $plan_id
     */
    public function setPlan_id(?string $plan_id) : void
    {
        $this->plan_id = $plan_id;
    }
    /**
     * @return string|null
     */
    public function getPlan_id() : ?string
    {
        return $this->plan_id;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('plan_id' => $this->plan_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}