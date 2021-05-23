<?php

namespace App\Observers;

use App\Models\CompletionCertificate;

class CompletionCertificateObserver
{
    /**
     * Handle the CompletionCertificate "created" event.
     *
     * @param  \App\Models\CompletionCertificate  $completionCertificate
     * @return void
     */
    public function created(CompletionCertificate $completionCertificate)
    {
        //
    }

    /**
     * Handle the CompletionCertificate "updated" event.
     *
     * @param  \App\Models\CompletionCertificate  $completionCertificate
     * @return void
     */
    public function updated(CompletionCertificate $completionCertificate)
    {
        //
    }

    /**
     * Handle the CompletionCertificate "deleted" event.
     *
     * @param  \App\Models\CompletionCertificate  $completionCertificate
     * @return void
     */
    public function deleted(CompletionCertificate $completionCertificate)
    {
        //
    }

    /**
     * Handle the CompletionCertificate "restored" event.
     *
     * @param  \App\Models\CompletionCertificate  $completionCertificate
     * @return void
     */
    public function restored(CompletionCertificate $completionCertificate)
    {
        //
    }

    /**
     * Handle the CompletionCertificate "force deleted" event.
     *
     * @param  \App\Models\CompletionCertificate  $completionCertificate
     * @return void
     */
    public function forceDeleted(CompletionCertificate $completionCertificate)
    {
        //
    }
}
