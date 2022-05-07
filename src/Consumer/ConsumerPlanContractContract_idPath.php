<?php
/**
 * ConsumerPlanContractContract_idPath generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;


class ConsumerPlanContractContract_idPath implements \JsonSerializable
{
    protected ?string $contract_id = null;
    public function setContract_id(?string $contract_id) : void
    {
        $this->contract_id = $contract_id;
    }
    public function getContract_id() : ?string
    {
        return $this->contract_id;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('contract_id' => $this->contract_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
