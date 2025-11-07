<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DocumentationType;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\StoreDocumentationTypeRequest;
use App\Http\Requests\Admin\UpdateDocumentationTypeRequest;
use Illuminate\Support\Facades\Gate;

class DocumentationTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        return view('admin.documentation-type.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        return view('admin.documentation-type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDocumentationTypeRequest $request)
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        $input = $request->all();

        $record = DocumentationType::create($input);

        session()->flash('success', 'Запись успешно создана');
        if ($request->action == 'save-exit') {
            return redirect(route('admin.documentation-type.index'));
        }
        return redirect(route('admin.documentation-type.edit', $record->id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DocumentationType $documentationType)
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }

        return view('admin.documentation-type.edit', ['documentationType' => $documentationType]);
    }

    /**
     * Update the specified resource in storage.
     */
    /*public function update(UpdateFaqRequest $request, Faq $faq)
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        $input = $request->all();
        $request->filled('published') ? $input['published'] = 1 : $input['published'] = 0;
        $faq->update($input);

        session()->flash('success', 'Запись успешно обновлена');

        if ($request->action == 'save-exit') {
            return redirect(route('admin.faq.index'));
        }
        return redirect(route('admin.faq.edit', $faq->id));
    }*/


}
