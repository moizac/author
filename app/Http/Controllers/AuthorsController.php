<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

use Illuminate\Http\Request;

use App\Models\Author;

class AuthorsController extends BaseController
{
    public function index()
    {
        $Author = Author::all();
        return response()->json([
            'message' => 'Show all author',
            'data' => $Author
        ], 200);
    }
    public function show($id)
    {
        $Author = Author::find($id);
        if($Author){
            return response()->json([
                'message' => 'Author Found!',
                'data' => $Author
            ], 200);
        }else{
            return response()->json([
                'message' => 'Author not Found!'
            ], 404);
        }
    }
    public function store(Request $request)
    {
    $this->validate($request, [
        'name' => 'required',
        'gender' => 'required',
        'biography' => 'required',
    ]);
    $Author = Author::create(
        $request->only(['name', 'gender', 'biography'])
      );
  
      return response()->json([
        'message' => 'Data Created!',
        'data' => $Author
      ], 201);
    }
    public function update(Request $request, $id)
  {
    try {
      $Author = Author::findOrFail($id);
    } catch (ModelNotFoundException $e) {
      return response()->json([
        'message' => 'Author not found',
      ], 404);
    }

    $Author->fill(
      $request->only(['name', 'gender', 'biography'])
    );
    $Author->save();

    return response()->json([
      'message' => 'Data updated!',
      'data' => $Author
    ], 200);
  }
  public function destroy($id)
  {
    try {
      $Author = Author::findOrFail($id);
    } catch (ModelNotFoundException $e) {
      return response()->json([
        'error' => [
          'message' => 'Author not found!',
        ]
      ], 404);
    }

    $Author->delete();

    return response()->json([
      'message' => 'Data deleted!',
    ], 200);
  }
}

