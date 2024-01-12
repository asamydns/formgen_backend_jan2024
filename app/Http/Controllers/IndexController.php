<?php

namespace App\Http\Controllers;

use PDO;

use Carbon\Carbon;
use App\Models\Area;
use App\Models\Link;
use App\Models\Upload;
use App\Models\Dependent;
use Illuminate\Http\File;
use App\Models\Application;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class indexController extends Controller
{
    public function getArea(){
        $area = Area::all();
        try{
            return response()->json(['success' => true, 'data' => $area],200);
        }catch(\Exception $e){
            return response()->json(['success' => false, 'error' => $e],500);

        }
    }

    public function apply(Request $request){
        $data = $request->all();

        try {
            $APL_FName = $data['APL_FName'];

            if(!isset($data['APL_MName'])){
                $APL_MName = "";
            }else{
                $APL_MName = $data['APL_MName'];
            }

            $APL_LName = $data['APL_LName'];
            $APL_Title = $data['APL_Title'];
            

            if(!isset($data['APL_Address1'])){
                $APL_Address1 = "";
            }else{
                $APL_Address1 = $data['APL_Address1'];
            }

            if(!isset($data['APL_Address2'])){
                $APL_Address2 = "";
            }else{
                $APL_Address2 = $data['APL_Address2'];
            }

            if(!isset($data['APL_Address3'])){
                $APL_Address3 = "";
            }else{
                $APL_Address3 = $data['APL_Address3'];
            }

            $APL_Municipality = $data['APL_Municipality'];
            $APL_Gender = $data['APL_Gender'];
            $APL_DOB = $data['APL_DOB'];
            $APL_PPhone = $data['APL_PPhone'];

            if (!isset($data['APL_APhone'])) {
                $APL_APhone = "";
            }
            else {
                $APL_APhone = $data['APL_APhone'];
            }

            $APL_Email = $data['APL_Email'];
            $APL_Marital = $data['APL_Marital'];
            $APL_NID = $data['APL_NID'];
            $APL_NID_Number = $data['APL_NID_Number'];
            $APL_BPN = $data['APL_BPN'];
            $APL_HLOE = $data['APL_HLOE'];

            if(!isset($data['APL_HLOE_Other'])) {
                $APL_HLOE_Other = "";
            }
            else {
                $APL_HLOE_Other = $data['APL_HLOE_Other'];    
            }

            $APL_Passes = $data['APL_Passes'];
            $APL_Qualifications = $data['APL_Qualifications'];
            $APL_Training = $data['APL_Training'];
            $APL_Enrolled = $data['APL_Enrolled'];
            $APL_Family_Enrolled = $data['APL_Family_Enrolled'];
            $APL_Income = $data['APL_Income'];
            $APL_Dependent = $data['APL_Dependant'];
            $APL_Employ = $data['APL_Employ'];

            if(!isset($data['APL_Employ_Other'])) {
                $APL_Employ_Other = '';
            }
            else {
                $APL_Employ_Other = $data['APL_Employ_Other'];  
            }
            
            $APL_Housing = $data['APL_Housing'];
            $APL_Living = $data['APL_Living'];
            $APL_Own = $data['APL_Own'];
            $APL_Family_Own = $data['APL_Family_Own'];
            $APL_Interest = $data['APL_Interest'];
            $APL_Interest_Details = $data['APL_Interest_Details'];
            $APL_Expectation = $data['APL_Expectation'];
            $APL_Justification = $data['APL_Justification'];
            $APL_Obligations = $data['APL_Obligations'];

            if(!isset($data['APL_Obligations_Details'])){
                $APL_Obligations_Details = '';
            }else{
                $APL_Obligations_Details = $data['APL_Obligations_Details'];
            }

            $APL_Attend = $data['APL_Attend'];
            $APL_First_Apl = $data['APL_First_Apl'];

            $APL_Source = $data['APL_Source'];

            if (!isset($data['APL_Source_Other'])) {
                $APL_Source_Other = "";
            }
            else {
                $APL_Source_Other = $data['APL_Source_Other'];
            }

            $APL_Emg_FName = $data['APL_Emg_FName'];
            $APL_Emg_LName = $data['APL_Emg_LName'];

            if(!isset($data['APL_Emg_Address1'])){
                $APL_Emg_Address1 = "";
            }else{
                $APL_Emg_Address1 = $data['APL_Emg_Address1'];
            }

            if(!isset($data['APL_Emg_Address2'])){
                $APL_Emg_Address2 = "";
            }else{
                $APL_Emg_Address2 = $data['APL_Emg_Address2'];
            }

            if(!isset($data['APL_Emg_Address3'])){
                $APL_Emg_Address3 = "";
            }else{
                $APL_Emg_Address3 = $data['APL_Emg_Address3'];
            }

            $APL_Emg_Phone = $data['APL_Emg_Phone'];
            $APL_Emg_Relation = $data['APL_Emg_Relation'];
            $APL_Rec_FName = $data['APL_Rec_FName'];
            $APL_Rec_LName = $data['APL_Rec_LName'];

            if(!isset($data['APL_Rec_Address1'])){
                $APL_Rec_Address1 = "";
            }else{
                $APL_Rec_Address1 = $data['APL_Rec_Address1'];
            }

            if(!isset($data['APL_Rec_Address2'])){
                $APL_Rec_Address2 = "";
            }else{
                $APL_Rec_Address2 = $data['APL_Rec_Address2'];
            }

            if(!isset($data['APL_Rec_Address3'])){
                $APL_Rec_Address3 = "";
            }else{
                $APL_Rec_Address3 = $data['APL_Rec_Address3'];
            }

            $APL_Rec_Designation = $data['APL_Rec_Designation'];
            $APL_Rec_Phone = $data['APL_Rec_Phone'];
            $APL_Permission = $data['APL_Permission'];
            $APL_Subscribe = $data['APL_Subscribe'];
            
            if(!isset($data['APL_Character_Selection'])) {
                $APL_Character_Selection = '';
            }
            else {
                $APL_Character_Selection = $data['APL_Character_Selection'];  
            }

            if(!isset($data['APL_CRN'])) {
                $APL_CRN = '';
            }
            else {
                $APL_CRN = $data['APL_CRN'];  
            }

            $application_check = Application::where('APL_BPN','=', $APL_BPN)
                                                ->get();

        } catch (\Exception $e) {
            Log::channel('applicant')->info('Error for applicant(email: '.$data['APL_Email'].'): '.$e);
            return response()->json(['success' => false, 'errorCode' => 'a1'],500);
        }



        if ($application_check->isEmpty()) {
            
            try {
                $application = new Application();

                $application->APL_FName = $APL_FName;
                $application->APL_MName = $APL_MName;
                $application->APL_LName = $APL_LName;
                $application->APL_Title = $APL_Title;
                $application->APL_Address1 = $APL_Address1;
                $application->APL_Address2 = $APL_Address2;
                $application->APL_Address3 = $APL_Address3;
                $application->APL_Municipality = $APL_Municipality;
                $application->APL_Gender = $APL_Gender;
                $application->APL_DOB = $APL_DOB;
                $application->APL_PPhone = $APL_PPhone;
                $application->APL_APhone = $APL_APhone;
                $application->APL_Email = $APL_Email;
                $application->APL_Marital = $APL_Marital;
                $application->APL_NID = $APL_NID;
                $application->APL_NID_Number = $APL_NID_Number;
                $application->APL_BPN = $APL_BPN;
                $application->APL_HLOE = $APL_HLOE;
                $application->APL_HLOE_Other = $APL_HLOE_Other;
                $application->APL_Passes = $APL_Passes;
                $application->APL_Qualifications = $APL_Qualifications;
                $application->APL_Training = $APL_Training;
                $application->APL_Enrolled = $APL_Enrolled;
                $application->APL_Family_Enrolled = $APL_Family_Enrolled;
                $application->APL_Income = $APL_Income;
                $application->APL_Dependent = $APL_Dependent;
                $application->APL_Employ = $APL_Employ;
                $application->APL_Employ_Other = $APL_Employ_Other;
                $application->APL_Housing = $APL_Housing;
                $application->APL_Living = $APL_Living;
                $application->APL_Own = $APL_Own;
                $application->APL_Family_Own = $APL_Family_Own;
                $application->APL_Interest = $APL_Interest;
                $application->APL_Interest_Details = $APL_Interest_Details;
                $application->APL_Expectation = $APL_Expectation;
                $application->APL_Justification = $APL_Justification;
                $application->APL_Obligations = $APL_Obligations;
                $application->APL_Obligations_Details = $APL_Obligations_Details;
                $application->APL_Attend = $APL_Attend;
                $application->APL_First_Apl = $APL_First_Apl;
                $application->APL_Source = $APL_Source;
                $application->APL_Source_Other = $APL_Source_Other;
                $application->APL_Emg_FName = $APL_Emg_FName;
                $application->APL_Emg_LName = $APL_Emg_LName;
                $application->APL_Emg_Address1 = $APL_Emg_Address1;
                $application->APL_Emg_Address2 = $APL_Emg_Address2;
                $application->APL_Emg_Address3 = $APL_Emg_Address3;
                $application->APL_Emg_Phone = $APL_Emg_Phone;
                $application->APL_Emg_Relation = $APL_Emg_Relation;
                $application->APL_Rec_FName = $APL_Rec_FName;
                $application->APL_Rec_LName = $APL_Rec_LName;
                $application->APL_Rec_Address1 = $APL_Rec_Address1;
                $application->APL_Rec_Address2 = $APL_Rec_Address2;
                $application->APL_Rec_Address3 = $APL_Rec_Address3;
                $application->APL_Rec_Designation = $APL_Rec_Designation;
                $application->APL_Rec_Phone = $APL_Rec_Phone;
                $application->APL_Permission = $APL_Permission;
                $application->APL_Subscribe = $APL_Subscribe;
                $application->APL_Character_Selection = $APL_Character_Selection;
                $application->APL_CRN = $APL_CRN;

                /* Save application before creating Dependent for APL_ID */ 
                $application->save();

                if (strcmp($APL_Dependent, 'Y') == 0) {
                    $dependent_details = $data['APL_Dependents_Details'];
                    
                    for ($i=0; $i<count($dependent_details); $i++) {   
                        
                        $dependent = new Dependent();
                        $dependent->DPT_Value = $dependent_details[$i];
                        
                        $dependent->APL_ID = $application->APL_ID;

                        if (Str::contains($dependent->DPT_Value, '3U')) {
                            if (!isset($data['APL_3U']))
                                $dependent->DPT_Number = 0; 
                            else
                                $dependent->DPT_Number = $data['APL_3U'];                          
                        }

                        else if (Str::contains($dependent->DPT_Value, '3-5')) {
                                if (!isset($data['APL_3_5']))
                                $dependent->DPT_Number = 0; 
                            else
                                $dependent->DPT_Number = $data['APL_3_5'];
                        }

                        else if (Str::contains($dependent->DPT_Value, '6-11')) {
                                if (!isset($data['APL_6_11']))
                                $dependent->DPT_Number = 0; 
                            else
                                $dependent->DPT_Number = $data['APL_6_11'];
                           
                        }

                        else if (Str::contains($dependent->DPT_Value, '12-17')) {
                                if (!isset($data['APL_12_17']))
                                $dependent->DPT_Number = 0; 
                            else
                                $dependent->DPT_Number = $data['APL_12_17'];
                        }

                        else if (Str::contains($dependent->DPT_Value, '18A')) {
                                if (!isset($data['APL_18A']))
                                $dependent->DPT_Number = 0; 
                            else
                                $dependent->DPT_Number = $data['APL_18A'];
                        }
                        
                        $dependent->save();
                    }
                        
                }


                // save links
                if(isset($data['NME_Links'])){
                    $links = $data['NME_Links'];
                    for ($i=0; $i<count($links); $i++) { 
                        $newLink = new Link();
                        $newLink->LNK_Link = $links[$i];
                        $newLink->APL_ID = $application->APL_ID;
                        $newLink->save();
                    }
                }

            }
            catch (\Exception $e) {
                Log::channel('applicant')->info('Error for applicant(email: '.$data['APL_Email'].'): '.$e);
                return response()->json(['success' => false, 'errorCode' => 'a1'],500);
            }

            return response()->json(['success' => true, 'empty' => '', 'applicantID' => $application->APL_ID, 'email' => $APL_Email],201);
        }
        else{
            return response()->json(['success' => false, 'empty' => ''],200);
        }
        
    }


    public function upload(Request $request){
        $data = $request->all();

        $name = $data['name'];
        $folderName = $data['folderName'];
        $description = $data['description'];
        $id = $data['id'];
        $ran = rand(0, 999);
        $currentTime = Carbon::now();
        $unique = $ran.'-'.$currentTime->toTimeString();
        Storage::putFileAs('public/chunk/'.$folderName, new File($data['chunk']->path()), $data['count'].'-'.$name.'-'.$unique);

        if($data['final'] === 'true'){
            $files = Storage::files("public/chunk/".$folderName);
            sort($files);
            $ts = str_replace("public/","",$files[0]);
            for($i = 1; $i <= count($files) - 1; $i++){
                $fileName = str_replace("public/","",$files[$i]);
                $oldFile = Storage::disk('public')->get($fileName);
                Storage::disk('public')->append($ts, $oldFile);
            }
            
            $FileNameEnd = str_replace(' ', '_', $data['name']);
            Storage::move($files[0], '/'.$id.'/'.$ran.'-'.$FileNameEnd);
            Storage::deleteDirectory('public/chunk/'.$folderName);

            $applicant = Application::find($id);
            $newUploads = new Upload();
            $newUploads->UPD_APL_ID = $id;
            $newUploads->UPD_DocName = $data['name'];
            $newUploads->UPD_Desc = $description;
            $newUploads->UPD_FilePath = "/".$id.'/'.$ran.'-'.$FileNameEnd;


            try{
                $newUploads->save();
            }catch(\Exception $e){
                Log::channel('upload')->info('Error for upload (applicant ID: '.$id.'): '.$e);
                return response()->json(['success' => false],500);
    
            }

            return response()->json(['success' => true, 'final' => $data['final'], 'ts' => $ts, 'count' => count($files)],201);
        }
        
       
        return response()->json(['success' => true, 'final' => $data['final']],200);
    }

    public function test() {
        return response()->json("YAHP Part Time Backend");
    }

    
}
