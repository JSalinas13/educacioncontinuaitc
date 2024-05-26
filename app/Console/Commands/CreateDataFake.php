<?php

namespace App\Console\Commands;

use App\Models\Area;
use App\Models\Curso;
use App\Models\CursoEstudiante;
use App\Models\TipoCurso;
use App\Models\Usuario;
use Illuminate\Console\Command;

class CreateDataFake extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'createDataFake {count=1}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     */
    public function handle()
    {
        $count = (int) $this->argument('count');
        Area::factory()->count($count)->create();
        TipoCurso::factory()->count($count)->create();
        Usuario::factory()->count($count)->create();
        Curso::factory()->count($count)->create();
        CursoEstudiante::factory()->count($count*5)->create();
        $this->info("$count gera comando exitosamente.");
    }
}
