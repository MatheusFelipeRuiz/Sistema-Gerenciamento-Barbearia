<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $names = [
            'Corte de Cabelo Masculino',
            'Corte de Cabelo Feminino',
            'Barba',
            'Coloração de Cabelo',
            'Design de Sobrancelhas',
            'Manicure Simples',
        ];

        $description = [
            'Corte de cabelo tradicional para homens',
            'Corte de cabelo moderno para mulheres',
            'Serviço de barbearia para cuidar da barba',
            'Técnica de coloração para mudar a cor do cabelo',
            'Modelagem de sobrancelhas para realçar o olhar',
            'Cuidados básicos para as unhas',
        ];

        $price = [
            30.00,
            50.00,
            25.00,
            80.00,
            20.00,
            15.00,
        ];

        $duration = [
            60,
            60,
            30,
            120,
            140,
            50,
        ];

        for ($i = 0; $i < count($names); $i++) {
            $service = Service::where('name', $names[$i])->first();

            if (!$service) {
                Service::create([
                    'name'        => $names[$i],
                    'description' => $description[$i],
                    'price'       => $price[$i],
                    'duration'    => $duration[$i],
                    'created_by'  => 1,
                ]);
            }
        }
    }
}