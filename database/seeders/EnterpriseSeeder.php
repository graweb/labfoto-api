<?php

namespace Database\Seeders;

use App\Models\Enterprise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnterpriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Enterprise::create([
            'name' => 'Empresa',
            'cnpj' => '00.000.000/0000-00',
            'responsible' => 'Responsável',
            'district' => 'Bairro',
            'address' => 'Endereço',
            'email' => 'email@email.com',
        ]);
    }
}
