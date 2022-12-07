<?php

namespace App\Http\Controllers;

use App\Models\Health;
use Illuminate\Http\Request;

class HealthController extends Controller
{
    private $healths;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('health');
    }

    public function listOfElements()
    {
        $healths = Health::orderBy('name')->paginate(10);
        return view('health.list')->with('healths',$healths);
    }

    public function search1(Request $request)
    {
        $dato = $request->data;
        $healths = Health::orderBy('name')->where('name','like',"$dato%")->paginate(10);
        return view('health')->with('healths', $healths);
    }

    public function search(Request $request)
    {
        $healths = Health::name($request->data)->orderBy('name')->paginate(10);
        return view('health')->with('healths',$healths);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('health.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $this->validate(request(),[
            'name' => 'required|string|min:3',
        ]);
        $health = Health::all()->where('name',$request->name)->first();
        if(isset($health)){
//            return self::withErrors(['error' => 'Ya existe este nombre']);
            return ["error" => "Ya existe este nombre"];
        }else{
            $health = Health::create($validatedData);
            return redirect()->route('listHealth');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $health = Health::find($id);
        return view('health.show')->with('health',$health);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $health = Health::find($id);
        return view('health.edit')->with('health',$health);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $validatedData = $this->validate(request(),[
            'name' => 'required|string|min:3',
        ]);
        $health = Health::find($id);
        if($request->name == $health->name){
            return back()->withErrors('No hubo cambios');
        }
        $health->name = $request->name;
        $health->save();
        return redirect()->route('health');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $health = Health::find($id);
        $health->delete();
        return redirect()->route('health');
    }

    public function restore($id)
    {
        $health = Health::withTrashed()->where('id', $id)->first();
        $health->restore();
        return redirect()->route('health');
    }

}
