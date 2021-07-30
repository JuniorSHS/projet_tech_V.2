<?php

namespace App\Http\Controllers\Admin;

use App\Models\Attributions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AttribController extends Controller
{
    public function attribution()

    {
        $attributions = Attributions::all();
        $attributions = DB::table('attributions')
        ->join('ordi', 'ordi.id', '=', 'attributions.ordi_id')
        ->join('users', 'users.id', '=', 'attributions.users_id')
        ->get();
        return view('admin.attribution')->with('attributions', $attributions);
    }
}
