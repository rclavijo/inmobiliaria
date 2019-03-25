<?php

use Illuminate\Database\Seeder;

use App\Sector;
use App\Property;
use App\DomesticProperty;
use App\Apartment;
use App\House;
use App\Farm;
use App\Cellar;
use App\Batch;
use App\Image;

class PropertiesTableSeeder extends Seeder
{
    
    private function getImagePath(string $type)
    {
        $path = $folder = '';
        $number = -1;
        
        if ($type === Property::CELLAR):
            $folder = 'cellars';
        elseif ($type === Property::BATCH):
            $folder = 'batches';
        elseif ($type === Property::HOUSE):
            $folder = 'houses';
        elseif ($type === Property::APARTMENT):
            $folder = 'apartments';
        elseif ($type === Property::FARM):
            $folder = 'farms';
        endif;
        
        $number = random_int(1, 8);
        
        $path = 'test_images/' . $folder . '/' . $number . '.jpg';
        
        return $path;
    }
    
    private function createDocumentImages($property)
    {
        Image::create([
            'path' => 'test_images/matricula/matricula.jpg',
            'type' => Image::ENROLLMENT,
            'property_id' => $property->id
        ]);
        
        Image::create([
            'path' => 'test_images/tradicion/tradicion_libertad.jpg',
            'type' => Image::TRADITION_AND_FREEDOM,
            'property_id' => $property->id
        ]);
    }
    
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creando inmuebles de tipo casa.
        factory(Property::class)
            ->times(UtilSeeder::AMOUNT_PROPERTIES)
            ->create([ 'type' => Property::HOUSE ])
            ->each(function($property) {
                
                factory(Sector::class)
                    ->create(['property_id' => $property->id]);
                
                for ($i = 0; $i < 6; $i += 1)
                    Image::create([
                        'path' => $this->getImagePath(Property::HOUSE),
                        'type' => Image::PROPERTY_IMAGE,
                        'property_id' => $property->id
                    ]);
                    
                $this->createDocumentImages($property);
                    
                factory(DomesticProperty::class)
                    ->times(1)
                    ->create([
                        'property_id' => $property->id
                    ])
                    ->each(function($domesticProperty) {
                       House::create([
                           'domestic_property_id' => $domesticProperty->property_id
                       ]); 
                    });
            });
            
        // Creando inmuebles de tipo Apartamento.
        factory(Property::class)
            ->times(UtilSeeder::AMOUNT_PROPERTIES)
            ->create([
                'type' => Property::APARTMENT
            ])
            ->each(function($property) {
                factory(Sector::class)
                    ->create(['property_id' => $property->id]);
                
                for ($i = 0; $i < 6; $i += 1)
                    Image::create([
                        'path' => $this->getImagePath(Property::APARTMENT),
                        'type' => Image::PROPERTY_IMAGE,
                        'property_id' => $property->id
                    ]);
                    
                $this->createDocumentImages($property);
                    
                factory(DomesticProperty::class)
                    ->times(1)
                    ->create([
                        'property_id' => $property->id
                    ])
                    ->each(function($domesticProperty) {
                       factory(Apartment::class)
                        ->create([
                            'domestic_property_id' => $domesticProperty->property_id    
                        ]);
                    });
            });
            
        // Creando inmuebles de tipo Finca.
        factory(Property::class)
            ->times(UtilSeeder::AMOUNT_PROPERTIES)
            ->create([
                'type' => Property::FARM
            ])
            ->each(function($property) {
                factory(Sector::class)
                    ->create(['property_id' => $property->id]);
                
                for ($i = 0; $i < 6; $i += 1)
                    Image::create([
                        'path' => $this->getImagePath(Property::FARM),
                        'type' => Image::PROPERTY_IMAGE,
                        'property_id' => $property->id
                    ]);
                    
                $this->createDocumentImages($property);
                    
                factory(DomesticProperty::class)
                    ->times(1)
                    ->create([
                        'property_id' => $property->id
                    ])
                    ->each(function($domesticProperty) {
                       Farm::create([
                           'domestic_property_id' => $domesticProperty->property_id
                       ]);
                    });
            });
            
        // Creando inmuebles de tipo Lote.
        factory(Property::class)
            ->times(UtilSeeder::AMOUNT_PROPERTIES)
            ->create([
                'type' => Property::BATCH
            ])
            ->each(function($property) {
                factory(Sector::class)
                    ->create(['property_id' => $property->id]);
                
                for ($i = 0; $i < 6; $i += 1)
                    Image::create([
                        'path' => $this->getImagePath(Property::BATCH),
                        'type' => Image::PROPERTY_IMAGE,
                        'property_id' => $property->id
                    ]);
                    
                $this->createDocumentImages($property);
                
                Batch::create([
                    'property_id' => $property->id
                ]);
            });
            
        // Creando inmuebles de tipo Bodega.
        factory(Property::class)
            ->times(UtilSeeder::AMOUNT_PROPERTIES)
            ->create([
                'type' => Property::CELLAR
            ])
            ->each(function($property) {
                factory(Sector::class)
                    ->create(['property_id' => $property->id]);
                
                for ($i = 0; $i < 6; $i += 1)
                    Image::create([
                        'path' => $this->getImagePath(Property::CELLAR),
                        'type' => Image::PROPERTY_IMAGE,
                        'property_id' => $property->id
                    ]);
                    
                $this->createDocumentImages($property);
                
                factory(Cellar::class)
                    ->create([
                        'property_id' => $property->id
                    ]);
            });
    }
}
