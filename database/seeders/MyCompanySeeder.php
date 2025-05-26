<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MyCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            'title' => 'ФОНД МАРИИ ЛЕОНТЬЕВОЙ',
            'description' => 'ФОНД МАРИИ ЛЕОНТЬЕВОЙ',
            'history' => 'Введите историю',
            'address' => '108836, г. Москва, ул. Нововатутинская',
        ]);

        DB::table('contacts')->where('id', '=', 1)->insert([
            'company_id' => 1,
            'phone' => '7(966)193-24-20',
            'email' => 'maria.fond@mail.ru',
            'vk' => 'no',
            'other_link' => 'https://www.mos.ru/city/projects/blago/fond/blagotvoritelnyy-fond-marii-leontyevoy/',
        ]);

        DB::table('requisites')->where('id', '=', 1)->insert([
            'company_id' => 1,
            'inn' => '7751188246',
            'rs' => '40701810938000005544',
            'ks' => '30101810400000000225',
            'kpp' => '775101001',
            'bik' => '044525225',
            'ogrn' => '1207700430475',
            'recipient' => 'БФ МАРИИ ЛЕОНТЬЕВОЙ',
            'bank_title' => 'ПАО СБЕРБАНК',
            'bank_address' => 'г. Москва, г. Троицк, М-н В, 37А, пом.4',
        ]);
    }
}
