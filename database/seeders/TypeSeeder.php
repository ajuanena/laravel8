<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$json = File::get("database/data/typesdata.json");
        $json = file_get_contents(base_path('database/data/typesdata.json'));

        $data = json_decode($json);

        foreach ($data as $type) {
            $newt = new Type;
            $newt->id = $type->id;
            $newt->description = $type->description;
            $newt->save();
        }
    }
}
