<?php

namespace App\Console\Commands;

use App\Models\Dia;
use Illuminate\Console\Command;

class VerifyImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verifica si hay imagenes del día desde la API de la NASA.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Dia::getImages();
        return 0;
    }
}
