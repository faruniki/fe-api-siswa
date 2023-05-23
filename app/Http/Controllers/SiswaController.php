<?php

namespace App\Http\Controllers;

use App\Http\Libraries\BaseApi;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data = (new BaseApi)->index('/api/siswa');
        $siswas = $data->json();

        return view('index')->with(['siswas' => $siswas['data']]);
    }
}
