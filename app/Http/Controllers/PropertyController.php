<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class PropertyController extends BaseController
{

    /**
     * Handle the property add route
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function add(Request $request)
    {
        return view('property.add');
    }

    /**
     * Handle the property list route
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function list(Request $request)
    {
        //TODO: pagination!
        return view('property.list');
    }

     /**
     * Handle the viewing of property info based on uid
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $uid The unique identifier for the property.
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function view(Request $request, $uid)
    {
        
        return view('property.list');
    }
}
