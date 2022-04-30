<?php
/**
 * Plan_Create generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use PSX\Schema\Attribute\Required;

#[Required(array('name', 'price'))]
class Plan_Create extends Plan implements \JsonSerializable
{
}
