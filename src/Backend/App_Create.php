<?php
/**
 * App_Create generated on 2022-04-30
 * @see https://sdkgen.app
 */

use PSX\Schema\Attribute\Required;

#[Required(array('userId', 'name', 'url', 'scopes'))]
class App_Create extends App implements \JsonSerializable
{
}
