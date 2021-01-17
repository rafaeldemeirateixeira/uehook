<?php

namespace App\Services;

class ProcessService
{
    /**
     * @param string $jobUuid
     * @param integer $attempt
     * @param string $message
     * @param mixed $model
     * @return void
     */
    public function create(string $jobUuid, int $attempt, string $message, mixed $model): void
    {
        $model->process()->create([
            'job_uuid' => $jobUuid,
            'attempt' => $attempt,
            'message' => $message
        ]);
    }
}
