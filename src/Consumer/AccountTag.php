<?php
/**
 * AccountTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class AccountTag extends TagAbstract
{
    /**
     * @param UserPasswordReset $payload
     * @return Message
     * @throws MessageException
     * @throws ClientException
     */
    public function executePasswordReset(UserPasswordReset $payload): Message
    {
        $url = $this->parser->url('/consumer/password_reset', [
        ]);

        $options = [
            'query' => $this->parser->query([
            ]),
            'json' => $payload
        ];

        try {
            $response = $this->httpClient->request('PUT', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, Message::class);
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 500:
                    throw new MessageException($this->parser->parse($data, Message::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param UserEmail $payload
     * @return Message
     * @throws MessageException
     * @throws ClientException
     */
    public function requestPasswordReset(UserEmail $payload): Message
    {
        $url = $this->parser->url('/consumer/password_reset', [
        ]);

        $options = [
            'query' => $this->parser->query([
            ]),
            'json' => $payload
        ];

        try {
            $response = $this->httpClient->request('POST', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, Message::class);
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 500:
                    throw new MessageException($this->parser->parse($data, Message::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param UserRegister $payload
     * @return Message
     * @throws MessageException
     * @throws ClientException
     */
    public function register(UserRegister $payload): Message
    {
        $url = $this->parser->url('/consumer/register', [
        ]);

        $options = [
            'query' => $this->parser->query([
            ]),
            'json' => $payload
        ];

        try {
            $response = $this->httpClient->request('POST', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, Message::class);
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 500:
                    throw new MessageException($this->parser->parse($data, Message::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param string $provider
     * @param UserProvider $payload
     * @return UserJWT
     * @throws MessageException
     * @throws ClientException
     */
    public function provider(string $provider, UserProvider $payload): UserJWT
    {
        $url = $this->parser->url('/consumer/provider/:provider', [
            'provider' => $provider,
        ]);

        $options = [
            'query' => $this->parser->query([
            ]),
            'json' => $payload
        ];

        try {
            $response = $this->httpClient->request('POST', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, UserJWT::class);
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 500:
                    throw new MessageException($this->parser->parse($data, Message::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param UserRefresh $payload
     * @return UserJWT
     * @throws MessageException
     * @throws ClientException
     */
    public function refresh(UserRefresh $payload): UserJWT
    {
        $url = $this->parser->url('/consumer/login', [
        ]);

        $options = [
            'query' => $this->parser->query([
            ]),
            'json' => $payload
        ];

        try {
            $response = $this->httpClient->request('PUT', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, UserJWT::class);
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 500:
                    throw new MessageException($this->parser->parse($data, Message::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param UserLogin $payload
     * @return UserJWT
     * @throws MessageException
     * @throws ClientException
     */
    public function login(UserLogin $payload): UserJWT
    {
        $url = $this->parser->url('/consumer/login', [
        ]);

        $options = [
            'query' => $this->parser->query([
            ]),
            'json' => $payload
        ];

        try {
            $response = $this->httpClient->request('POST', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, UserJWT::class);
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 500:
                    throw new MessageException($this->parser->parse($data, Message::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param AuthorizeRequest $payload
     * @return AuthorizeResponse
     * @throws MessageException
     * @throws ClientException
     */
    public function authorize(AuthorizeRequest $payload): AuthorizeResponse
    {
        $url = $this->parser->url('/consumer/authorize', [
        ]);

        $options = [
            'query' => $this->parser->query([
            ]),
            'json' => $payload
        ];

        try {
            $response = $this->httpClient->request('POST', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, AuthorizeResponse::class);
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 401:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 500:
                    throw new MessageException($this->parser->parse($data, Message::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @return AuthorizeMeta
     * @throws MessageException
     * @throws ClientException
     */
    public function getApp(): AuthorizeMeta
    {
        $url = $this->parser->url('/consumer/authorize', [
        ]);

        $options = [
            'query' => $this->parser->query([
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, AuthorizeMeta::class);
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 401:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 410:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 500:
                    throw new MessageException($this->parser->parse($data, Message::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param UserActivate $payload
     * @return Message
     * @throws MessageException
     * @throws ClientException
     */
    public function activate(UserActivate $payload): Message
    {
        $url = $this->parser->url('/consumer/activate', [
        ]);

        $options = [
            'query' => $this->parser->query([
            ]),
            'json' => $payload
        ];

        try {
            $response = $this->httpClient->request('POST', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, Message::class);
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 500:
                    throw new MessageException($this->parser->parse($data, Message::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param AccountChangePassword $payload
     * @return Message
     * @throws MessageException
     * @throws ClientException
     */
    public function changePassword(AccountChangePassword $payload): Message
    {
        $url = $this->parser->url('/consumer/account/change_password', [
        ]);

        $options = [
            'query' => $this->parser->query([
            ]),
            'json' => $payload
        ];

        try {
            $response = $this->httpClient->request('PUT', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, Message::class);
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 401:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 500:
                    throw new MessageException($this->parser->parse($data, Message::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param UserAccount $payload
     * @return Message
     * @throws MessageException
     * @throws ClientException
     */
    public function update(UserAccount $payload): Message
    {
        $url = $this->parser->url('/consumer/account', [
        ]);

        $options = [
            'query' => $this->parser->query([
            ]),
            'json' => $payload
        ];

        try {
            $response = $this->httpClient->request('PUT', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, Message::class);
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 401:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 404:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 410:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 500:
                    throw new MessageException($this->parser->parse($data, Message::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @return UserAccount
     * @throws MessageException
     * @throws ClientException
     */
    public function get(): UserAccount
    {
        $url = $this->parser->url('/consumer/account', [
        ]);

        $options = [
            'query' => $this->parser->query([
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, UserAccount::class);
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 401:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 404:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 410:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 500:
                    throw new MessageException($this->parser->parse($data, Message::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }


}
