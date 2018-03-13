<?php
/**
 * Created by PhpStorm.
 * User: Matthijs
 * Date: 8-3-2018
 * Time: 13:46
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WedstrijdInfoController extends Controller
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
        return view('wedstrijdinfo');
    }
}
