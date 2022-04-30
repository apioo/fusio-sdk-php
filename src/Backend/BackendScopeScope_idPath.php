<?php
/**
 * BackendScopeScope_idPath generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class BackendScopeScope_idPath implements \JsonSerializable
{
    protected ?string $scope_id = null;
    public function setScope_id(?string $scope_id) : void
    {
        $this->scope_id = $scope_id;
    }
    public function getScope_id() : ?string
    {
        return $this->scope_id;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('scope_id' => $this->scope_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
