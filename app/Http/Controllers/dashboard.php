<?php

namespace App\Http\Controllers;

use App\Models\dashboard as ModelsDashboard;
use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }


    public function index()
    {
      $dash = ModelsDashboard::all();
      return view('dashboard', compact('dash'));
    }


    public function destroy($id)
    {
        ModelsDashboard::find($id)->delete();
        return Redirect()->back();
    }

}
