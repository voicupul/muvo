<?php

namespace App\Http\Controllers;

use App\MyDBReader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DataController extends Controller
{
    //
    public function getDatabases()
    {
        $className = 'App\Models\Post';
        $dbReader = new MyDBReader($className);
        $linez = $dbReader->printProperties();
        return view('db.index', ['linez' => $linez]);
    }
}
