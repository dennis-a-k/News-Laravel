<?php

namespace App\Services;

use Exception;
use Orchestra\Parser\Xml\Facade as XmlParser;

class NewsParcer
{
    public function index($source)
    {
        $message = 'success';

        try {
            $xml = XmlParser::load($source);
            $news = $xml->parse([
                'items' => ['uses' => 'channel.item[title,link,description,category,author]'],
            ]);

            return $news;
        } catch (Exception $e) {
            $message = 'ERROR : ' . $e->getMessage();
        }
    }
}
