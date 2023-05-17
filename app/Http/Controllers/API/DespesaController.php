<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CriacaoDespesaRequest;
use App\Http\Resources\DespesaResource;
use App\Models\Despesa;
use Illuminate\Http\Request;

class DespesaController extends Controller
{

    public function index()
    {
        return DespesaResource::collection(Despesa::all());
    }

    public function store(CriacaoDespesaRequest $request)
    {
        $despesa = Despesa::create($request->validated());

        return new DespesaResource($despesa);
    }

    public function show(Despesa $despesa)
    {
        return new DespesaResource($despesa);
    }

    public function update(Request $request, Despesa $despesa)
    {
        $despesa->update($request->validated());

        return new DespesaResource($despesa);
    }

    public function destroy(string $id)
    {
        $despesa = Despesa::findOrFail($id);
        $despesa->delete();

        return response()->noContent();
    }
}
