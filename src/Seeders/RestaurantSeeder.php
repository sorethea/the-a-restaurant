<?php

namespace Sorethea\Restaurant\Seeders;

use GuzzleHttp\Client;
use Illuminate\Database\Seeder;
use Sorethea\Restaurant\Models\Cuisine;

class RestaurantSeeder extends Seeder
{
    public function run(): void
    {
        $cuisines = \File::json(__DIR__."/../cuisines.json");
        foreach ($cuisines as $cuisine){
            $fileName="";
            try {
                $file = file_get_contents($cuisine["image"]);
                if($file){
                    $finfo = new \finfo(FILEINFO_MIME_TYPE);
                    $fileInfo = $finfo->buffer($file);
                    $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
                    $fileName = uniqid().".".$extension;
                    \Storage::disk("local")->put($fileName,$file);
                }
            }catch (\Exception $exception){
                logger($exception->getMessage());
            }
            Cuisine::factory(1)->create([
                "name"=>$cuisine['name'],
                "description"=>$cuisine['description'],
                "image"=>$fileName
            ]);
        }
    }
}
