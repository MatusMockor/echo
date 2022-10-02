<?php

namespace App\Services;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;

class UploadService
{
    public function saveFile(Model $model, $file)
    {
        if (!$file->isValid()) {
            return back()
                ->with('flashMessage', 'File was not uploaded')
                ->with('flashMessageType', 'error');
        }
        $folderStructure = \Str::lower(class_basename($model)) . 's' . "/$model->id";
        $path = $file->storePublicly('/images' . "/$folderStructure");

        $this->saveFileInfoToDB($path, $model, $file);
    }

    private function saveFileInfoToDB($path, Model $model, $file): void
    {
        Image::create([
            'imageable_type' => get_class($model),
            'imageable_id'   => $model->id,
            'imageName'      => $file->getClientOriginalName(),
            'imagePath'      => $path,
            'mime'           => $file->getClientMimeType(),
            'ext'            => $file->getClientOriginalExtension(),
            'size'           => $file->getSize(),
        ]);
    }
}