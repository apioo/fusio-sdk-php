<?php
/**
 * App_Create generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use PSX\Schema\Attribute\Required;

#[Required(array('userId', 'name', 'url', 'scopes'))]
class App_Create extends App implements \JsonSerializable
{
}
