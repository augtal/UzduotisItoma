<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkerRequest;
use Illuminate\Http\Request;
use App\Models\Worker;
use App\Models\Company;

class WorkersController extends Controller
{
    public function index(){
        $workers = Worker::all()->toArray();

        return view('worker.show')->with('workers', $workers);
    }

    public function showCreateWorkerPage(){
        $companies = Company::all()->toArray();

        return view('worker.create')->with('companies', $companies);
    }

    public function createWorker(WorkerRequest $request){
        $request->validated();

        $data = $request->input();
        
        $this->saveWorker(new Worker(), $data);

        return redirect()->route('Workers');
    }

    public function showUpdateWorkerPage($id){
        $worker = Worker::where('id', $id)->first();
        $companies = Company::all()->toArray();

        return view('worker.update')->with('worker', $worker)->with('companies', $companies);
    }

    public function updateWorker(WorkerRequest $request, $id){
        $request->validated();

        $data = $request->input();

        $worker = Worker::where('id', $id)->first();
        $this->saveWorker($worker, $data);

        return redirect()->route('Workers');
    }

    public function deleteWorker($id){
        Worker::destroy($id);

        return redirect()->route('Workers');
    }

    private function saveWorker($worker, $data){
        $worker->name = $data['name'];
        $worker->email = $data['email'];
        $worker->phone = $data['phone'];
        $worker->company = (int)$data['company'];
        $worker->save();
    }
}
