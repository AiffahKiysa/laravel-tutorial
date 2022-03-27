<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FormController extends Controller
{
    public function form()
    {
        return view('formulir',[
            "active" => 'formulir',
        ]);
    }

    public function proses(Request $request)
    {
        $messagesError = [
            'required' => 'The :attribute field is required',
            'min' => 'The :attribute must be at least :min characters.',
            'max' => 'The :attribute must not be greater than :max characters.',
        ];

        $this->validate($request,[
            'name' => 'required|min:5|max:20',
            'registration_number' => 'required|numeric',
            'department' => 'required',
            'admission_scheme' => 'required',
            'marital_status' => 'required|not_in:---',
            'place' => 'required',
            'date' => 'required|date',
            'sex' => 'required',
            'religion' => 'required|not_in:--Pilih agama--',
            'email' => 'required|email',
            'no_hp' => 'required|numeric',
            'nik' => 'required|numeric|digits:16',
            'image' => 'required|mimes:jpg,png,jpeg|max:2048',
            'school' => 'required',
            'score' => 'required|numeric|between:2.50,99.99',
            'year' => 'required|numeric|digits:4'
        ],$messagesError);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = 'image'.'.'.$extention;
            $file->storeAs(null, $filename, ['disk' => 'public']); 
        }
        $request->image = $filename;
        
        Alert::success('Success!!', 'Data Completed');
        return view('proses',['data' => $request]);
    }
}
?>