<?php

namespace App\Jobs;

use App\Services\ProcessService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class Job implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    /**
     * @param mixed $model
     * @param string $message
     * @return void
     */
    public function log(mixed $model, string $message): void
    {
        $process = resolve(ProcessService::class);
        $process->create($this->job->uuid(), $this->attempts(), $message, $model);
    }
}
