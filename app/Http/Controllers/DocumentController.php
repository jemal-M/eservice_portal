<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
    public function index()
    {
        return Document::all();
    }
    public function show(Document $document)
    {
        return $document;
    }
    public function store(Request $request)
    {
        if($request->hasFile('file_pah')){
              
            $filenameWithExt = $request->file('file_pah')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file_pah')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('file_pah')->storeAs('public/file_pah', $fileNameToStore);

        }
        $request->request->add(['file_pah' => $fileNameToStore]);
        $request->request->add(['user_id' => Auth::user()->id]);
        $request->request->add(['file_pah' => $fileNameToStore]);
        $document = Document::create($request->all());
        return response()->json($document, 201);

    }
    public function update(Request $request, Document $document)
    {
        $document->update($request->all());

        return response()->json($document, 200);
    }
    public function delete(Document $document)
    {
        $document->delete();

        return response()->json(null, 204);
    }

}
