<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{

public function index(){
    $computers = computer::all();
    return view('computer.index', compact('computers'));
}

public function create(){
    return view('computer.create');
}

public function store(Request $request){
    $computer = new computer();
    $computer->number = $request->number;
    $computer->brand = $request->brand;
    $computer->save();
    return redirect()->route('computer.index');
}
public function show($id)
    {
        $computer = computer::find($id);
        return view('computer.show', compact('computer'));
    }

    //Destroy
    public function destroy(computer $computer)
    {
        $computer->delete();
        return redirect()->route('computer.index');
    }


    public function edit(computer $computer)
    { //Encuentro el Curso

        return view('computer.edit', compact('computer'));
    }

    //Update
    public function update(Request $request, computer $computer)
    {


        $computer->number = $request->number;
        $computer->brand=$request->brand;
        $computer->save();

        return redirect()->route('computer.index');
    }

}

