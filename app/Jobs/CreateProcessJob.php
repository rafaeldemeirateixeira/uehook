<?php

namespace App\Jobs;

use App\Models\Order;

class CreateProcessJob extends Job
{
    /**
     * @var Order
     */
    private Order $order;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->log($this->order, 'started');
    }
}
