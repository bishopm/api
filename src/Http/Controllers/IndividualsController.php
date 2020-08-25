<?php

namespace Bishopm\Api\Http\Controllers;

use App\Http\Controllers\Controller;
use Bishopm\Api\Models\Individual;
use Illuminate\Http\Request;

class IndividualsController extends Controller
{

    public function index()
    {
        return Individual::orderBy('created_at')->get();
    }

    public function edit($id)
    {
        return Individual::find($id);
    }

    public function store(Request $request)
    {
        return Individual::create($request->except('_token','files'));
    }
    
    public function update(Request $request)
    {
        $individual = Individual::find($request->id);
        $individual->update($request->except('_token','files'));
        return $individual;
    }

    public function destroy()
    {

    }
}
