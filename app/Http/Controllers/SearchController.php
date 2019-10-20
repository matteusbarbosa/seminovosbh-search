<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class SearchController extends Controller
{
    public function search(Request $request)
    {
        $crawler = new CrawlerController();
        return $crawler->pesquisarVeiculos($request);
    }

    public function detail(Request $request, $id)
    {
        if (!$id) {
            return [];
        }
        $crawler = new CrawlerController();
        return $crawler->pesquisarDetalheVeiculos($request, $id);
    }
}