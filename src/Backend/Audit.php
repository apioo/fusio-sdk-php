<?php
/**
 * Audit generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Audit implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?App $app = null;
    protected ?User $user = null;
    protected ?string $event = null;
    protected ?string $ip = null;
    protected ?string $message = null;
    protected ?Audit_Object $content = null;
    protected ?\DateTime $date = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setApp(?App $app) : void
    {
        $this->app = $app;
    }
    public function getApp() : ?App
    {
        return $this->app;
    }
    public function setUser(?User $user) : void
    {
        $this->user = $user;
    }
    public function getUser() : ?User
    {
        return $this->user;
    }
    public function setEvent(?string $event) : void
    {
        $this->event = $event;
    }
    public function getEvent() : ?string
    {
        return $this->event;
    }
    public function setIp(?string $ip) : void
    {
        $this->ip = $ip;
    }
    public function getIp() : ?string
    {
        return $this->ip;
    }
    public function setMessage(?string $message) : void
    {
        $this->message = $message;
    }
    public function getMessage() : ?string
    {
        return $this->message;
    }
    public function setContent(?Audit_Object $content) : void
    {
        $this->content = $content;
    }
    public function getContent() : ?Audit_Object
    {
        return $this->content;
    }
    public function setDate(?\DateTime $date) : void
    {
        $this->date = $date;
    }
    public function getDate() : ?\DateTime
    {
        return $this->date;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id, 'app' => $this->app, 'user' => $this->user, 'event' => $this->event, 'ip' => $this->ip, 'message' => $this->message, 'content' => $this->content, 'date' => $this->date), static function ($value) : bool {
            return $value !== null;
        });
    }
}
