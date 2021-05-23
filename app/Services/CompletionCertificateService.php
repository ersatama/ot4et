<?php


namespace App\Services;

use App\Domain\Repositories\interfaces\CompletionCertificateRepositoryInterface;
use App\Domain\Repositories\interfaces\ProductRepositoryInterface;
use App\Domain\Repositories\interfaces\ServiceRepositoryInterface;
use App\Domain\Contracts\CompletionCertificateContract;

class CompletionCertificateService
{
    protected $completionCertificateRepository;
    protected $productRepository;
    protected $serviceRepository;

    protected $total    =   0;

    public function __construct(CompletionCertificateRepositoryInterface $completionCertificateRepository, ProductRepositoryInterface $productRepository, ServiceRepositoryInterface $serviceRepository) {
        $this->completionCertificateRepository  =   $completionCertificateRepository;
        $this->productRepository                =   $productRepository;
        $this->serviceRepository                =   $serviceRepository;
    }

    public function getByOrganizationIdAndLikeDocumentNumber(array $request, int $id) {
        return $this->completionCertificateRepository->getByOrganizationIdAndLikeDocumentNumber($request,$id);
    }

    public function total($basket) {
        foreach ($basket as &$item) {
            if ($item[CompletionCertificateContract::IS_PRODUCT]) {
                $main   =   $this->productRepository->find($item[CompletionCertificateContract::ID]);
            } else {
                $main   =   $this->serviceRepository->find($item[CompletionCertificateContract::ID]);
            }
            if ($main) {
                $this->total    +=  $main[CompletionCertificateContract::PRICE] + $main[CompletionCertificateContract::QUANTITY];
            }
        }
        return $this->total;
    }

    public function create($data) {
        return $this->completionCertificateRepository->create($data);
    }
}

/*
 <?php


namespace App\Service;


use App\Models\CompletionCertificate;
use App\Models\Product;
use App\Models\Service;

class CompletionCertificateService
{

    public function handleBasket(CompletionCertificate $certificate,$basket)
    {
        foreach ($basket as $key=>$item){
            if ($item['is_product']){
                $itemMain = Product::find($item['id']);
                $certificate->products()->save($itemMain);
            } else {
                $itemMain = Service::find($item['id']);
                $certificate->services()->save($itemMain);
            }
        }
    }
}
 */
