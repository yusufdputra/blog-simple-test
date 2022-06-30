<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['title'] = "Manage article";
        $data['articles'] = Artikel::with('user')
            ->orderBy('created_at', 'ASC')
            ->get();


        return view('admin.index', compact('data'));
    }


    public function updateOrInsert(Request $request)
    {
        DB::beginTransaction();

        try {

            // upload file foto

            $file = $request->file('file_picture');
            if ($file != null) {
                $upload = UploadFileController::uploadFile($file, $request->file_lama, 'Articles');
            } else {
                $upload = $request->file_lama;
            }

            $id = null;
            // cek apakah ada id article
            if (isset($request->id_article)) {
               $id = Crypt::decrypt($request->id_article);
            }

            // kondisi
            $where = [
                'id'    => $id
            ];

            // values
            $values = [
                'id_user'               => Auth::user()->id,
                'title'                 => $request->title,
                'detail'                => $request->detail,
                'url_file'              => $upload,
            ];

            $query = Artikel::updateOrInsert($where, $values);
            DB::commit();
            if ($query) {
                return redirect()->back()->with('success', 'Data Saving is Successful.');
            } else {
                return redirect()->back()->with('alert', 'Data Saving is Failed.');
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('alert', 'Data Saving is Failed.' . $th);
        }
    }

    public function getarticleByID($id_article)
    {
        $id = Crypt::decrypt($id_article);

        $query = Artikel::with('user')
            ->where('id', $id)
            ->first();
        if ($query) {
            $status = 200;
            $resp = $query;
        } else {
            $status = 404;
            $resp = 'Error while fetching data.' . $id;
        }

        return response()->json([
            'status'    => $status,
            'message'  => $resp
        ]);
    }

    public function delete(Request $request)
    {
        $id = Crypt::decrypt($request->id_article);

        DB::beginTransaction();

        try {
            $query = Artikel::where('id', $id)->delete();

            DB::commit();
            if ($query) {
                return redirect()->back()->with('success', 'Record deleted successfully.');
            } else {
                return redirect()->back()->with('alert', 'Failed to delete.');
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('alert', 'Failed to delete.');
        }
    }

}
