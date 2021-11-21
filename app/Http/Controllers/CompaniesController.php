<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompaniesController extends Controller
{
    private $ImageDestinationPath = 'public/images/logo';

    /**
     * Shows all companies
     *
     * @return view company list view
     */
    public function index(){
        $companies = Company::all()->toArray();

        return view('company.show')->with('companies', $companies);
    }

    /**
     * Shows create new company page
     *
     * @return view create company view
     */
    public function showCreateCompanyPage(){
        return view('company.create');
    }

    /**
     * Validates form inputs and saves company to database
     *
     * @param CompanyRequest $request Custom form request
     * @return view companies list view
     */
    public function createCompany(CompanyRequest $request){
        $request->validated();

        $data = $request->input();

        $data['logo'] = $this->saveLogo($request);
        $this->saveCompany(new Company(), $data);
        
        return redirect()->route('Companies');
    }

    /**
     * Shows update company page based on companies id
     *
     * @param int $id companies id in database
     * @return view update company view
     */
    public function showUpdateCompanyPage($id){
        $company = Company::where('id', $id)->first();

        return view('company.update')->with('company', $company);
    }

    /**
     * Validates form inputs and updates company information in database
     *
     * @param CompanyRequest $request Custom form request
     * @param int $id companies id in database
     * @return view companies list view
     */
    public function updateCompany(CompanyRequest $request, $id){
        $request->validated();

        $data = $request->input();

        $data['logo'] = $this->updateLogo($request, $id);
        $company = Company::where('id', $id)->first();
        $this->saveCompany($company, $data);

        return redirect()->route('Companies');
    }

    /**
     * Deletes company from database
     *
     * @param int $id companies id in database
     * @return view companies list view
     */
    public function deleteCompany($id){
        $count = Company::find($id)->getWorkers->count();

        if($count == 0){
            // $this->deleteLogo($id);
            // Company::destroy($id);
        }
        else
            $message = 'Company has ' . $count . ' worker(s)';

        return redirect()->route('Companies')->with('message', $message);
    }

    /**
     * Function for saving company in database using eloquent
     *
     * @param Company $company company class object
     * @param Array $data new/updated data to be saved in database
     * @return boolean returns save value
     */
    private function saveCompany($company, $data){
        $company->name = $data['name'];
        $company->email = $data['email'];
        $company->url = $data['url'];
        $company->logo = $data['logo'];
        $company->save();

        return true;
    }

    /**
     * Saves gives logo to website storage
     *
     * @param CompanyRequest $request Custom form request
     * @return String returns saved image name
     */
    private function saveLogo($request){
        $data = $request->input();
        $imageName = '';

        if($request->hasFile('logo')){
            $image = $request->file('logo');
            $imageName = $data['name'].$image->getClientOriginalName();
            $image->storeAs($this->ImageDestinationPath, $imageName);
        }
        else
            $imageName = "noImage";

        return $imageName;
    }

    /**
     * Deletes companies logo based on companies ID in database
     *
     * @param int $id Companies id in database
     * @return void
     */
    private function deleteLogo($id){
        $company = Company::where('id', $id)->first();

        $path = $this->ImageDestinationPath . '/' . $company->logo;
        Storage::delete($path);
    }

    /**
     * Updates companies logo
     *
     * @param CompanyRequest $request Custom form request
     * @param int $id Companies id in database
     * @return String returns saved image name
     */
    private function updateLogo($request, $id){
        $this->deleteLogo($id);
        $imageName = $this->saveLogo($request);

        return $imageName;
    }
}
