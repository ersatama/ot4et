<?php


namespace App\Services;

use App\Domain\Repositories\interfaces\NewsRepositoryInterface;

class NewsService
{
    protected $newsRepository;
    public function __construct(NewsRepositoryInterface $newsRepository) {
        $this->newsRepository   =   $newsRepository;
    }
    public function get() {
        return $this->newsRepository->get();
    }
}
