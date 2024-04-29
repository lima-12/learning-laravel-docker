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

    public function show(string|int $id)
    {
        // dd($id);

        # Support::where('id', $id)->first();
        # Support::where('id', '!=', $id)->first();
        if(!$support = Support::find($id)) {
            return back();
        }
        // dd($support);

        return view("admin.supports.show", compact("support"));
    }

    public function create()
    {
        return view("admin.supports.create");
    }

    public function store(Request $request, Support $support)
    {
        $data = $request->all();
        $data['status'] = "a";

        /**
         * importante deixar os valores com os nomes iguais as tabelas do banco
         */
        $support->create($data);

        return redirect()->route("supports.index");
    }

    public function edit(Support $support, string|int $id)
    {
        if(!$support = $support->find($id)) {
            return back();
        }

        return view("admin/supports.edit", compact("support"));
    }

    public function update(Request $request,  Support $support, string $id)
    {
        if(!$support = $support->find($id)) {
            return back();
        }

        $support->update($request->only([
            'subject', 
            'body'
        ]));

        return redirect()->route("supports.index");
    }

    public function destroy(Support $support, string|int $id)
    {
        if(!$support = $support->find($id)) {
            return back();
        }

        $support->delete();

        return redirect()->route("supports.index");
    }
}
