<?php

namespace App\Console\Commands;

use App\Listing;

use App\Jobs\InsertRelatedLinks;

use Illuminate\Console\Command;
use Illuminate\Foundation\Bus\DispatchesJobs;

class InsertJobLinks extends Command
{
    use DispatchesJobs;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insert:job:links';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Replace Text w/ Links';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Listing::active()->withoutLinks()->chunk(10, function($listings)
        {
            foreach($listings as $listing)
            {
                $this->dispatch(new InsertRelatedLinks($listing));
            }
        });
    }
}