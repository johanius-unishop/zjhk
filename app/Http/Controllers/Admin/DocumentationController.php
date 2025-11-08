<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Documentation;
use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\StoreDocumentationRequest;
use App\Http\Requests\Admin\UpdateFaqRequest;
use App\Models\DocumentationType;
use Illuminate\Support\Facades\Gate;

class DocumentationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        return view('admin.documentation.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }

        $vendors = Vendor::get(array('name', 'id'));
        $documentationTypes = DocumentationType::get(array('name', 'id'));

        return view('admin.documentation.create', compact('vendors', 'documentationTypes'));
    }

    public function store(StoreDocumentationRequest $request)
    {
        // Проверка прав доступа
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }

        // Подготовка входных данных
        $input = $request->all();
        //$input['published'] = $request->filled('published'); // Преобразуем в boolean

        // Создание записи
        $record = Documentation::create($input);

        // Обработка загрузки изображения для документа
        if ($request->hasFile('imageDocument')) {
            $record
                ->addMediaFromRequest('imageDocument')
                ->toMediaCollection('images');
        }

        if ($request->hasFile('fileDocument')) {
            $record
                ->addMediaFromRequest('fileDocument')
                ->toMediaCollection('files');
        }

        // Уведомление об успехе
        session()->flash('toast-success', 'Запись успешно создана');

        return redirect()->route('admin.documentation.index', $record->id);
    }

    public function edit(Documentation $documentation)
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }

        $vendors = Vendor::select(['name', 'id'])
                    ->orderBy('name')
                    ->get();

        $types = DocumentationType::select(['name', 'id'])
                    ->orderBy('name')
                    ->get();
        return view('admin.vendor.edit', compact('documentation', 'vendors', 'types'));

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
