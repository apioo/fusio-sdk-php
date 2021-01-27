<?php 
/**
 * Transaction_Prepare_Response generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Consumer;


class Transaction_Prepare_Response implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $approvalUrl;
    /**
     * @param string|null $approvalUrl
     */
    public function setApprovalUrl(?string $approvalUrl) : void
    {
        $this->approvalUrl = $approvalUrl;
    }
    /**
     * @return string|null
     */
    public function getApprovalUrl() : ?string
    {
        return $this->approvalUrl;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('approvalUrl' => $this->approvalUrl), static function ($value) : bool {
            return $value !== null;
        });
    }
}