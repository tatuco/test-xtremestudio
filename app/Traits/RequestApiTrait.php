<?php

/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 01/28/19
 * Time: 09:05 AM
 */

namespace App\Traits;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

trait RequestApiTrait
{
    /**
     * Send a request to any service
     * @return string
     */
    public function performRequest($method, $requestUrl, $formParams = null, $headers = [])
    {
        $client = new Client([
            //'base_uri' => $this->baseUri,
            'timeout' => 7,
        ]);
        $message = "";
        try {
            if ($method == 'GET') {
                $response = $client->get($requestUrl, ['headers' => $headers]);
                //$response = $client->get($requestUrl);
            } elseif ($method == 'POST') {
                if ($formParams instanceof Request) {
                    $response = $client->post($requestUrl, ['json' => $formParams->all(), 'headers' => $headers]);
                } else {
                    $response = $client->post($requestUrl, ['json' => $formParams, 'headers' => $headers]);
                }
            } elseif ($method == 'PUT') {
                $response = $client->put($requestUrl, ['json' => $formParams->all(), 'headers' => $headers]);
            } else {
                $response = $client->request($method, $requestUrl, ['json' => $formParams, 'headers' => $headers]);
            }
            $variableguardeesto = $response->getBody();
            return json_decode($variableguardeesto, true);
        } catch (ClientException $exception) {
            Log::critical($exception->getResponse()->getBody());
            $response['status'] = false;
            $response['response'] = json_decode($exception->getResponse()->getBody());
            $response['code'] = $exception->getResponse()->getStatusCode();
            return $response;
        } catch (ServerException $exception) {
            Log::critical($exception->getResponse()->getBody());
            $response['status'] = false;
            $response['response'] = json_decode($exception->getResponse()->getBody());
            $response['code'] = $exception->getResponse()->getStatusCode();
            return $response;
        } catch (GuzzleException $exception) {
            Log::critical($exception->getMessage() . "\n" . $exception->getFile() . "\n" . $exception->getLine());
            $response['status'] = false;
            $response['response'] = $exception->getMessage();
            return $response;
        } catch (Exception $exception) {
            Log::critical($exception->getMessage() . "\n" . $exception->getFile() . "\n" . $exception->getLine());
            $response['status'] = false;
            $response['response'] = $exception->getMessage();
            return $response;
        }
    }

}
