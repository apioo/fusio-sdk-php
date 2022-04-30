<?php
/**
 * Plan_Contract_Create generated on 2022-04-30
 * @see https://sdkgen.app
 */

use PSX\Schema\Attribute\Required;

#[Required(array('userId', 'planId'))]
class Plan_Contract_Create implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $userId = null;
    protected ?int $planId = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setUserId(?int $userId) : void
    {
        $this->userId = $userId;
    }
    public function getUserId() : ?int
    {
        return $this->userId;
    }
    public function setPlanId(?int $planId) : void
    {
        $this->planId = $planId;
    }
    public function getPlanId() : ?int
    {
        return $this->planId;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id, 'userId' => $this->userId, 'planId' => $this->planId), static function ($value) : bool {
            return $value !== null;
        });
    }
}
