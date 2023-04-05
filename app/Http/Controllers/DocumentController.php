<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

/**
 * Class DocumentController
 * @package App\Http\Controllers
 */
class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::all();

        return view('document.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $document = new Document();
        return view('document.create', compact('document'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Document::$rules);


        $document = new Document;
        $document->name= $request->get('name');
        $document->description= $request->get('description');
        $document->relevance= $request->get('relevance');
        if($request->hasFile('path')){
            $archivo=$request->file('path');
            $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
            $document->path = $archivo->getClientOriginalName();
        }
        $document->save();


        return redirect()->route('documents.index')
            ->with('success', 'Document created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $document = Document::find($id);
    

        return view('document.show', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $document = Document::find($id);

        return view('document.edit', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Document $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        request()->validate(Document::$rules);

        $document->update($request->all());
        if($request->hasFile('path')){
            $archivo=$request->file('path');
            $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
            $document->path = $archivo->getClientOriginalName();
        }
        $document->save();

        return redirect()->route('documents.index')
            ->with('success', 'Document updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $document = Document::find($id)->delete();

        return redirect()->route('documents.index')
            ->with('success', 'Document deleted successfully');
    }
}
