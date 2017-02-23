<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Http\Requests\CreateMemberRequest;
use App\School;
use Lang;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::paginate(5);

        return view('member.index', ['members' => $members]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schools = School::all();

        return view('member.create', ['schools' => $schools]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMemberRequest $request)
    {
        $member = new Member();

        $member->first_name = $request->input('first_name');
        $member->last_name = $request->input('last_name');
        $member->email = $request->input('email');
        $member->school_id = $request->input('school');

        $member->save();

        return redirect('member')
            ->with('status', 'success')
            ->with('message', Lang::get('message.member_created_success'));
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
        $member = Member::find($id);

        $schools = School::all();

        return view('member.edit', ['member' => $member, 'schools' => $schools]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateMemberRequest $request, $id)
    {
        $member = Member::find($id);    

        $member->first_name = $request->input('first_name');
        $member->last_name = $request->input('last_name');
        $member->email = $request->input('email');
        $member->school_id = $request->input('school');

        $member->save();

        return redirect('member')
            ->with('status', 'success')
            ->with('message', Lang::get('message.member_updated_success'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::find($id);

        $member->delete();

        return redirect('member')
            ->with('status', 'success')
            ->with('message', Lang::get('message.member_removed_success'));

    }
}
