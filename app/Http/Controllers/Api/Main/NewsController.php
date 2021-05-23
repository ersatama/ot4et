<?php

namespace App\Http\Controllers\Api\Main;

use App\Http\Controllers\Controller;
use App\Http\Resources\NewsResource;
use Illuminate\Http\Request;
use App\Services\NewsService;
use App\Models\News;
use App\Domain\Contracts\NewsContract;

class NewsController extends Controller
{
    protected $newsService;
    public function __construct(NewsService $newsService) {
        $this->newsService  =   $newsService;
    }
    public function index(Request $request)
    {
        return response([
            NewsContract::NEWS  =>  NewsResource::collection($this->newsService->get())
        ],200);
    }


    public function show(News $news)
    {
        return response([
            NewsContract::NEWS => $news
        ],200);
    }
}
