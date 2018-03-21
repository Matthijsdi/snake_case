<?php
/**
 * Created by PhpStorm.
 * User: Arnoudt
 * Date: 13-3-2018
 * Time: 12:41
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerenigingController extends Controller
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
        return view('vereniging');
    }
}
