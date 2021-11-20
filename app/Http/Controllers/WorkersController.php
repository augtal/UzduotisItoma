<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkersController extends Controller
{
    public function createWorker(){
        return;
    }

    public function index(){
        $workers = Worker::all();

        return view('worker.show')->with('workers', $workers);
    }

    public function showUpdateWorkerPage($id){
        $worker = Worker::get($id);

        return view('worker.update')->with('worker', $worker);
    }

    public function deleteWorker(){
        return;
    }
}
