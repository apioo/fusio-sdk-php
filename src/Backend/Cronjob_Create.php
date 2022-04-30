<?php
/**
 * Cronjob_Create generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use PSX\Schema\Attribute\Required;

#[Required(array('name', 'cron', 'action'))]
class Cronjob_Create extends Cronjob implements \JsonSerializable
{
}
