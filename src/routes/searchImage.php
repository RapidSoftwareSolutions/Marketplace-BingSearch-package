<?php

$app->post('/api/BingSearch/searchImage', function ($request, $response, $args) {
    $settings =  $this->settings;
    
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['subscriptionKey','query']);
    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    
    $query['q'] = $post_data['args']['query'];
    if(!empty($post_data['args']['count'])) {
        $query['count'] = $post_data['args']['count'];
    }
    if(!empty($post_data['args']['offset'])) {
        $query['offset'] = $post_data['args']['offset'];
    }
    if(!empty($post_data['args']['market'])) {
        $query['mkt'] = $post_data['args']['market'];
    }
    if(!empty($post_data['args']['safeSearch'])) {
        $query['safeSearch'] = $post_data['args']['safeSearch'];
    }
    if(!empty($post_data['args']['textDecorations'])) {
        $query['textDecorations'] = $post_data['args']['textDecorations'];
    }
    if(!empty($post_data['args']['textFormat'])) {
        $query['textFormat'] = $post_data['args']['textFormat'];
    }
    if(!empty($post_data['args']['aspect'])) {
        $query['aspect'] = $post_data['args']['aspect'];
    }
    if(!empty($post_data['args']['color'])) {
        $query['color'] = $post_data['args']['color'];
    }
    if(!empty($post_data['args']['imageContent'])) {
        $query['imageContent'] = $post_data['args']['imageContent'];
    }
    if(!empty($post_data['args']['size'])) {
        $query['size'] = $post_data['args']['size'];
    }
    if(!empty($post_data['args']['height'])) {
        $query['height'] = $post_data['args']['height'];
    }
    if(!empty($post_data['args']['width'])) {
        $query['width'] = $post_data['args']['width'];
    }
    if(!empty($post_data['args']['imageType'])) {
        $query['imageType'] = $post_data['args']['imageType'];
    }
    
    $headers['Ocp-Apim-Subscription-Key'] = $post_data['args']['subscriptionKey'];
    
    $query_str = $settings['api_url'].'/images/search';
    
    $client = $this->httpClient;

    try {

        $resp = $client->get( $query_str, 
            [
                'query' => $query,
                'headers' => $headers,
                'verify' => false
            ]);
        $responseBody = $resp->getBody()->getContents();
        if($resp->getStatusCode() == '200') {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ConnectException $exception) {

        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'INTERNAL_PACKAGE_ERROR';
        $result['contextWrites']['to']['status_msg'] = 'Something went wrong inside the package.';

    }

    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);
});
