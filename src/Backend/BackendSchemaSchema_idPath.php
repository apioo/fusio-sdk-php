<?php
/**
 * BackendSchemaSchema_idPath generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class BackendSchemaSchema_idPath implements \JsonSerializable
{
    protected ?string $schema_id = null;
    public function setSchema_id(?string $schema_id) : void
    {
        $this->schema_id = $schema_id;
    }
    public function getSchema_id() : ?string
    {
        return $this->schema_id;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('schema_id' => $this->schema_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
