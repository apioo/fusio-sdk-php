<?php
/**
 * OperationCreate automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use PSX\Schema\Attribute\Required;

#[Required(array('httpMethod', 'httpPath', 'httpCode', 'name', 'outgoing', 'action'))]
class OperationCreate extends Operation implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}
