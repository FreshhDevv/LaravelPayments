<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Obtain payment details
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pay(Request $request)
    {
       
        $rules = [
            'value' => ['required', 'numeric', 'min:5'],
            'currency' => ['required', 'exists:currencies,iso'],
            'paymentPlatform' => ['required', 'exists:payment_platforms,id'],
        ];

        $request->validate($rules);

        return $request->all();
       
    }

    public function approval() {
        //
    }

    public function cancelled() {
        //
    }
}
