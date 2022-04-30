<?php
/**
 * Plan_Invoice_Create generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use PSX\Schema\Attribute\Required;

#[Required(array('contractId', 'startDate'))]
class Plan_Invoice_Create implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $contractId = null;
    protected ?\DateTime $startDate = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setContractId(?int $contractId) : void
    {
        $this->contractId = $contractId;
    }
    public function getContractId() : ?int
    {
        return $this->contractId;
    }
    public function setStartDate(?\DateTime $startDate) : void
    {
        $this->startDate = $startDate;
    }
    public function getStartDate() : ?\DateTime
    {
        return $this->startDate;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id, 'contractId' => $this->contractId, 'startDate' => $this->startDate), static function ($value) : bool {
            return $value !== null;
        });
    }
}
