<?php

use Illuminate\Database\Seeder;

class LeadTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('lead_types')->get()->count() == 0) {
            DB::table('lead_types')->insert([
                ['id' => '1', 'name' => 'Communication'],
                ['id' => '2', 'name' => 'Appointment'],
                ['id' => '3', 'name' => 'Others'],
            ]);

            \App\Models\Lead::whereNotNull('id')
                    ->whereNull('type_id')
                    ->update([
                            "type_id" => 1,
                    ]);
        }
    }
}
