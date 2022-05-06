<?php
/**
 * Page_Create generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use PSX\Schema\Attribute\Required;

#[Required(array('title', 'content'))]
class Page_Create extends Page implements \JsonSerializable
{
}
