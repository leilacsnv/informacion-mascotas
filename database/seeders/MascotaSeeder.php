<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mascota;
use Faker\Factory as Faker;

class MascotaSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 500; $i++) {
            Mascota::create([
                'Nombre' => $faker->firstName,
                'Raza' => $faker->randomElement([
                    'Labrador', 'Bulldog', 'Poodle', 'Beagle', 'Chihuahua', 
                    'Shih Tzu', 'Dachshund', 'Golden Retriever', 'Pomerania', 
                    'Boxer', 'Husky', 'Rottweiler', 'Pastor Alemán', 
                    'Bichón Frisé', 'Maltés', 'Pug', 'Terrier', 'Border Collie', 
                    'Cocker Spaniel', 'Doberman', 'Pitbull', 'Akita', 'Samoyedo', 
                    'Yorkshire Terrier', 'Weimaraner', 'Galgo', 'Fox Terrier', 
                    'Chow Chow', 'San Bernardo', 'Gran Danés', 'Pastor Belga', 
                    'Bulldog Francés', 'Scottish Terrier', 'Airedale Terrier', 
                    'Lhasa Apso', 'Basenji', 'Shar Pei', 'Saluki', 'Vizsla', 
                    'Setter Irlandés', 'Spaniel Bretón', 'Whippet', 'Basset Hound', 
                    'Alaskan Malamute', 'Keeshond', 'Cairn Terrier', 'Pointer', 
                    'Leonberger', 'Papillon', 'Mastín', 'Afghan Hound'
                ]),
                'Género' => $faker->randomElement(['Macho', 'Hembra']),
                'identificacion' =>  $faker->numerify('##########'),
                'NombreDueño' => $faker->name,
                'telefonoDueño' => '+57' . $faker->numerify('##########'),
            ]);
        }
    }
}

