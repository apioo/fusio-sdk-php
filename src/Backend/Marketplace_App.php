<?php
/**
 * Marketplace_App generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Marketplace_App implements \JsonSerializable
{
    protected ?string $version = null;
    protected ?string $description = null;
    protected ?string $screenshot = null;
    protected ?string $website = null;
    protected ?string $downloadUrl = null;
    protected ?string $sha1Hash = null;
    public function setVersion(?string $version) : void
    {
        $this->version = $version;
    }
    public function getVersion() : ?string
    {
        return $this->version;
    }
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setScreenshot(?string $screenshot) : void
    {
        $this->screenshot = $screenshot;
    }
    public function getScreenshot() : ?string
    {
        return $this->screenshot;
    }
    public function setWebsite(?string $website) : void
    {
        $this->website = $website;
    }
    public function getWebsite() : ?string
    {
        return $this->website;
    }
    public function setDownloadUrl(?string $downloadUrl) : void
    {
        $this->downloadUrl = $downloadUrl;
    }
    public function getDownloadUrl() : ?string
    {
        return $this->downloadUrl;
    }
    public function setSha1Hash(?string $sha1Hash) : void
    {
        $this->sha1Hash = $sha1Hash;
    }
    public function getSha1Hash() : ?string
    {
        return $this->sha1Hash;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('version' => $this->version, 'description' => $this->description, 'screenshot' => $this->screenshot, 'website' => $this->website, 'downloadUrl' => $this->downloadUrl, 'sha1Hash' => $this->sha1Hash), static function ($value) : bool {
            return $value !== null;
        });
    }
}
