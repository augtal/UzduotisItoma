<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkerUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Worker;
use App\Models\Company;

class WorkersController extends Controller
{
    public function index(){
        $workers = Worker::all()->toArray();

        // dd($workers);
        return view('worker.show')->with('workers', $workers);
    }

    public function showCreateWorkerPage(){
        return view('worker.create');
    }

    public function showUpdateWorkerPage($id){
        $worker = Worker::where('id', $id)->first();
        $companies = Company::all()->toArray();

        return view('worker.update')->with('worker', $worker)->with('companies', $companies);
    }

    public function createWorker(){
        return;
    }

    public function updateWorker(WorkerUpdateRequest $request, $id){
        $request->validated();

        $data = $request->all();

        $worker = Worker::where('id', $id)->first();
        $worker->name -> $data['name'];
        $worker->email -> $data['email'];
        $worker->phone -> $data['phone'];
        $worker->company -> $data['company'];

        $worker->save();
    }

    public function deleteWorker(){
        return;
    }
}
