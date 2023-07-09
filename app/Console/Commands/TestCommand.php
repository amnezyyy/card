<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use function Symfony\Component\String\u;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $file = 3;
        $a = [
            0 => 10,
            1 => 11,
            2 => 12
        ];

        try {
            if (!array_key_exists($file, $a)){
                throw new \Exception('Key dosnt exist!');
            }
        } catch (\Exception $exception) {
            echo $exception->getMessage();
        }
    }
}
