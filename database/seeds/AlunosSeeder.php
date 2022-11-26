<?php

use App\Models\Alunos;
use Illuminate\Database\Seeder;

class AlunosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alunos::truncate();
        $csvData = fopen(base_path('database/csv/relacao-alunos.csv'), 'r');
        $transRow = true;

        while(($data = fgetcsv($csvData, 555, ';')) !== false){
            if(!$transRow){
                AlunoS::create([
                    'nome' => trim($data[0])
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);
    }
}
