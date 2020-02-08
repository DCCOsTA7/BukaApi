<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Level;

class LevelController extends Controller
{
    public function getLevels()
    {
        $levels = Level::paginate(30);

        return response()->json($levels);
    }

    public function createNewLevel(Request $request)
    {
        $level = new Level();
        $level->name = $request['name'];
        $level->description = $request['description'];
        $level->save();

        return response()->json([
            'status' => 200,
            'message' => 'Level Created succesfully!',
            'data' => $level
        ]);
    }
}