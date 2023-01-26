<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Alunos;

class AlunosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try{
            Alunos::truncate();
            $csvData = fopen(base_path('database/csv/relacao-alunos.csv'), 'r');
            $transRow = true;

            while(($data = fgetcsv($csvData, 555, ';')) !== false){
                if(!$transRow){
                    $nome = '';
                    $conjunct_array_origin = array(" Da ", " De ", " Dos ");
                    $conjunct_array = array(" da ", " de ", " dos ");

                    $nome = str_replace($conjunct_array_origin, $conjunct_array, mb_convert_case(mb_strtolower($data[0], 'UTF-8'), MB_CASE_TITLE, 'UTF-8'));
                    Alunos::create([
                        'nome' => trim($nome)
                    ]);

                    $nome = '';
                }
                $transRow = false;
            }
            fclose($csvData);
        }catch(\Exception $e){
            echo $e->getMessage();
        }
    }
}
