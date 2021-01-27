<?php 
/**
 * BackendPlanContractContract_idPath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class BackendPlanContractContract_idPath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $contract_id;
    /**
     * @param string|null $contract_id
     */
    public function setContract_id(?string $contract_id) : void
    {
        $this->contract_id = $contract_id;
    }
    /**
     * @return string|null
     */
    public function getContract_id() : ?string
    {
        return $this->contract_id;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('contract_id' => $this->contract_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}