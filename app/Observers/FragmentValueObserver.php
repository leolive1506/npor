<?php

namespace App\Observers;

use App\Models\FragmentValue;

class FragmentValueObserver
{
    /**
     * Handle the FragmentValue "created" event.
     *
     * @param  \App\Models\FragmentValue  $fragmentValue
     * @return void
     */
    public function created(FragmentValue $fragmentValue)
    {
        $fragmentValue->created_by = auth()->id();
        $fragmentValue->save();
    }

    /**
     * Handle the FragmentValue "updated" event.
     *
     * @param  \App\Models\FragmentValue  $fragmentValue
     * @return void
     */
    public function updated(FragmentValue $fragmentValue)
    {
        //
    }

    /**
     * Handle the FragmentValue "deleted" event.
     *
     * @param  \App\Models\FragmentValue  $fragmentValue
     * @return void
     */
    public function deleted(FragmentValue $fragmentValue)
    {
        //
    }

    /**
     * Handle the FragmentValue "restored" event.
     *
     * @param  \App\Models\FragmentValue  $fragmentValue
     * @return void
     */
    public function restored(FragmentValue $fragmentValue)
    {
        //
    }

    /**
     * Handle the FragmentValue "force deleted" event.
     *
     * @param  \App\Models\FragmentValue  $fragmentValue
     * @return void
     */
    public function forceDeleted(FragmentValue $fragmentValue)
    {
        //
    }
}
