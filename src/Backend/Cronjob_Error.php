<?php
/**
 * Cronjob_Error generated on 2022-04-30
 * @see https://sdkgen.app
 */

class Cronjob_Error implements \JsonSerializable
{
    protected ?string $message = null;
    protected ?string $trace = null;
    protected ?string $file = null;
    protected ?int $line = null;
    public function setMessage(?string $message) : void
    {
        $this->message = $message;
    }
    public function getMessage() : ?string
    {
        return $this->message;
    }
    public function setTrace(?string $trace) : void
    {
        $this->trace = $trace;
    }
    public function getTrace() : ?string
    {
        return $this->trace;
    }
    public function setFile(?string $file) : void
    {
        $this->file = $file;
    }
    public function getFile() : ?string
    {
        return $this->file;
    }
    public function setLine(?int $line) : void
    {
        $this->line = $line;
    }
    public function getLine() : ?int
    {
        return $this->line;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('message' => $this->message, 'trace' => $this->trace, 'file' => $this->file, 'line' => $this->line), static function ($value) : bool {
            return $value !== null;
        });
    }
}
