<?php
/**
 * PlanCreate automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use PSX\Schema\Attribute\Required;

#[Required(array('name', 'price'))]
class PlanCreate extends Plan implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}
