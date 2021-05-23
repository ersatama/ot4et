<?php


namespace App\Domain\Repositories;

use App\Domain\Repositories\interfaces\CompletionCertificateRepositoryInterface;
use App\Models\CompletionCertificate;
use App\Domain\Contracts\CompletionCertificateContract;

class CompletionCertificateRepositoryEloquent implements CompletionCertificateRepositoryInterface
{
    public function getByOrganizationIdAndLikeDocumentNumber(array $request, int $id) {
        return CompletionCertificate::where(function ($query) use ($request) {
            if (array_key_exists(CompletionCertificateContract::SEARCH,$request)) {
                $query->where(CompletionCertificateContract::DOCUMENT_NUMBER,'LIKE','%'.$request[CompletionCertificateContract::SEARCH].'%');
            }
            if (array_key_exists(CompletionCertificateContract::SORT_TYPE,$request) && array_key_exists(CompletionCertificateContract::SORT_VALUE,$request)) {
                $query->orderBy($request[CompletionCertificateContract::SORT_TYPE], $request[CompletionCertificateContract::SORT_VALUE]);
            }
        })->where(CompletionCertificateContract::ORGANIZATION_ID,$id)->paginate(12);
    }

    public function create($data) {
        return CompletionCertificate::create($data);
    }
}
