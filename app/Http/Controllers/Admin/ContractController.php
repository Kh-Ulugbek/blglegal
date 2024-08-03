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
}
