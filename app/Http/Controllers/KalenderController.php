<?php
/**
 * Created by PhpStorm.
 * User: Milan
 * Date: 29-3-2018
 * Time: 13:17
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalenderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kalender');
    }
}