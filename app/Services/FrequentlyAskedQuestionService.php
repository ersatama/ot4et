<?php


namespace App\Services;

use App\Domain\Repositories\interfaces\FrequentlyAskedQuestionRepositoryInterface;

class FrequentlyAskedQuestionService
{
    protected $frequentlyAskedQuestionRepository;
    public function __construct(FrequentlyAskedQuestionRepositoryInterface $frequentlyAskedQuestionRepository) {
        $this->frequentlyAskedQuestionRepository    =   $frequentlyAskedQuestionRepository;
    }

    public function get() {
        return $this->frequentlyAskedQuestionRepository->get();
    }
}
