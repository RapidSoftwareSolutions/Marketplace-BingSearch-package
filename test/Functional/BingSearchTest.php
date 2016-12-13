<?php

namespace Test\Functional;

require_once(__DIR__ . '/../../src/Models/checkRequest.php');

class BingSearchTest extends BaseTestCase {
    
    public function testPackage() {
        
        $routes = [
            'advancedSearch',
            'searchWeb',
            'searchImage',
            'searchVideo',
            'searchNews',
            'getRelatedSearch',
            'getSpellingSuggestions'
        ];
        foreach($routes as $file) {
        
            $var = '{
                        "args": {
                            "subscriptionKey": "57d17d001e69450b9a5d8ef8168790d3",
                            "query": "iphone7",
                            "textDecorations": "true",
                            "textFormat": "RAW"
                        }
                    }';
            $post_data = json_decode($var, true);

            $response = $this->runApp('POST', '/api/BingSearch/'.$file, $post_data);

            $this->assertEquals(200, $response->getStatusCode(), 'Error in '.$file);
            
        }
    }

}
