<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        //\DB::table('settings')->delete();
        if(DB::table('settings')->get()->count() != 0) {
            echo "Settings existed!\n";
            return;
        }

        \DB::table('settings')->insert(array (
            0 =>
            array (
                'id' => 1,
                'task_complete_allowed' => 2,
                'task_assign_allowed' => 2,
                'lead_complete_allowed' => 2,
                'lead_assign_allowed' => 2,
                'time_change_allowed' => 2,
                'comment_allowed' => 2,
                'country' => 'en',
                'company' => 'Media',
                'created_at' => null,
                'updated_at' => null,
            ),
        ));
    }
}
