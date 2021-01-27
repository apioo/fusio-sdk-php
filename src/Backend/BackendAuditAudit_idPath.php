<?php 
/**
 * BackendAuditAudit_idPath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class BackendAuditAudit_idPath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $audit_id;
    /**
     * @param string|null $audit_id
     */
    public function setAudit_id(?string $audit_id) : void
    {
        $this->audit_id = $audit_id;
    }
    /**
     * @return string|null
     */
    public function getAudit_id() : ?string
    {
        return $this->audit_id;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('audit_id' => $this->audit_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}