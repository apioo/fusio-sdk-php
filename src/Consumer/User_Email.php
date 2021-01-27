<?php 
/**
 * User_Email generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Consumer;

/**
 * @Required({"email"})
 */
class User_Email implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $email;
    /**
     * @var string|null
     */
    protected $captcha;
    /**
     * @param string|null $email
     */
    public function setEmail(?string $email) : void
    {
        $this->email = $email;
    }
    /**
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * @param string|null $captcha
     */
    public function setCaptcha(?string $captcha) : void
    {
        $this->captcha = $captcha;
    }
    /**
     * @return string|null
     */
    public function getCaptcha() : ?string
    {
        return $this->captcha;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('email' => $this->email, 'captcha' => $this->captcha), static function ($value) : bool {
            return $value !== null;
        });
    }
}