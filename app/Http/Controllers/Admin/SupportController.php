<?php

namespace App\Http\Controllers\Admin;

use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupport;
use App\Models\Support;
use Illuminate\Http\Request;
use App\Services\SupportService;

class SupportController extends Controller
{

    public function __construct(protected SupportService $service)
    {}

    public function index(Request $request)
    {
        /**
         * | $support = new Support();
         * | ao inves de fazer dessa forma, passamos Support na url o laravel já faz isso de uma forma "mágica"
         * | $supports = $support->all();
         * | e podemos melhorar aionda mais passando no construtor.
         */

        $supports = $this->service->getAll($request->filter);

        // dd($supports);
        // $supports = Support::all();

        return view('admin.supports.index', compact('supports'));
    }

    public function show(string $id)
    {
        // dd($id);

        # Support::where('id', $id)->first();
        # Support::where('id', '!=', $id)->first();
        # if(!$support = Support::find($id)) {
        if (!$support = $this->service->findOne($id)) {
            return back();
        }
        // dd($support);

        return view("admin.supports.show", compact("support"));
    }

    public function create()
    {
        return view("admin.supports.create");
    }

    public function store(StoreUpdateSupport $request, Support $support)
    {

        /**
         * | importante deixar os valores com os nomes iguais as tabelas do banco
         * | apenas para padronizar
         */
        # $data = $request->validated();
        # $data['status'] = "a";
        # $support->create($data);

        $this->service->new(CreateSupportDTO::makeFromRequest($request));

        return redirect()->route("supports.index");
    }

    public function edit(Support $support, string|int $id)
    {
        # if(!$support = $support->find($id)) {
        if(!$support = $this->service->findOne($id)) {
            return back();
        }

        return view("admin/supports.edit", compact("support"));
    }

    public function update(StoreUpdateSupport $request,  Support $support, string $id)
    {
        $support = $this->service->update(UpdateSupportDTO::makeFromRequest($request));

        if(!$support) {
            return back();
        }

        return redirect()->route("supports.index");
    }

    public function destroy(string $id)
    {
//        if(!$support = $support->find($id)) {
//            return back();
//        }
//        $support->delete();

        $this->service->delete($id);

        return redirect()->route("supports.index");
    }
}
