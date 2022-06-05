<?php
/**
 * BackendAuditAudit_idPath generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class BackendAuditAudit_idPath implements \JsonSerializable
{
    protected ?string $audit_id = null;
    public function setAudit_id(?string $audit_id) : void
    {
        $this->audit_id = $audit_id;
    }
    public function getAudit_id() : ?string
    {
        return $this->audit_id;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('audit_id' => $this->audit_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
