<?php
/**
 * SystemPaymentTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\Payload;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class SystemPaymentTag extends TagAbstract
{
    /**
     * Payment webhook endpoint after successful purchase of a plan
     *
     * @param string $provider
     * @return CommonMessage
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function webhook(string $provider): CommonMessage
    {
        $url = $this->parser->url('/system/payment/:provider/webhook', [
            'provider' => $provider,
        ]);

        $options = [
            'headers' => [
            ],
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('POST', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode >= 0 && $statusCode <= 999) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }



}
