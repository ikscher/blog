<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lzh_members')->insert([
            'user_name' => 'laravel'.str_random(10),
            'user_email' => str_random(10).'@gmail.com',
            'user_pass' => md5('123456'),
            'pin_pass'=>md5('sdfsdfs'),
            'user_phone'=>'1233242344',
            'reg_time'=>'234234243',
            'reg_ip'=>'23.34.56.125',
            'time_limit'=>'23',
            'credits'=>'23',
            'customer_id'=>'2',
            'customer_name'=>'dsf',
            'province'=>'1212',
            'city'=>'23',
            'area'=>'1',
            'reward_money'=>23,
            'invest_credits'=>'23',
            'integral'=>'2',
            'active_integral'=>2,
            'last_log_ip'=>'23.23.23.23',
            'last_log_time'=>time(),

        ]);
    }
}
