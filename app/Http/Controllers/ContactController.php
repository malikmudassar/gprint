<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormEmail;
use App\Mail\GetaQuoteEmail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'name'  => 'required',
            'email' => 'required|email',
            'subject'   => 'required',
            'message'   =>  'required'
        ]);

        Mail::to('daniel.lacour@lacour.co')->send(new ContactFormEmail($data));
        return redirect('/home');
    }
    public function quote(Request $request)
    {
        // dd($request->all());
        $data=$request->validate([
            'name'  => 'required',
            'email'  => 'required|email',
            'contact'  => 'required',
            'type'  => 'required',
            'address' => 'required',
            'budget'   => 'required',
            'message'   =>  'required'
        ]);

        Mail::to('daniel.lacour@lacour.co')->send(new GetaQuoteEmail($data));
        return redirect('/home');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
