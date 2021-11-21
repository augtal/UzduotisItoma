<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkerRequest;
use Illuminate\Http\Request;
use App\Models\Worker;
use App\Models\Company;

class WorkersController extends Controller
{
    /**
     * Shows all workers
     *
     * @return view worker list view
     */
    public function index(){
        $workers = Worker::all()->toArray();
        $companies = Company::all()->toArray();

        return view('worker.show')->with('workers', $workers)->with('companies',$companies);
    }

    /**
     * Shows create new worker page
     *
     * @return view create worker view
     */
    public function showCreateWorkerPage(){
        $companies = Company::all()->toArray();

        return view('worker.create')->with('companies', $companies);
    }

    /**
     * Validates form inputs and saves worker to database
     *
     * @param WorkerRequest $request
     * @return view workers list view
     */
    public function createWorker(WorkerRequest $request){
        $request->validated();

        $data = $request->input();

        $this->saveWorker(new Worker(), $data);

        return redirect()->route('Workers');
    }

    /**
     * Shows update worker page based on workers id
     *
     * @param int $id workers id in database
     * @return view update worker view
     */
    public function showUpdateWorkerPage($id){
        $worker = Worker::where('id', $id)->first();
        $companies = Company::all()->toArray();

        return view('worker.update')->with('worker', $worker)->with('companies', $companies);
    }

    /**
     * Validates form inputs and updates worker information in database
     *
     * @param WorkerRequest $request
     * @param int $id workers id in database
     * @return view workers list view
     */
    public function updateWorker(WorkerRequest $request, $id){
        $request->validated();

        $data = $request->input();

        $worker = Worker::where('id', $id)->first();
        $this->saveWorker($worker, $data);

        return redirect()->route('Workers');
    }

    /**
     * Deletes worker from database
     *
     * @param int $id workers id in database
     * @return view workers list view
     */
    public function deleteWorker($id){
        Worker::destroy($id);

        return redirect()->route('Workers');
    }

    /**
     * Function for saving worker in database using eloquent
     *
     * @param Worker $worker worker class object
     * @param Array $data new/updated data to be saved in database
     * @return boolean returns save value
     */
    private function saveWorker($worker, $data){
        $worker->name = $data['name'];
        $worker->email = $data['email'];
        $worker->phone = $data['phone'];
        $worker->company = (int)$data['company'];
        $worker->save();

        return true;
    }
}
