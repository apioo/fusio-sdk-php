<?php
/**
 * Page generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;


class Page implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?string $title = null;
    protected ?string $slug = null;
    protected ?string $content = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setTitle(?string $title) : void
    {
        $this->title = $title;
    }
    public function getTitle() : ?string
    {
        return $this->title;
    }
    public function setSlug(?string $slug) : void
    {
        $this->slug = $slug;
    }
    public function getSlug() : ?string
    {
        return $this->slug;
    }
    public function setContent(?string $content) : void
    {
        $this->content = $content;
    }
    public function getContent() : ?string
    {
        return $this->content;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id, 'title' => $this->title, 'slug' => $this->slug, 'content' => $this->content), static function ($value) : bool {
            return $value !== null;
        });
    }
}
