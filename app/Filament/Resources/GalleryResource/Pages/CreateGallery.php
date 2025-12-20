<?php

namespace App\Filament\Resources\GalleryResource\Pages;

use App\Filament\Resources\GalleryResource;
use App\Models\Gallery;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGallery extends CreateRecord
{
    protected static string $resource = GalleryResource::class;



    protected function handleRecordCreation(array $data): Gallery
    {
        foreach ($data['images'] as $image) {
            Gallery::create([
                'image' => $image,
            ]);
        }

        return new Gallery();
    }

}
