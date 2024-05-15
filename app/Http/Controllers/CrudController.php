<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function showHome()
    {
        $infos = Info::select('id', 'first_name', 'middle_name', 'last_name', 'age')->get();
        return view('home', compact('infos'));
    }

    public function showCreate()
    {
        return view('create');
    }

    public function createInfo(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'middleName' => 'required',
            'lastName' => 'required',
            'age' => 'required'
        ]);

        Info::create([
            'first_name' => $request->firstName,
            'middle_name' => $request->middleName,
            'last_name' => $request->lastName,
            'age' => $request->age
        ]);
        return redirect()->route('showHome')->with('created', 'Created Successfully');
    }

    public function showEdit(Info $info){
        return view('edit', compact('info'));
    }

    public function editInfo(Request $request, Info $info){
        $data = $request->validate([
            'firstName' => 'required',
            'middleName' => 'required',
            'lastName' => 'required',
            'age' => 'required'
        ]);
        $info->update($data);
        return redirect()->route('showHome')->with('updated', 'Updated Successfully');
    }

    public function deleteInfo(Info $info)
    {
        $info->delete();
        return redirect()->route('showHome')->with('deleted', 'Deleted Successfully');
    }
}
