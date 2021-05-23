<?php


namespace App\Services;

use App\Domain\Repositories\interfaces\FaqRepositoryInterface;

class FaqService
{
    protected $faqRepository;
    public function __construct(FaqRepositoryInterface $faqRepository) {
        $this->faqRepository    =   $faqRepository;
    }

    public function list() {
        return $this->faqRepository->list();
    }

    public function getById($id) {
        return $this->faqRepository->getById($id);
    }
}