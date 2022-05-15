<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class PositiveNewsController extends Controller
{
   
    public function index()
    {
        return view('positive-news');
    }

    public function newsFetch() 
    {
        $client = new Client();
        // URLs
        $positiveNewsUrl = 'https://www.positive.news/';
        // $goodNewsUrl = 'https://www.good.co.uk/news/topics/cx2pk70323et/uplifting-stories';

        // Requests
        $positiveNews = $client->request("GET", $positiveNewsUrl);
        // $goodNews = $client->request("GET", $goodNewsUrl);

        // Data
        $jsonData['positive-news'] = $positiveNews->filter('.latest__articles > div')->each(function ($node) {
            $this->positiveNewsResults['link'] = $node->filter('.card__image__link')->getNode(0)->getAttribute('href');
            $this->positiveNewsResults['image'] = $node->filter('.card__image')->getNode(0)->getAttribute('src');
            $this->positiveNewsResults['title'] = $node->filter('.card__title')->text();
            $this->positiveNewsResults['description'] = strlen($node->filter('.card__text')->text()) > 75 ? substr($node->filter('.card__text')->text(), 0, 75) . "..." : $node->filter('.card__text')->text();
            return $this->positiveNewsResults;
        });

        return response()->json(['data' => $jsonData]);
    }
}
