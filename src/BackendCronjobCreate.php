<?php
/**
 * BackendCronjobCreate automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;

use PSX\Schema\Attribute\Required;

#[Required(array('name', 'cron', 'action'))]
class BackendCronjobCreate extends BackendCronjob implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}