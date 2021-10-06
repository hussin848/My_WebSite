<?php

namespace App\Http\Controllers;

use App\Models\dashboard as ModelsDashboard;
use Illuminate\Http\Request;

class dashboard extends Controller
{



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



    public function storemessge(Request $request)
    {

        $messge = new ModelsDashboard();
        $messge->name = $request->name;
        $messge->email = $request->email;
        $messge->subject = $request->subject;
        $messge->massege = $request->message;
        $messge->save();

        return Redirect()->back();
    }
}
