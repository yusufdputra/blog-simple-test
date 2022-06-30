<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class UploadFileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    static function uploadFile($file, $file_lama, $target)
    {
        try {
            if ($file_lama != null) {
                // update file
                // hapus file lama
                self::unlinkFile($file_lama);
            }
            // upload file baru
            $file_name = time() . '_' . $file->getClientOriginalName();
            $file_path = $file->storeAs('uploads/' . $target, $file_name, 'public');
            return $file_path;
        } catch (\Throwable $th) {
            return FALSE;
        }
    }

    static function unlinkFile($target)
    {
        try {
            File::delete('storage/' . $target);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
