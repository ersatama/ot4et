<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\FaqService;

class QuestionsController extends Controller {

    protected $faqService;

    public function __construct(FaqService $faqService) {
        $this->faqService   =   $faqService;
    }

    public function list() {
        return $this->faqService->list();
    }

    public function getById($id) {
        return $this->faqService->getById($id);
    }
}
