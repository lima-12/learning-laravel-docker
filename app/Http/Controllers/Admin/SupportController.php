<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        /**
         * | $support = new Support();
         * | ao invez de fazer dessa forma, passamos Support na url o laravel já faz isso de uma forma "mágica"
         */
        
        $supports = $support->all();
        // dd($supports);

        // $supports = Support::all();



        return view('admin.supports.index', compact('supports'));
    }
}
