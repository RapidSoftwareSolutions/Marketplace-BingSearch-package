<?php
$routes = [
    'advancedSearch',
    'searchWeb',
    'searchImage',
    'searchVideo',
    'searchNews',
    'getRelatedSearch',
    'getSpellingSuggestions',
    'metadata'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

