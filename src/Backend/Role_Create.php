<?php
/**
 * Role_Create generated on 2022-04-30
 * @see https://sdkgen.app
 */

use PSX\Schema\Attribute\Required;

#[Required(array('categoryId', 'name'))]
class Role_Create extends Role implements \JsonSerializable
{
}
