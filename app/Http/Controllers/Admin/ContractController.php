<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index()
    {
        return view('admin.pages.contracts.index');
    }

    public function edit($id)
    {
        $item = Contract::query()->findOrFail($id);
        return view('admin.pages.document-editor', compact('item'));
    }

    public function update($id, Request $request)
    {
        $item = Contract::query()->findOrFail($id);
        $item->content = $request->get('content');
        $item->save();
        return redirect()->back();
    }
}
