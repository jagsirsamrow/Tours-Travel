<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Requests;
use \Illuminate\Http\Response;
use App\Models\Company;
use Illuminate\Support\Facades\Redirect;


class CompanyController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    function company() {
        $data = Company::find(1);
        // dd($data);
        return view("admin.company.create", compact('data'));
    }

    function company_profile(Request $request) {
        $data = $request->input();
        $company = Company::find(1);
        try {
            $company->c_name = !empty($data['c_name']) ? $data['c_name'] : '';
            $company->c_address = !empty($data['c_address']) ? $data['c_address'] : '';
            $company->c_mobile = !empty($data['c_mobile']) ? $data['c_mobile'] : '';
            $company->c_email = !empty($data['c_email']) ? $data['c_email'] : '';
            $company->c_map = !empty($data['c_map']) ? $data['c_map'] : '';
            $company->c_other_mobile = !empty($data['c_other_mobile']) ? $data['c_other_mobile'] : '';
            $company->c_other_email = !empty($data['c_other_email']) ? $data['c_other_email'] : '';
            $company->post = !empty($data['post']) ? $data['post'] : '';
            $company->save();
            return Redirect::to('company')->with('status', "Company details successfully updated.");
        } catch (Exception $e) {
            return Redirect::to('company')->with('failed', "Some Problem Occure!!!!");
        }
    }

    function change_logo(Request $request) {
        $path = "company";
        $company = Company::find(1);
        try {
            $type = $request->type;
            if (!empty($request->file('file'))) {
                $destinationPath = 'storage/';
                File::delete($destinationPath . $company[$type]);
                $file = $request->file('file')->storeAs($path, $request->file('file')->getClientOriginalName());
            }

            if ($type == 'c_logo') {
                $company->c_logo = $file;
            } else if ($type == 'c_logo_2') {
                $company->c_logo_2 = $file;
            } else if ($type == 'c_fevi') {
                $company->c_fevi = $file;
            }

            $company->save();
            return response()->json(['success' => true, 'message' => "Website Black Logo Change successfully!", 'data' => $company]);
        } catch (Exception $e) {
            return response()->json(['success' => false, 'message' => "Error!", 'detail' => $e]);
        }
    }
}
