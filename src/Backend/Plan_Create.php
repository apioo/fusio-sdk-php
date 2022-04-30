<?php
/**
 * Plan_Create generated on 2022-04-30
 * @see https://sdkgen.app
 */

use PSX\Schema\Attribute\Required;

#[Required(array('name', 'price'))]
class Plan_Create extends Plan implements \JsonSerializable
{
}
