<?php

use Illuminate\Database\Seeder;

use App\City;
use App\Department;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = dirname(__FILE__) . DIRECTORY_SEPARATOR;
        $json_data = json_decode(file_get_contents($path . 'colombia.json'));
        
        foreach ($json_data as $departament) {
            $id = $departament->id;

            Department::create([
                'id' => $id,
                'name' => $departament->departamento
            ]);

            foreach ($departament->ciudades as $city) {

                City::create([
                    'name' => $city,
                    'department_id' => $id
                ]);
            }
        }
    }
}
