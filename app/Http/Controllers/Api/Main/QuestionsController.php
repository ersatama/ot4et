<?php

namespace App\Http\Controllers\Api\Main;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionsResource;
use App\Models\FrequentlyAskedQuestion;
use App\Services\FrequentlyAskedQuestionService;
use App\Domain\Contracts\FrequentlyAskedQuestionContract;

class QuestionsController extends Controller
{
    protected $frequentlyAskedQuestionService;
    public function __construct(FrequentlyAskedQuestionService $frequentlyAskedQuestionService) {
        $this->frequentlyAskedQuestionService   =   $frequentlyAskedQuestionService;
    }

    public function index()
    {
        return response([
            FrequentlyAskedQuestionContract::QUESTIONS  =>  QuestionsResource::collection($this->frequentlyAskedQuestionService->get())
        ],200);
    }

    public function show(FrequentlyAskedQuestion $question)
    {
        return response([
            FrequentlyAskedQuestionContract::QUESTION   =>  $question
        ],200);
    }
}
