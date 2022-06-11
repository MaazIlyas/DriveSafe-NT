<?php

namespace App\Observers;

use App\Models\Instructor;
use Illuminate\Support\Facades\Cache;

class InstructorObserver
{
    //TO clear cache
    private function clearCache() {
        for($i=1; $i<=100; $i++) {
            $key = 'instructors-page-' . $i;
            if (Cache::has($key)) {
                Cache::forget($key);
                dump($key);
            } else {
                break;
            }
        }
    }
    /**
     * Handle the Instructor "created" event.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return void
     */
    public function created(Instructor $instructor)
    {
        $this->clearCache();
    }

    /**
     * Handle the Instructor "updated" event.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return void
     */
    public function updated(Instructor $instructor)
    {
        $this->clearCache();
    }

    /**
     * Handle the Instructor "deleted" event.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return void
     */
    public function deleted(Instructor $instructor)
    {
        $this->clearCache();
    }

    /**
     * Handle the Instructor "restored" event.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return void
     */
    public function restored(Instructor $instructor)
    {
        //
    }

    /**
     * Handle the Instructor "force deleted" event.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return void
     */
    public function forceDeleted(Instructor $instructor)
    {
        $this->clearCache();
    }
}
