<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CheckoutController extends Controller
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
        $orderName = $request->name;
        $orderLastName = $request->last_name;
        $orderCompanyName = $request->company_name;
        $orderEmail = $request->email;
        $orderPhone = $request->phone;
        $orderAddress = $request->address;
        $orderCity = $request->town_city;
        $orderZip = $request->zip;
        $orderNote = $request->note_box;
        $z24_id_sprzedawcy = $request->z24_id_sprzedawcy;
        $z24_crc = $request->z24_crc;
        $z24_return_url = $request->z24_return_url;
        $z24_language = $request->z24_language;
        $z24_nazwa = $request->z24_nazwa;
        $z24_kwota = $request->z24_kwota;


        Checkout::create([
            'Imie' => $orderName,
            'Nazwisko' => $orderLastName,
            'Nazwa_Firmy' => $orderCompanyName,
            'Email' => $orderEmail,
            'Telefon' => $orderPhone,
            'Adres' => $orderAddress,
            'Miasto' => $orderCity,
            'Kod_Pocztowy' => $orderZip,
            'Kategoria' => $z24_nazwa,
            'Notatki' => $orderNote,
        ]);


            return Http::get('https://sklep.przelewy24.pl/zakup.php?',[
                'z24_id_sprzedawcy' => $z24_id_sprzedawcy,
                'z24_crc' => $z24_crc,
                'z24_return_url' => $z24_return_url,
                'z24_language' => $z24_language,
                'z24_nazwa' => $z24_nazwa,
                'z24_kwota' => $z24_kwota
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        //
    }
}
