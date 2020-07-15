<?php


namespace App\Core;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RequestApi
{
    /**
     * Send a request to any service
     * @return string
     */
    static function performRequest($method, $requestUrl, $formParams = null, $headers = [])
    {
        //"Content-Type" => "application/x-www-form-urlencoded"
        $client = new Client();
        $message = "";
        try {
            if ($method == 'GET') {
                $response = $client->get($requestUrl, ['headers' => $headers]);
                //$response = $client->get($requestUrl);
            } elseif ($method == 'POST') {
                if ($formParams instanceof Request) {
                    $response = $client->post($requestUrl, [
                        'headers' => [
                            'Content-Type' => 'application/json'
                        ],
                        'form_params' => $formParams->all(),
                    ]);
                } else {
                    $response = self::curlForm($requestUrl, $formParams, $method);
                    return $response;
                }
            } elseif ($method == 'PUT') {
                if ($formParams instanceof Request) {
                    $response = self::curlForm($requestUrl, $formParams->all(), $method);
                    return $response;
                } else {
                    $response = self::curlForm($requestUrl, $formParams, $method);
                    return $response;
                }
            }
            if ($method !== 'POST' || $method !== 'PUT') {
                $variableguardeesto = $response;
                $data = json_decode($variableguardeesto->getBody(), true);
                $data['code_http'] = $response->getStatusCode();
                return $data;
            }

        } catch (ClientException $exception) {
            Log::critical($exception->getResponse()->getBody());
            $response['status'] = false;
            $response['response'] = json_decode($exception->getResponse()->getBody());
            $response['code_http'] = $exception->getResponse()->getStatusCode();
            return $response;
        } catch (ServerException $exception) {
            Log::critical($exception->getResponse()->getBody());
            $response['status'] = false;
            $response['response'] = json_decode($exception->getResponse()->getBody());
            $response['code_http'] = $exception->getResponse()->getStatusCode();
            return $response;
        } catch (GuzzleException $exception) {
            Log::critical($exception->getMessage() . "\n" . $exception->getFile() . "\n" . $exception->getLine());
            $response['status'] = false;
            $response['response'] = $exception->getMessage();
            return $response;
        } catch (\Exception $exception) {
            Log::critical($exception->getMessage() . "\n" . $exception->getFile() . "\n" . $exception->getLine());
            $response['status'] = false;
            $response['response'] = $exception->getMessage();
            return $response;
        }
    }

    static function curlForm($requestUrl, $formParams, $method) {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $requestUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => "json=".json_encode($formParams),
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/x-www-form-urlencoded"
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if (!$err)
        {
            return $response;
        }
        return $err;

    }

}

