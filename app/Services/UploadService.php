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
                ->with('flashMessageType', 'danger');
        }

        if ($model->image?->imagePath) {
            \Storage::delete($model->image->imagePath);
            $path = $this->uploadFile($model, $file);
            $data = $this->prepareDataForDB($model, $path, $file);
            $this->updateFileToDB($model->image, $data);
        }


        $path = $this->uploadFile($model, $file);
        $data = $this->prepareDataForDB($model, $path, $file);
        $this->saveFileInfoToDB($data);
    }


    /**
     * @param Model $model
     * @param $file
     * @return mixed
     */
    public function uploadFile(Model $model, $file): mixed
    {
        $folderStructure = \Str::lower(class_basename($model)) . 's' . "/$model->id";
        return $file->storePublicly('/images' . "/$folderStructure");
    }


    /**
     * @param Image $image
     * @param $data
     * @return void
     */
    private function updateFileToDB(Image $image, $data): void
    {
        $image->update($data);
    }

    /**
     * @param $data
     * @return void
     */
    private function saveFileInfoToDB($data): void
    {
        Image::create($data);
    }

    /**
     * @param Model $model
     * @param $path
     * @param $file
     * @return array
     */
    private function prepareDataForDB(Model $model, $path, $file): array
    {
        return [
            'imageable_type' => get_class($model),
            'imageable_id'   => $model->id,
            'imageName'      => $file->getClientOriginalName(),
            'imagePath'      => $path,
            'mime'           => $file->getClientMimeType(),
            'ext'            => $file->getClientOriginalExtension(),
            'size'           => $file->getSize(),
        ];
    }
}