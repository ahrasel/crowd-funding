<?php

namespace App\Helpers;

class FileUploader
{
    private static function upload($file)
    {
        $rand = substr(uniqid('', true), -5);
        $extension = '.' . $file->extension();
        $fileName = $file->storeAs('', time() . '_' . $rand . $extension,  ['disk' => 'uploads']);
        return $fileName;
    }

    public static function uploadSingleFile($file)
    {
        if ($file) {
            return self::upload($file);
        }
        return null;
    }

    function uploadMultipleFile($files)
    {
        if ($files && count($files) > 0) {
            $fileNames = [];
            foreach ($files as $key => $file) {
                $fileNames[] = self::upload($file);
            }

            if (count($fileNames) > 0) {
                return json_encode($fileNames);
            }
        }
        return null;
    }
}
