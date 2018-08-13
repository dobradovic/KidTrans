<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transport;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\DemandValidation;
use App\Mail\TransportEmail;

class TransportController extends Controller
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
        //

        $this->validate($request, [

          'uvoz_izvoz' =>'required',
          'tip_prevoza' =>'required',
          'status' =>'required',
          'ime_partnera'=>'required',
          'firma' => 'required',
          'pb' =>'required',
          'mesto' =>'required',
          'drzava' =>'required',
          'telefon' => 'required',
          'email' =>'required|email',
          'ime_partnera_2' =>'required',
          'firma2' => 'required',
          'postanski_broj2' =>'required',
          'mesto2' =>'required',
          'drzava2' =>'required',
          'telefon2' => 'required',
          'email2' => 'required',
          'broj' => 'required',
          'vrsta_kolija' => 'required',
          'dimenzije' =>'required',
          'incoterm' =>'required',
          'mesto3' =>'required',




        ]);






        $transport=new Transport($request->all());

       Mail::to('obradovicde@gmail.com')->send(new TransportEmail($transport));
  

        $transport->save();

        return redirect('/demand')->with('success','Uspesno ste poslali upit');


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
