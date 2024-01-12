@extends('Layouts.layout')
    @section('Title', 'Application')
    @section('Content')
        <body>

        <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="bg-plum-plate bg-animation">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div></div>
                        <div class="modal-dialog w-100 mx-auto">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <label for="FName" class="card-title">You are logged in as: <span class="text-danger">{{$user->LGN_Name}}</span></label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="position-relative form-group d-flex justify-content-start">
                                                <button class=" btn-pill btn-shadow btn-hover-shine btn btn-primary btn-sm"  onClick = "home()">Home </button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group d-flex justify-content-end">
                                                <button class=" btn-pill btn-shadow btn-hover-shine btn btn-primary btn-sm"  onClick = "logout()">Logout </button>
                                            </div>
                                        </div>

                                        @if($score !== null)
                                        <div class="col-md-12">
                                            <div class="position-relative form-group text-center">
                                                <label for="FName" class="card-title scoreTitle"><span class="text-danger">YOUR SCORES</span></label>
                                            </div>
                                        </div>
                                        @endif

                                
                                        @if($score !== null)
                                        <div class="col-md-6">
                                            <div class="position-relative form-group text-center">
                                                <label for="mscore" class="card-title scoreTitle">Proven Interest<span class="text-danger">
                                                    

                                                        {{$score->SCR_Score}}
                                                    
                                                </span></label>
                                            </div>
                                        </div>

                                        @endif

                                        @if($score !== null)
                                        <div class="col-md-6">
                                            <div class="position-relative form-group text-center">

                                                <label for="mscore" class="card-title scoreTitle">Social Situation: <span class="text-danger">
                                                   

                                                        {{$score->SCR_Score_2}}
                                                    
                                                </span></label>
                                            </div>
                                        </div>
                                        @endif

                                        @if($score !== null)
                                        <div class="col-md-6">
                                            <div class="position-relative form-group text-center">
                                                <label for="mscore" class="card-title scoreTitle">Education: <span class="text-danger">
                                                    

                                                        {{$score->SCR_Score_3}}
                                                    
                                                </span></label>
                                            </div>
                                        </div>
                                        @endif

                                        @if($score !== null)
                                        <div class="col-md-6">
                                            <div class="position-relative form-group text-center">
                                                <label for="mscore" class="card-title">Personal Attributes: <span class="text-danger">
                                                    

                                                        {{$score->SCR_Score_4}}
                                                    
                                                </span></label>
                                            </div>
                                        </div>
                                        @endif

                                        <div class="col-md-12">
                                            <div class="position-relative form-group d-flex justify-content-center">
                                            <label for="Average" class="card-title">Average Score
                                                <span class="text-danger">
                                                
                                                @if($totalMean !== null)    

                                                    {{$totalMean}}

                                                @endif
                                                </span>
                                            </label>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <hr>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <form name="update-duplicate" id="duplicate" method="post" action="{{url('duplicate')}}">
                                                    @csrf
                                                    <label for="FName" class="card-title"><span class="text-danger"></span>Flag this record as a duplicate?</label><br>
                                                    
                                                    <input class="form-check-input" type="hidden" name="applicantID"  value="{{$applicant->APL_ID}}">
                                                    <input class="form-check-input" type="hidden" name="user"  value="{{$user->LGN_Name}}">

                                                    <div class="form-check form-check-inline">
                                                        @if ($applicant->APL_Dup == 'Y')
                                                            <input class="form-check-input" type="radio" name="duplicateOptions" id="inlineRadio1" value="Y" checked>
                                                        @else
                                                            <input class="form-check-input" type="radio" name="duplicateOptions" id="inlineRadio1" value="Y">
                                                        @endif
                                                        
                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                      </div>

                                                      <div class="form-check form-check-inline">
                                                        @if ($applicant->APL_Dup == 'N')
                                                            <input class="form-check-input" type="radio" name="duplicateOptions" id="inlineRadio1" value="N" checked>
                                                        @else
                                                            <input class="form-check-input" type="radio" name="duplicateOptions" id="inlineRadio1" value="N">
                                                        @endif
                                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                                      </div><br><br>
                                                      <button type="submit" class=" btn-pill btn-shadow btn-hover-shine btn btn-primary btn-sm">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <hr>
                                        <div class="h5 modal-title">
                                            <h4 class="mt-2">
                                                <div>Personal Information</div>
                                                <span></span>
                                            </h4>
                                        </div>


                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="FName" class="card-title"><span class="text-danger"></span>Name</label>
                                                    <h5>{{$applicant->APL_Title}}. {{$applicant->APL_FName}} {{$applicant->APL_MName}} {{$applicant->APL_LName}}</h5>
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="Address1" class="card-title"><span class="text-danger"></span>Address</label>
                                                    <p>{{$applicant->APL_Address1}}<br>{{$applicant->APL_Address2}}</p>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                <label for="Address3" class="card-title"><span class="text-danger"></span>City</label>
                                                <p>{{$applicant->APL_Address3}}</p>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                <label for="municipality" class="card-title"><span class="text-danger"></span>Municipality</label>
                                                <p>{{$applicant->Area_CC}}</p>
                                                </div>
                                            </div>

                                        </div><br>
                                        
                                        <div class="form-row">

                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label class="card-title"><span class="text-danger"></span>Gender</label>
                                                    <p>
                                                        @if($applicant->APL_Gender === 'F')
                                                            Female
                                                        @else
                                                            Male
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="DOB" class="card-title"><span class="text-danger"></span>Date of Birth</label>
                                                    <p>{{$applicant->APL_DOB}}</p>
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label class="card-title"><span class="text-danger"></span>Marital Status</label>
                                                    <p>{{$applicant->MAR_Status}}</p>
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label class="card-title"><span class="text-danger"></span>Email</label>
                                                    <p>{{$applicant->APL_Email}}</p>
                                                </div>
                                            </div>
                                        </div><br>
                                        
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="PrimNum" class="card-title"><span class="text-danger"></span>Primary Contact Number</label>
                                                    <p>{{$applicant->APL_PPhone}}</p>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="PrimNum" class="card-title"><span class="text-danger"></span>Alternate Contact Number</label>
                                                    <p>{{$applicant->APL_APhone}}</p>
                                                </div>
                                            </div>
                                        </div><br>


                                        <hr>
                                        <div class="h5 modal-title">
                                            <h4 class="mt-2">
                                                <div>Proof of Nationality</div>
                                                <span></span>
                                            </h4>
                                        </div>

                                        
                                        <div class="form-row">

                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label class="card-title"><span class="text-danger"></span>Form of Identification</label>
                                                        <p>
                                                            @if($applicant->APL_TTID == 'NID')
                                                                National ID
                                                            @elseif ($applicant->APL_TTID == 'PP')
                                                                Passport 
                                                            @else
                                                                Driver's Permit 
                                                            @endif
                                                        </p>
                                                </div>
                                            </div>

                                            
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label class="card-title"><span class="text-danger"></span>Identification Number</label>
                                                    <p>{{$applicant->APL_NID_Number}}</p>
                                                </div>
                                            </div>
                                        </div><br>


                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label class="card-title"><span class="text-danger"></span>Birth Certificate Pin</label>
                                                    <p>{{$applicant->APL_BPN}}</p>
                                                </div>
                                            </div>
                                        </div><br>



                                        <hr>
                                        <div class="h5 modal-title">
                                            <h4 class="mt-2">
                                                <div>Educational Information</div>
                                                <span></span>
                                            </h4>
                                        </div>


                                        <div class="form-row">
                                            <div class="col-md-11">
                                                <div class="position-relative form-group">
                                                    <label for="HomeNum" class="card-title"><span class="text-danger"></span>HIGHEST LEVEL OF EDUCATION</label>
                                                    <p>@if($applicant->Hloe_Code == 'ZO')
                                                        {{$applicant->Hloe_Desc}}: {{$applicant->APL_HLOE_Other}}
                                                    @else
                                                    {{$applicant->Hloe_Desc}}
                                                    @endif</p>
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="form-row">
                                            <div class="col-md-11">
                                                <div class="position-relative form-group">
                                                    <label for="HomeNum" class="card-title"><span class="text-danger"></span>DO YOU HAVE TWO O'LEVELS?</label>
                                                    <p>@if($applicant->APL_Passes == 'N')
                                                            No
                                                        @else
                                                            Yes
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>


                                        <div class="form-row">
                                            <div class="col-md-11">
                                                <div class="position-relative form-group">
                                                    <label for="HomeNum" class="card-title"><span class="text-danger"></span>DO YOU HAVE TRAINING OR EXPERIENCE IN THE FIELD OF AGRICULTURE?</label>
                                                    <p>@if($applicant->APL_Training == 'N')
                                                            No
                                                        @else
                                                            Yes
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="form-row">
                                            <div class="col-md-11">
                                                <div class="position-relative form-group">
                                                    <label for="HomeNum" class="card-title"><span class="text-danger"></span>ARE YOU CURRENTLY ENROLLED IN SCHOOL OR TRAINING FULL TIME?</label>
                                                    <p>@if($applicant->APL_Enrolled == 'N')
                                                            No
                                                        @else
                                                            Yes
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>

                                        <hr>
                                        <div class="h5 modal-title">
                                            <h4 class="mt-2">
                                                <div>Ministry Programmes</div>
                                                <span></span>
                                            </h4>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-11">
                                                <div class="position-relative form-group">
                                                    <label for="HomeNum" class="card-title"><span class="text-danger"></span>ARE YOU OR ANY OF YOUR IMMEDIATE FAMILY ENROLLED IN ANY YOUTH IN AGRICULTURE PROGRAMMES?</label>
                                                    <p>@if($applicant->APL_Family_Enrolled == 'N')
                                                            No
                                                        @else
                                                            Yes
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>

                                        <hr>
                                        <div class="h5 modal-title">
                                            <h4 class="mt-2">
                                                <div>Socio-Economic Status</div>
                                                <span></span>
                                            </h4>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="HomeNum" class="card-title"><span class="text-danger"></span>WHICH ONE OF THE FOLLOWING BEST DESCRIBES YOUR MONTHLY HOUSEHOLD INCOME?</label>
                                                    <p>{{$applicant->INC_Desc}}</p>
                                                </div>
                                            </div>
                                        </div><br>


                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="card-title"><span class="text-danger"></span>DO YOU HAVE ANY DEPENDENTS (PEOPLE WHO YOU ARE FINANCIALLY RESPONSIBLE FOR)?</label>
                                                    <p>
                                                        @if ($applicant->APL_Dependent == 'Y')
                                                            Yes, children include:
                                                            @if ($dependents !== null)
                                                                <table class="card-table">
                                                                    <tr>
                                                                        <th class="card-table-header">Age Group </th>
                                                                        <th class="card-table-header">Amount </th>
                                                                    </tr>
                                                                    @foreach ($dependents as $dependent)
                                                                        <tr>
                                                                            <td>{{ $dependent->AGE_Desc }}</td>
                                                                            <td>{{ $dependent->DPT_Number }}</td>
                                                                        </tr>
                                                                    @endforeach
                                                                </table><br>

                                                            @endif
                                                        @else
                                                            No
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>


                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="HomeNum" class="card-title"><span class="text-danger"></span>WHICH ONE OF THE FOLLOWING BEST DESCRIBES YOUR CURRENT EMPLOYMENT STATUS?</label>
                                                    <p>{{$applicant->EMP_Desc}}</p>
                                                </div>
                                            </div>
                                        </div><br>


                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="HomeNum" class="card-title"><span class="text-danger"></span>WHICH ONE OF THE FOLLOWING BEST DESCRIBES YOUR HOUSING ARRANGEMENT?</label>
                                                    <p>{{$applicant->HOU_Status}}</p>
                                                </div>
                                            </div>
                                        </div><br>


                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="HomeNum" class="card-title"><span class="text-danger"></span>DO YOU OWN ANY LAND OR PROPERTY?</label>
                                                    <p>

                                                        @if ($applicant->APL_Own == 'N')
                                                            No
                                                        @else
                                                            Yes
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="HomeNum" class="card-title"><span class="text-danger"></span>DO YOU OR ANY OF YOUR IMMEDIATE FAMILY (MOTHER, FATHER, SIBLING) OWN OR HAVE A LEASE AGREEMENT FOR STATE OR AGRICULTURE LAND?</label>
                                                    <p>

                                                        @if ($applicant->APL_Family_Own == 'N')
                                                            No
                                                        @else
                                                            Yes
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>

                                      
                                        <hr>
                                        <h4>
                                            <div>Agricultural Interest</div>
                                        </h4><br>
                                        
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="HomeNum" class="card-title"><span class="text-danger"></span>ARE YOU INTERESTED IN BECOMING A 21ST CENTURY AGRO-ENTREPRENEUR?</label>
                                                    <p>

                                                        @if ($applicant->APL_Interest == 'N')
                                                            No
                                                        @else
                                                            Yes
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>


                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="HomeNum" class="card-title"><span class="text-danger"></span>PLEASE GIVE A BRIEF DESCRIPTION OF YOUR INTEREST OR TRAINING IN THE AGRICULTURE SECTOR (INCLUDE BOTH FORMAL OR INFORMAL).</label>
                                                    <p>{{$applicant->APL_Interest_Details}}</p>
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="HomeNum" class="card-title"><span class="text-danger"></span>WHAT DO YOU EXPECT TO GAIN UPON COMPLETION OF THE YAHP PROGRAMME?</label>
                                                    <p>{{$applicant->APL_Expectation}}</p>
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="HomeNum" class="card-title"><span class="text-danger"></span>PLEASE INDICATE WHY YOU THINK YOU SHOULD BE SELECTED AS A PARTICIPANT OF THE PART TIME YAHP PROGRAMME</label>
                                                    <p>{{$applicant->APL_Justification}}</p>
                                                </div>
                                            </div>
                                        </div><br>


                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="HomeNum" class="card-title"><span class="text-danger"></span>ARE THERE ANY OBLIGATIONS THAT MAY AFFECT YOUR SUCCESSFUL COMPLETION OF THIS TRAINING?</label>
                                                    <p>

                                                        @if ($applicant->APL_Obligations == 'Y')
                                                            Yes <br>
                                                            State Obligations: {{$applicant->APL_Obligations_Details}}<br>
                                                        @else
                                                            No
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>


                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="HomeNum" class="card-title"><span class="text-danger"></span>WILL YOU BE ABLE TO ATTEND AT LEAST 85% OF CLASSES?</label>
                                                    <p>

                                                        @if ($applicant->APL_Attend == 'Y')
                                                            Yes
                                                        @else
                                                            No
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="HomeNum" class="card-title"><span class="text-danger"></span> IS THIS YOUR FIRST TIME APPLYING TO THIS PROGRAMME?</label>
                                                    <p>

                                                        @if ($applicant->APL_First_Apl == 'Y')
                                                            Yes
                                                        @else
                                                            No
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>


                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="HomeNum" class="card-title"><span class="text-danger"></span>HOW DID YOU FIND OUT ABOUT THE PROGRAMME?</label>
                                                    <p>
                                                        @if ($applicant->APL_Source == 'OTH')
                                                            Other: {{$applicant->APL_Source_Other}}
                                                        @else
                                                            {{$applicant->SRC_Desc}}</p>
                                                        @endif
                                                </div>
                                            </div>
                                        </div><br>

                                        <hr>
                                        <h4>
                                            <div>Emergency Contact Information</div>
                                        </h4><br>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="FName" class="card-title"><span class="text-danger"></span>Name</label>
                                                    <p>{{$applicant->APL_Emg_FName}} {{$applicant->APL_Emg_LName}}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="Address1" class="card-title"><span class="text-danger"></span>Address</label>
                                                    <p>{{$applicant->APL_Emg_Address1}}<br>{{$applicant->APL_Emg_Address2}}</p>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                <label for="Address3" class="card-title"><span class="text-danger"></span>City</label>
                                                <p>{{$applicant->APL_Emg_Address3}}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="PrimNum" class="card-title"><span class="text-danger"></span>Primary Contact Number</label>
                                                    <p>{{$applicant->APL_Emg_Phone}}</p>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="PrimNum" class="card-title"><span class="text-danger"></span>Relationship</label>
                                                    <p>{{$applicant->APL_Emg_Relation}}</p>
                                                </div>
                                            </div>
                                        </div><br>


                                        <hr>
                                        <h4>
                                            <div>Recommender Information</div>
                                        </h4><br>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="FName" class="card-title"><span class="text-danger"></span>Name</label>
                                                    <p>{{$applicant->APL_Rec_FName}} {{$applicant->APL_Rec_LName}}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="Address1" class="card-title"><span class="text-danger"></span>Address</label>
                                                    <p>{{$applicant->APL_Rec_Address1}}<br>{{$applicant->APL_Rec_Address2}}</p>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                <label for="Address3" class="card-title"><span class="text-danger"></span>City</label>
                                                <p>{{$applicant->APL_Rec_Address3}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="PrimNum" class="card-title"><span class="text-danger"></span>Primary Contact Number</label>
                                                    <p>{{$applicant->APL_Rec_Phone}}</p>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="PrimNum" class="card-title"><span class="text-danger"></span>Designation</label>
                                                    <p>{{$applicant->APL_Rec_Designation}}</p>
                                                </div>
                                            </div>
                                        </div><br>
                                        
                                        <hr>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="HomeNum" class="card-title"><span class="text-danger"></span> CAN THE MINISTRY OF YOUTH DEVELOPMENT AND NATIONAL SERVICE USE YOUR PHOTOGRAPH AND IMAGE FOR FUTURE VIDEOS, PUBLICATIONS, BROCHURES, WEBSITES AND SOCIAL MEDIA?</label>
                                                    <p>

                                                        @if ($applicant->APL_Permission == 'Y')
                                                            Yes
                                                        @else
                                                            No
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="HomeNum" class="card-title"><span class="text-danger"></span>WOULD YOU LIKE TO SUBSCRIBE TO THE MINISTRY'S MAILING LIST FOR UPDATES ON UPCOMING PROJECTS AND PROGRAMMES?</label>
                                                    <p>

                                                        @if ($applicant->APL_Subscribe == 'Y')
                                                            Yes
                                                        @else
                                                            No
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>
                                        


                                        

                                        <hr>

                                        <h4>
                                            <div>Required Documents:</div>
                                        </h4>


                                        <div class="position-relative form-group">                                       
                                            <label for="exampleFile" class="card-title">National Identification</label>
                                            <ul>
                                                @if($uploads !== null)

                                                    @foreach($uploads as $upload)

                                                        @if($upload->UPD_Desc === 'idcard')
                                                            <li><u class = "fileLink"><p class = "cursor fileLink" onclick = 'getFile("{{$upload->UPD_ID}}")' >{{$upload->UPD_DocName}}</p></u></li>
                                                        @endif

                                                    @endforeach

                                                @endif
                                            </ul>                                      

                                        </div>


                                            <div class="position-relative form-group">                                       
                                                <label for="exampleFile" class="card-title">Birth Paper</label>
                                                <ul>
                                                    @if($uploads !== null)

                                                        @foreach($uploads as $upload)

                                                            @if($upload->UPD_Desc === 'Birth Paper')
                                                                <li><u class = "fileLink"><p class = "cursor fileLink" onclick = 'getFile("{{$upload->UPD_ID}}")' >{{$upload->UPD_DocName}}</p></u></li>
                                                            @endif

                                                        @endforeach

                                                    @endif
                                                </ul>                                      

                                            </div>

                                            <div class="position-relative form-group">                                       
                                                <label for="exampleFile" class="card-title">Academic Certificates</label>
                                                <ul>
                                                    @if($uploads !== null)

                                                        @foreach($uploads as $upload)

                                                            @if($upload->UPD_Desc === 'academic certificates')
                                                                <li><u class = "fileLink"><p class = "cursor fileLink" onclick = 'getFile("{{$upload->UPD_ID}}")' >{{$upload->UPD_DocName}}</p></u></li>
                                                            @endif

                                                        @endforeach

                                                    @endif
                                                </ul>                                      

                                            </div>


                                            <div class="position-relative form-group">                                       
                                                <label for="exampleFile" class="card-title">Letter of Recommendation</label>
                                                <ul>
                                                    @if($uploads !== null)

                                                        @foreach($uploads as $upload)

                                                            @if($upload->UPD_Desc === 'Letter of Recommendation')
                                                                <li><u class = "fileLink"><p class = "cursor fileLink" onclick = 'getFile("{{$upload->UPD_ID}}")' >{{$upload->UPD_DocName}}</p></u></li>
                                                            @endif

                                                        @endforeach

                                                    @endif
                                                </ul>                                      

                                            </div>


                                            <div class="position-relative form-group">                                       
                                                <label for="exampleFile" class="card-title">Police Certificate of Character</label>
                                                <ul>
                                                    @if($uploads !== null)

                                                        @foreach($uploads as $upload)

                                                            @if($upload->UPD_Desc === 'Certificate of Character')
                                                                <li><u class = "fileLink"><p class = "cursor fileLink" onclick = 'getFile("{{$upload->UPD_ID}}")' >{{$upload->UPD_DocName}}</p></u></li>
                                                            @endif

                                                        @endforeach

                                                    @endif
                                                    @if ($applicant->APL_CRN != NULL) 
                                                        <li><p>Receipt Number: {{$applicant->APL_CRN}}</p></li>
                                                    @endif
                                                    
                                                </ul>                                      

                                            </div>



                                            <hr>

                                            <h4>
                                                <div>Supporting Video Links and Pictures:</div>
                                            </h4>
    
                                                <div class="position-relative form-group">                                       
                                                    <label for="exampleFile" class="card-title">Photos</label>
                                                    <ul>
                                                        @if($uploads !== null)
    
                                                            @foreach($uploads as $upload)
    
                                                                @if($upload->UPD_Desc === 'photos')
                                                                    <li><u class = "fileLink"><p class = "cursor fileLink" onclick = 'getFile("{{$upload->UPD_ID}}")' >{{$upload->UPD_DocName}}</p></u></li>
                                                                @endif
    
                                                            @endforeach
    
                                                        @endif
                                                    </ul>                                      
                                                </div>
                                                
                                                <div class="position-relative form-group">                                       
                                                    <label for="exampleFile" class="card-title">Links</label>
                                                        @if($links !== null)
                                                            @php
                                                                $lnk_count = 0;
                                                            @endphp

                                                            @foreach($links as $link)
                                    
                                                                <ul>
                                                                    @if (str_contains($link->LNK_Link, 'http://') || str_contains($link->LNK_Link, 'https://') || str_contains($link->LNK_Link, 'www.'))
                                                                    @php
                                                                        $lnk_count += 1;
                                                                    @endphp
                                                                        {{-- <li><a class="cursor fileLink" href="@if(!str_contains( "$link->LNK_Link", '//'))//@endif{{$link->LNK_Link}}" target='_blank'>Link {{ $lnk_count }}</a></li> --}}
                                                                        <li><a class="cursor fileLink" href="@if(!str_contains( "$link->LNK_Link", '//'))//@endif{{$link->LNK_Link}}" target='_blank'>{{$link->LNK_Link}}</a></li>
                                                                    @endif
                                                                </ul>    
                                                            @endforeach
    
                                                        @endif                                     
                                                </div>


                                        <hr>
                                        <h4>
                                            <div>For Official Use: Applicant Scoring</div>
                                        </h4>



                                        {{-- Comments and Scoreing --}}

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="Comments" class="card-title"><span class="text-danger"></span>Comment Thread</label>
                                                    <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Comment</th>
                                                                <th>Judge</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if($comment !== null)

                                                                @foreach($comment as $com)
                                                                    <tr>
                                                                    @if($chairman === 0)
                                                                        @if($score !== null && $com->LGN_ID == $score->LGN_ID)
                                                                            <td><em>{{$com->created_at}}</em></td>
                                                                            <td>{{$com->COM_Comment}}</td>
                                                                            <td><span class="text-danger">{{$com->LGN_Name}}</span></td>
                                                                        @elseif($score === null)

                                                                        @endif
                                                                    @else
                                                                        <td><em>{{$com->created_at}}</em></td>
                                                                        <td>{{$com->COM_Comment}}</td>
                                                                        <td><span class="text-danger">{{$com->LGN_Name}}</span></td>

                                                                    @endif

                                                                    </tr>

                                                                @endforeach

                                                            @endif
                                                    </table>

                                                </div>
                                            </div>
                                            @if($chairman === 0)
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="Comments" class="card-title"><span class="text-danger"></span>Add Comments</label>
                                                    <textarea name="text" id="comment" class="form-control" rows="6" required>@if($userComment !== null){{$userComment->COM_Comment}}@endif</textarea>    
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group">
                                                            <button id="adjudication-btn" class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-sm"  onClick='setComment({{$applicant->APL_ID}})'>Submit Comment </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><br>
                                            <hr><br>
                                            @endif
                                               
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <h4>Scores</h4>
                                                </div>
                                            </div>


                                            @if($chairman === 0)
                                                <div class="col-md-8">
                                                    <div class="position-relative form-group">
                                                    <label for="Score" class="card-title"><span class="text-danger"></span>Evidence of an Interest in agriculture (0 - 6)</label>
                                                    @if($score === null)
                                                        @if ($applicant->APL_Dup === 'Y' || $applicant->APL_Scored === 'Y')
                                                            <input name="text" id = "score" placeholder="" type="text" class="form-control" disabled>
                                                        @else
                                                            <input name="text" id = "score" placeholder="" type="text" class="form-control">
                                                        @endif
                                                    @else
                                                        @if ($applicant->APL_Dup === 'Y' || $applicant->APL_Scored === 'Y')
                                                            <input name="text" id = "score" placeholder="" value = "{{$score->SCR_Score}}" type="text" class="form-control" disabled>   
                                                        @else
                                                            <input name="text" id = "score" placeholder="" value = "{{$score->SCR_Score}}" type="text" class="form-control">
                                                        @endif
                                                    @endif
                                                    <span class="text-danger"><em id = "scoreError"></em></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-8">
                                                    <div class="position-relative form-group">
                                                    <label for="Score" class="card-title"><span class="text-danger"></span>Social Situation (0 - 5)</label>
                                                    @if($score === null)
                                                        @if ($applicant->APL_Dup === 'Y' || $applicant->APL_Scored === 'Y')
                                                            <input name="text" id = "score2" placeholder="" type="text" class="form-control" disabled>
                                                        @else
                                                            <input name="text" id = "score2" placeholder="" type="text" class="form-control">
                                                        @endif
                                                    @else
                                                        @if ($applicant->APL_Dup === 'Y' || $applicant->APL_Scored === 'Y')
                                                            <input name="text" id = "score2" placeholder="" value = "{{$score->SCR_Score_2}}" type="text" class="form-control" disabled>
                                                        @else
                                                            <input name="text" id = "score2" placeholder="" value = "{{$score->SCR_Score_2}}" type="text" class="form-control">
                                                        @endif
                                                    @endif
                                                    <span class="text-danger"><em id = "score2Error"></em></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-8">
                                                    <div class="position-relative form-group">
                                                    <label for="Score" class="card-title"><span class="text-danger"></span>Education (0 - 6)</label>
                                                    @if($score === null)
                                                        @if ($applicant->APL_Dup === 'Y' || $applicant->APL_Scored === 'Y')
                                                            <input name="text" id = "score3" placeholder="" type="text" class="form-control" disabled>
                                                        @else
                                                            <input name="text" id = "score3" placeholder="" type="text" class="form-control">
                                                        @endif
                                                    @else
                                                        @if ($applicant->APL_Dup === 'Y' || $applicant->APL_Scored === 'Y')
                                                            <input name="text" id = "score3" placeholder="" value = "{{$score->SCR_Score_3}}" type="text" class="form-control" disabled>
                                                        @else
                                                            <input name="text" id = "score3" placeholder="" value = "{{$score->SCR_Score_3}}" type="text" class="form-control">
                                                        @endif
                                                    @endif
                                                    <span class="text-danger"><em id = "score3Error"></em></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-8">
                                                    <div class="position-relative form-group">
                                                    <label for="Score" class="card-title"><span class="text-danger"></span>Personal Attributes (0 - 3)</label>
                                                    @if($score === null)
                                                        @if ($applicant->APL_Dup === 'Y' || $applicant->APL_Scored === 'Y')
                                                            <input name="text" id = "score4" placeholder="" type="text" class="form-control" disabled>
                                                        @else
                                                            <input name="text" id = "score4" placeholder="" type="text" class="form-control">
                                                        @endif
                                                    @else
                                                        @if ($applicant->APL_Dup === 'Y' || $applicant->APL_Scored === 'Y')
                                                            <input name="text" id = "score4" placeholder="" value = "{{$score->SCR_Score_4}}" type="text" class="form-control" disabled>
                                                        @else
                                                            <input name="text" id = "score4" placeholder="" value = "{{$score->SCR_Score_4}}" type="text" class="form-control">
                                                        @endif
                                                    @endif
                                                    <span class="text-danger"><em id = "score4Error"></em></span>
                                                    </div>
                                                </div>

                                            @endif

                                            @if($chairman != 0)
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="position-relative form-group">
                                                        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th>Judge</th>
                                                                <th>Evidence of an interest in agriculture</th>
                                                                <th>Social Situation</th>
                                                                <th>Education</th>
                                                                <th>Personal Attributes</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                @if($calculateScores !== null)


                                                                    @foreach($calculateScores as $com)
                                                                        <tr>

                                                                            @if ($chairman === 1)

                                                                                <td><em>{{$com->LGN_Name}}</em></td>
                                                                                <td><input class = "chairmanScore" type = "text" value = "{{$com->SCR_Score}}" id = "{{$com->LGN_ID}}Score" /></td>
                                                                                <td><input class = "chairmanScore" type = "text" value = "{{$com->SCR_Score_2}}" id = "{{$com->LGN_ID}}Score2"/></td>
                                                                                <td><input class = "chairmanScore" type = "text" value = "{{$com->SCR_Score_3}}" id = "{{$com->LGN_ID}}Score3"/></td>
                                                                                <td><input class = "chairmanScore" type = "text" value = "{{$com->SCR_Score_4}}" id = "{{$com->LGN_ID}}Score4"/></td>

                                                                                @if ($applicant->APL_Dup === 'Y' || $applicant->APL_Scored === 'Y')
                                                                                    <td><button class = "btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-sm" onClick = "changeScores('{{$com->APL_ID}}','{{$com->LGN_ID}}')" disabled>Change Scores</button></td>
                                                                                @else
                                                                                    <td><button class = "btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-sm" onClick = "changeScores('{{$com->APL_ID}}','{{$com->LGN_ID}}')">Change Scores</button></td>   
                                                                                @endif
                                                                            @endif
                                                                        </tr>

                                                                    @endforeach

                                                                @endif
                                                
                                                        </table>

                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    @if ($applicant->APL_Dup === 'Y' || $applicant->APL_Scored === 'Y')
                                                        <button id="adjudication-btn" class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-sm"  onClick='setScore({{$applicant->APL_ID}})' disabled>Submit Score</button>
                                                    @else
                                                        <button id="adjudication-btn" class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-sm"  onClick='setScore({{$applicant->APL_ID}})'>Submit Score</button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        {{-- End of comments and scoring --}}

                                        <hr>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group d-flex justify-content-start">
                                                    <button id="nav-btn" class=" btn-pill btn-shadow btn-hover-shine btn btn-secondary btn-sm"  onClick = "previous({{$applicant->APL_ID}})">Previous </button>
                                                </div>
                                            </div>
    
                                            <div class="col-md-6">
                                                <div class="position-relative form-group d-flex justify-content-end">
                                                    <button id="nav-btn" class="btn-pill btn-shadow btn-hover-shine btn btn-secondary btn-sm"  onClick = "next({{$applicant->APL_ID}})">Next </button>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                                <div class="text-center text-white opacity-8 mt-3">Copyright © MYDNS 2023</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    

            <script>


                function changeScores(id, userID){

                    
                    let counter = 0;
                    let message = "";
                    let score = $(`#${userID}Score`).val();
                    if($(`#${userID}Score`).val() !== ''){
                        
                        
                        if(score >= 0 && score <= 6){
                            
                        }else{
                            message +=`Invalid score given for Evidence of an Interest: ${score}\n`;
                            counter = 1;
                        }
                    }else{
                        message +=`No score given for Evidence of an Interest<br>`;
                        counter = 1;
                    }


                    
                    let score2 = $(`#${userID}Score2`).val(); 
                    if($(`#${userID}Score2`).val() !== ''){
                        
                        if(score2 >= 0 && score2 <= 5){
                            
                        }else{ 
                            message +=`Invalid score given for Social Situation: ${score2}\n`;
                            counter = 1;
                        }
                    }else{
                        message +=`No score given for Social Situation<br>`;
                        counter = 1;
                    }


                    let score3 = $(`#${userID}Score3`).val();
                    if($(`#${userID}Score3`).val() !== ''){
                        
                        if(score3 >= 0 && score3 <= 6){
                            
                        }else{
                            message +=`Invalid score given for Education: ${score3}\n`;
                            counter = 1;
                        }
                    }else{
                        message +=`No score given for Education<br>`;
                        counter = 1;
                    }

                    let score4 = $(`#${userID}Score4`).val();
                    if($(`#${userID}Score4`).val() !== ''){
                        
                        if(score4 >= 0 && score4 <= 3){
                            
                        }else{
                            message +=`Invalid score given for Personal Attributes: ${score4}\n`;
                            counter = 1;
                        }
                    }else{
                        message +=`No score given for Personal Attributes<br>`;
                        counter = 1;
                    }

                    let _token = $('meta[name="csrf-token"]').attr('content');
                    if(counter === 0){
                        userID = parseInt(userID);
                        score = parseInt(score);
                        score2 = parseInt(score2);
                        score3 = parseInt(score3);
                        score4 = parseInt(score4);
                        $.ajax({
                            type:'POST',
                            url:`{{ asset('score') }}`,
                            data:{
                                id: id,
                                userID: userID,
                                score: score,
                                score2: score2,
                                score3: score3,
                                score4: score4,
                                _token: _token,
                            },
                            success: function(response){
                                if(response.success){
                                    window.location.href = "{{ asset('profile/'. $applicant->APL_ID) }}"

                                }else{
                                    console.log(response);
                                }
                            }
                        });
                    }else{
                        window.alert(message);
                    }

                }

                function previous(id){
                    window.location.href = `{{ asset('previous/${id}') }}`;
                }

                function next(id){
                    window.location.href = `{{ asset('next/${id}') }}`;
                }

                function home(){
                    window.location.href = `{{asset ('/')}}`;
                }

                function logout(){
                    window.location.href = `{{ asset('login') }}`;
                }

                function getFile(id){
                    window.location.href = `{{ asset('files/${id}') }}`;
                }

                function getLinks(id){
                    window.location.href = `{{ asset('links/${id}') }}`;
                }


                function setScore(id){
                    $('#scoreError').empty();
                    $('#score2Error').empty();
                    $('#score3Error').empty();
                    $('#score4Error').empty();
                    let counter = 0;

                    let score = $('#score').val();
                    if($('#score').val() !== ''){
                        
                        
                        if(score >= 0 && score <= 6){
                            
                        }else{
                            $('#scoreError').append("Invalid score given");
                            counter = 1;
                        }
                    }else{
                        $('#scoreError').append("Invalid score given");
                        counter = 1;
                    }


                    
                    let score2 = $('#score2').val(); 
                    if($('#score2').val() !== ''){
                        
                        if(score2 >= 0 && score2 <= 5){
                            
                        }else{
                            $('#score2Error').append("Invalid score given");
                            counter = 1;
                        }
                    }else{
                        $('#score2Error').append("Invalid score given");
                        counter = 1;
                    }


                    let score3 = $('#score3').val();
                    if($('#score3').val() !== ''){
                        
                        if(score3 >= 0 && score3 <= 6){
                            
                        }else{
                            $('#score3Error').append("Invalid score given");
                            counter = 1;
                        }
                    }else{
                        $('#score3Error').append("Invalid score given");
                        counter = 1;
                    }

                    let score4 = $('#score4').val();
                    if($('#score4').val() !== ''){
                        
                        if(score4 >= 0 && score4 <= 3){
                            
                        }else{
                            $('#score4Error').append("Invalid score given");
                            counter = 1;
                        }
                    }else{
                        $('#score4Error').append("Invalid score given");
                        counter = 1;
                    }

                   
                    let _token = $('meta[name="csrf-token"]').attr('content');
                    if(counter === 0){
                        score = parseInt(score);
                        score2 = parseInt(score2);
                        score3 = parseInt(score3);
                        score4 = parseInt(score4);
                        $.ajax({
                            type:'POST',
                            url:`{{ asset('score') }}`,
                            data:{
                                id: id,
                                userID: "no",
                                score: score,
                                score2: score2,
                                score3: score3,
                                score4: score4,
                                _token: _token,
                            },
                            success: function(response){
                                if(response.success){
                                    window.location.href = "{{ asset('profile/' . $applicant->APL_ID) }}"

                                }else{
                                    console.log(response);
                                }
                            }
                        });
                    }else{
                        window.alert('There was an error in your scores');
                    }
                }


                function setComment(id){
                    let comment = $('#comment').val();

                    let _token = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        type:'POST',
                        url:`{{ asset('comment') }}`,
                        data:{
                            id: id,
                            comment: comment,
                            _token: _token,
                        },
                        success: function(response){
                            if(response.success){
                                window.location.href = "{{ asset('profile/' . $applicant->APL_ID) }}"

                            }else{
                                console.log(response);
                            }
                        }
                    });
                }

                $(document).ready(function() {
                    
                    $(document).on('keypress',function(e) {
                        if(e.which == 13) {
                            $('#submit').click();
                            event.preventDefault();

                        }
                    });
                   
                });
            </script>
        </body>
    @endsection