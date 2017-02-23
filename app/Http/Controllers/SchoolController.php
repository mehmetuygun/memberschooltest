<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use App\Http\Requests\CreateSchoolRequest;
use Lang;


class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools =  School::orderby('created_at', 'desc')->paginate(5);


        return view('school.index', ['schools' => $schools]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schools = School::all();

        return view('school.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSchoolRequest $request)
    {
        $school = new School();

        $school->name = $request->input('name');

        $school->save();

        return redirect('school')
            ->with('status', 'success')
            ->with('message', Lang::get('message.school_created_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $school = School::find($id);

        return view('school.edit', ['school' => $school]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateSchoolRequest $request, $id)
    {
        $school = School::find($id);

        $school->name = $request->name;

        $school->save();

        return redirect('school')
            ->with('status', 'success')
            ->with('message', Lang::get('message.school_updated_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $school = School::find($id);

        $school->delete();

        return redirect('school')
            ->with('status', 'success')
            ->with('message', Lang::get('message.school_removed_success'));
    }
}
