@extends('Layouts.layout')
    @section('Title', 'Application')
    @section('Content')
        <body>

        <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="bg-plum-plate bg-animation">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div class="app-logo-inverse mx-auto mb-3"></div>
                        <div class="modal-dialog w-100 mx-auto">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="FName" class="card-title">You are logged in as: <span class="text-danger">{{$user->LGN_Name}}</span></label>
                                            </div>
                                        </div>

                                        
                                        {{-- @if($score !== null) --}}
                                        <div class="col-md-12">
                                            <div class="position-relative form-group text-center">
                                                <label for="FName" class="card-title scoreTitle"><span class="text-danger">YOUR SCORES</span></label>
                                            </div>
                                        </div>
                                        {{-- @endif --}}

                                
                                        @if($score !== null)
                                        <div class="col-md-6">
                                            <div class="position-relative form-group text-center">
                                                <label for="mscore" class="card-title scoreTitle">Evidence of An Interest: <span class="text-danger">
                                                    

                                                        {{$score->SCR_Score}}
                                                    
                                                </span></label>
                                            </div>
                                        </div>

                                        @endif

                                        @if($score !== null)
                                        <div class="col-md-6">
                                            <div class="position-relative form-group text-center">
                                                <label for="mscore" class="card-title scoreTitle">Education: <span class="text-danger">
                                                    

                                                        {{$score->SCR_Score_2}}
                                                    
                                                </span></label>
                                            </div>
                                        </div>
                                        @endif

                                        @if($score !== null)
                                        <div class="col-md-6">
                                            <div class="position-relative form-group text-center">

                                                <label for="mscore" class="card-title scoreTitle">Personal Attributes/Comitment: <span class="text-danger">
                                                   

                                                        {{$score->SCR_Score_3}}
                                                    
                                                </span></label>
                                            </div>
                                        </div>
                                        @endif

                                        @if($score !== null)
                                        <div class="col-md-6">
                                            <div class="position-relative form-group text-center">

                                                <label for="mscore" class="card-title scoreTitle">Social Situation: <span class="text-danger">
                                                   

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
                                    <div class="h5 modal-title">
                                        <h4 class="mt-2">
                                            <div>Applicant Info</div>
                                            <span></span>
                                        </h4>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <label for="FName" class="card-title"><span class="text-danger"></span>Name</label>
                                                <h5>{{$applicant->APL_FName}} {{$applicant->APL_LName}} {{$applicant->APL_Mname}}</h5>
                                            </div>
                                        </div>
                                    </div></br>
                                            <div class="form-row">
												<div class="col-md-6">
													<div class="position-relative form-group">
														<label for="Address1" class="card-title"><span class="text-danger"></span>Address</label>
														<p>{{$applicant->APL_Address1}}<br>{{$applicant->APL_Address2}}</p>
													</div>
												</div>
												<div class="col-md-6">
													<div class="position-relative form-group">
														<label for="Address2" class="card-title">&nbsp;</label>
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
                                            </div></br>
                                    
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="DOB" class="card-title"><span class="text-danger"></span>Date of Birth</label>
                                                <p>{{$applicant->APL_DOB}}</p>
                                            </div>
                                        </div>
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
                                    </div></br>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="HomeNum" class="card-title"><span class="text-danger"></span>Home Number</label>
                                                <p>{{$applicant->APL_HPhone}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="MobileNum" class="card-title"><span class="text-danger"></span>Mobile Number</label>
                                                <p>{{$applicant->APL_MPhone}}</p>
                                            </div>
                                        </div>
                                    </div></br>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
											    <label class="card-title"><span class="text-danger"></span>Email</label>
											    <p>{{$applicant->APL_Email}}</p>
                                            </div>
                                        </div>
                                    </div></br>


                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
											    <label class="card-title"><span class="text-danger"></span>Highest Level of Education</label>
											    <p>{{$applicant->HLOE_Desc}}</p>
                                                @if($applicant->HLOE_Desc !== null)
                                                    <p>{{$applicant->APL_HLOE_Other}}</p>
                                                @endif

                                                @if($applicant->HLOE_age !== null)
                                                    <label class="card-title"><span class="text-danger"></span>Age Graduated</label>
                                                    <p>{{$applicant->HLOE_age}}</p>
                                                @endif


                                                @if($applicant->APL_Tertiary !== null)
                                                    <label class="card-title"><span class="text-danger"></span>Tertiary Institute</label>
                                                    <p>{{$applicant->APL_Tertiary}}</p>
                                                @endif

                                                @if($applicant->APL_TV !== null)
                                                    <label class="card-title"><span class="text-danger"></span>Technical/Vocational Institute</label>
                                                    <p>{{$applicant->APL_TV}}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div></br>

                                    <div class="form-row">
                                        <div class="col-md-8">
                                            <div class="position-relative form-group">
											    <label class="card-title"><span class="text-danger"></span>Are you currently enrolled in school or training?</label>
											    <p>
                                                    @if($applicant->HLOE_studying === 'Y')
                                                        Yes
                                                    @else
                                                        No
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div></br>

                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
											    <label class="card-title"><span class="text-danger"></span>Identification details:</label>
                                                <div class="col-md-6">
                                                	<div class="position-relative form-group">
                                                        <p>
                                                            @if($applicant->APL_ID_TYP === 'NID')
                                                                National ID
                                                            @else
                                                                Driver's Permit
                                                            @endif
                                                        </p>
													</div>
                                                </div>
                                                <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="EDU_LVL_other" class="card-title">ID/DP #</label>
                                                <p>{{$applicant->APL_ID_NUM}}</p>
                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div></br>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
											    <label class="card-title"><span class="text-danger"></span>Employment status?</label>
                                                <p>{{$applicant->EMP_Desc}}</p>

                                                <label class="card-title"><span class="text-danger"></span>Employer Name</label>

                                                <p>{{$applicant->APL_Employer_Name}}</p>

                                                <label class="card-title"><span class="text-danger"></span>WOULD YOU LIKE TO PARTICIPATE IN A YEAR LONG FULL TIME TRAINING PROGRAM?</label>
                                                    <p>
                                                        @if($applicant->APL_Emp_1yr_train === 'Y')
                                                            Yes
                                                        @else
                                                            No
                                                        @endif
                                                    </p>
                                                
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
											    <label class="card-title"><span class="text-danger"></span>Marital Status:</label>
												<p>{{$applicant->APL_Desc}}</p>
                                            </div>
                                        </div>
                                    </div></br>

                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
											    <label class="card-title"><span class="text-danger"></span>COVID-19 Vaccination Status:</label>
                                                <p>{{$applicant->VAX_Desc}}</p>
                                            </div>
                                        </div>
                                    </div></br>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="NUM_DEP" class="card-title">No. of Dependents:</label>
                                                <p>{{$applicant->APL_NOD}}</p>
                                                <p>{{$applicant->APL_NOD_Desc}}</p>
                                            </div>
                                        </div>
                                    </div></br>
                                    <div class="form-row">
                                        <div class="col-md-12">
											<div class="position-relative form-group">
												<label for="exampleText" class="card-title">Employment history details:</label>
												<p>{{$applicant->APL_Employ_History}}</p>
											</div>
                                        </div>
                                    </div></br>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
											    <label class="card-title"><span class="text-danger"></span>Do you have a passion for agriculture?</label>
                                                <p>
                                                     @if($applicant->APL_Agri_Passion === 'Y')
                                                        Yes
                                                    @else
                                                        No
                                                    @endif
                                                </p>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <p>{{$applicant->APL_Agri_Passion_Desc}}</p>
                                            </div>
                                        </div>
                                    </div></br>

                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
											    <label class="card-title"><span class="text-danger"></span>Are you interested in establishing a career in the agricultural sector?</label>
                                                <p>
                                                     @if($applicant->APL_Agri_Career === 'Y')
                                                        Yes
                                                    @else
                                                        No
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div></br>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
											    <label class="card-title"><span class="text-danger"></span>Do you own any land or property?</label>
                                                <p>
                                                     @if($applicant->APL_Land_Own === 'Y')
                                                        Yes
                                                    @else
                                                        No
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div></br>

                                    <div class="form-row">
                                        <div class="col-md-9">
                                            <div class="position-relative form-group">
											    <label class="card-title"><span class="text-danger"></span>DO YOU OR ANY OF YOUR IMMEDIATE FAMILY (MOTHER, FATHER, SIBLING) OWN OR HAVE A LEASE AGREEMENT FOR STATE OR AGRICULTURE LAND?</label>
                                                <p>
                                                     @if($applicant->APL_Land_Lease_Agmt === 'Y')
                                                        Yes
                                                    @else
                                                        No
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div></br>

                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
											    <label class="card-title"><span class="text-danger"></span>Are there any obligations that may affect your successful completion of this training?</label>
												<p>
                                                     @if($applicant->APL_Obligation === 'Y')
                                                        Yes
                                                    @else
                                                        No
                                                    @endif
                                                </p>
												<p>{{$applicant->APL_Obligation_Desc}}</p>
                                            </div>
                                        </div>
                                    </div></br>

                                    <div class="form-row">
                                        <div class="col-md-12">
											<div class="position-relative form-group">
												<label for="exampleText" class="card-title">Describe your experience or interest in the Agricultural Sector:<br>(Attach photos or videos if necessary)</label>
												<p>{{$applicant->APL_Agri_Experience}}</p>

                                                <p>{{$applicant->APL_Videolinks}}</p>
											</div>

                                            <div class="position-relative form-group">
                                                <label for="exampleFile" class="card-title">Uploaded Documents</label>
                                                <ul>
                                                    @if($uploads !== null)

                                                        @foreach($uploads as $upload)

                                                            @if($upload->UPD_Desc === 'Experience/Interest In Agricultural Sector Upload 1' || $upload->UPD_Desc === 'Experience/Interest In Agricultural Sector Upload 2' || $upload->UPD_Desc === 'Experience/Interest In Agricultural Sector Upload 3' || $upload->UPD_Desc === 'Experience/Interest In Agricultural Sector Upload 4' || $upload->UPD_Desc === 'Experience/Interest In Agricultural Sector Upload 5')
                                                                <li><u class = "fileLink"><p class = "cursor fileLink" onclick = 'getFile("{{$upload->UPD_ID}}")' >{{$upload->UPD_DocName}}</p></u></li>
                                                            @endif

                                                        @endforeach

                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div></br>
                                    


<!--*-->
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
											    <label class="card-title"><span class="text-danger"></span>Permission to use photo?</label>
                                                <p>
                                                     @if($applicant->APL_Use_photo === 'Y')
                                                        Yes
                                                    @else
                                                        No
                                                    @endif
                                                </p>
                                            </div>
                                        </div></br>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
											    <label class="card-title"><span class="text-danger"></span>Subscribe to mailing list?</label>
                                                <p>
                                                     @if($applicant->APL_Subscribe === 'Y')
                                                        Yes
                                                    @else
                                                        No
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div></br>

                                    <div class="form-row">
                                        <div class="col-md-12">
											<div class="position-relative form-group">
												<label for="exampleText" class="card-title">What do you expect to gain upon completion of the YAHP Programme?</label>
												<p>{{$applicant->APL_Expectation}}</p>
											</div>
                                        </div>
                                    </div>

<hr>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <label for="FName" class="card-title"><span class="text-danger"></span>Recommender Name</label>
                                                <h5>{{$applicant->APL_Cnt_FName}} {{$applicant->APL_Cnt_LName}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                            <div class="form-row">
												<div class="col-md-6">
													<div class="position-relative form-group">
														<label for="Address1" class="card-title"><span class="text-danger"></span>Address</label>
														<p>{{$applicant->APL_Cnt_Address1}}<br>{{$applicant->APL_Cnt_Address2}}</p>
													</div>
												</div>
												<div class="col-md-6">
													<div class="position-relative form-group">
														<label for="Address2" class="card-title">&nbsp;</label>
													</div>
												</div>
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group">
                                                    <label for="Address3" class="card-title"><span class="text-danger"></span>City</label>
                                                    <p>{{$applicant->APL_Cnt_Address3}}</p>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-6">
                                                    <div class="position-relative form-group">
                                                    <label for="municipality" class="card-title"><span class="text-danger"></span>Municipality</label>
                                                    <p>[Municipality]</p>
                                                    </div>
                                                </div> -->
                                            </div>
                                    
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
											    <label class="card-title"><span class="text-danger"></span>Designation</label>
												<p>{{$applicant->APL_Cnt_Relation}}</p>
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                            <div class="position-relative form-group">
											    <label class="card-title"><span class="text-danger"></span>Contact Number</label>
												<p>{{$applicant->APL_Cnt_Number}}</p>
                                            </div>
                                        </div>
                                   </div>

                                    <div class="position-relative form-group">
                                        <label for="exampleFile" class="card-title">Recommender Statement</label>
                                        <ul>
                                            @if($uploads !== null)

                                                @foreach($uploads as $upload)

                                                    @if($upload->UPD_Desc === 'Recommender Statement')
                                                        <li><u class = "fileLink"><p class = "cursor fileLink" onclick = 'getFile("{{$upload->UPD_ID}}")' >{{$upload->UPD_DocName}}</p></u></li>
                                                    @endif

                                                @endforeach

                                            @endif
                                        </ul>
                                    </div>

<hr>
                            <h4>
                                <div>Required Documents:</div>
                            </h4>
                                                <div class="position-relative form-group">
                                                    <label for="exampleFile" class="card-title">Certificate of Character (receipts acceptable)</label>
                                                    <ul>
                                                    @if($uploads !== null)

                                                        @foreach($uploads as $upload)

                                                            @if($upload->UPD_Desc === 'Certificate of Character')
                                                                <li><u class = "fileLink"><p class = "cursor fileLink" onclick = 'getFile("{{$upload->UPD_ID}}")' >{{$upload->UPD_DocName}}</p></u></li>
                                                            @endif

                                                        @endforeach

                                                    @endif
                                                    
                                                    </ul>

                                                    <label for="exampleFile" class="card-title">Academic Certificates</label>
                                                    <ul>
                                                        @if($uploads !== null)

                                                            @foreach($uploads as $upload)

                                                                @if($upload->UPD_Desc === 'Academic Certificates')
                                                                    <li><u class = "fileLink"><p class = "cursor fileLink" onclick = 'getFile("{{$upload->UPD_ID}}")' >{{$upload->UPD_DocName}}</p></u></li>
                                                                @endif

                                                            @endforeach

                                                        @endif 
                                                    </ul>

                                                    <label for="exampleFile" class="card-title">Birth Certificate</label>
                                                    <ul>
                                                        @if($uploads !== null)

                                                            @foreach($uploads as $upload)

                                                                @if($upload->UPD_Desc === 'Birth Certificate')
                                                                    <li><u class = "fileLink"><p class = "cursor fileLink" onclick = 'getFile("{{$upload->UPD_ID}}")' >{{$upload->UPD_DocName}}</p></u></li>
                                                                @endif

                                                            @endforeach

                                                        @endif
                                                    </ul>

                                                    <!-- <label for="exampleFile" class="card-title">Vaccination Card</label>
                                                    <ul>
                                                        @if($uploads !== null)

                                                            @foreach($uploads as $upload)

                                                                @if($upload->UPD_Desc === 'Vaccination Card' || $upload->UPD_Desc === 'Vaccination Card 2')
                                                                    <li><u class = "fileLink"><p class = "cursor fileLink" onclick = 'getFile("{{$upload->UPD_ID}}")' >{{$upload->UPD_DocName}}</p></u></li>
                                                                @endif

                                                            @endforeach

                                                        @endif
                                                    </ul> -->

                                                    <label for="exampleFile" class="card-title">National Identification Card or Drivers Permit</label>
                                                    <ul>
                                                        @if($uploads !== null)

                                                            @foreach($uploads as $upload)

                                                                @if($upload->UPD_Desc === 'National Identification Card or Trinidad and Tobago passport')
                                                                    <li><u class = "fileLink"><p class = "cursor fileLink" onclick = 'getFile("{{$upload->UPD_ID}}")' >{{$upload->UPD_DocName}}</p></u></li>
                                                                @endif

                                                            @endforeach

                                                        @endif
                                                    </ul>

                                                </div>
<hr>
                            <h4>
                                <div>For Official Use: Applicant Scoring</div>
                            </h4>





                            
                            <div class="form-row">
												<div class="col-md-12">
													<div class="position-relative form-group">
														<label for="Comments" class="card-title"><span class="text-danger"></span>Comment Thread</label>
														<table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Comment</th>
                                        <th>Group</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($comment !== null)

                                        @foreach($comment as $com)
                                            <tr>
                                            @if($chairman === 0)
                                                @if($score !== null && $com->LGN_ID !== $score->LGN_ID)
                                                    <td><em>{{$com->created_at}}</em></td>
                                                    <td>{{$com->SCR_Comment}}</td>
                                                    <td><span class="text-danger">{{$com->LGN_Name}}</span></td>
                                                @elseif($score === null)

                                                @endif
                                            @else
                                                <td><em>{{$com->created_at}}</em></td>
                                                <td>{{$com->SCR_Comment}}</td>
                                                <td><span class="text-danger">{{$com->LGN_Name}}</span></td>

                                            @endif

                                            </tr>

                                        @endforeach

                                    @endif
                                    </tfoot>
                                </table>

													</div>
												</div>
                                                @if($chairman === 0)
												<div class="col-md-12">
													<div class="position-relative form-group">
														<label for="Comments" class="card-title"><span class="text-danger"></span>Add Comments</label>
														<textarea name="text" id="comment" class="form-control" rows="6" required>@if($score !== null){{$score->SCR_Comment}}@endif</textarea>
													</div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                            <button class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-sm"  onClick='setComment({{$applicant->APL_ID}})'>Submit Comment </button>
                                            </div>
                                        </div>
                                    </div>
												</div>
                                            
</br>
                                                <hr>
</br>
                           @endif
                                               
                                <div class="col-md-12">
                                    <div class="position-relative form-group">
                                        <h4>Scores</h4>
                                    </div>
                                </div>


                                @if($chairman === 0 && $count < 5)
                                    <div class="col-md-12">
                                        <div class="position-relative form-group">
                                        <label for="Score" class="card-title"><span class="text-danger"></span>Evidence of genuine interest to further academic pathway (0 - 9)</label>
                                        @if($score === null)
                                            <input name="text" id = "score" placeholder="" type="text" class="form-control">
                                        @else
                                            <input name="text" id = "score" placeholder="" value = "{{$score->SCR_Score}}" type="text" class="form-control">
                                        @endif
                                        <span class="text-danger"><em id = "scoreError"></em></span>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="position-relative form-group">
                                        <label for="Score" class="card-title"><span class="text-danger"></span>Education (0 - 9)</label>
                                        @if($score === null)
                                            <input name="text" id = "score2" placeholder="" type="text" class="form-control">
                                        @else
                                            <input name="text" id = "score2" placeholder="" value = "{{$score->SCR_Score_2}}" type="text" class="form-control">
                                        @endif
                                        <span class="text-danger"><em id = "score2Error"></em></span>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="position-relative form-group">
                                        <label for="Score" class="card-title"><span class="text-danger"></span>Personal Attributes (0 - 9)</label>
                                        @if($score === null)
                                            <input name="text" id = "score3" placeholder="" type="text" class="form-control">
                                        @else
                                            <input name="text" id = "score3" placeholder="" value = "{{$score->SCR_Score_3}}" type="text" class="form-control">
                                        @endif
                                        <span class="text-danger"><em id = "score3Error"></em></span>
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
                                        <th>Evidence of genuine interest</th>
                                        <th>Education</th>
                                        <th>Personal Attributes</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($comment !== null)

                                        @foreach($comment as $com)
                                            <tr>

                                            
                                                <td><em>{{$com->LGN_Name}}</em></td>
                                                <td><input class = "chairmanScore" type = "text" value = "{{$com->SCR_Score}}" id = "{{$com->LGN_ID}}Score"/></td>
                                                <td><input class = "chairmanScore" type = "text" value = "{{$com->SCR_Score_2}}" id = "{{$com->LGN_ID}}Score2"/></td>
                                                <td><input class = "chairmanScore" type = "text" value = "{{$com->SCR_Score_3}}" id = "{{$com->LGN_ID}}Score3"/></td>
                                                <td><button class = "btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-sm" onClick = "changeScores('{{$com->APL_ID}}','{{$com->LGN_ID}}')">Change Scores</button></td>
                                            

                                            

                                            </tr>

                                        @endforeach

                                    @endif
                                    </tfoot>
                                </table>

													</div>
												</div>



                                @endif

</div>





                                                
                                                

                                                

                                                

                                                
                                                
                                                
                                            
                                    
                                    <div class="mt-4 mb-4 d-flex justify-content-center align-items-center">
                                        @if($chairman === 0)
                                            <button class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg" onClick='setScore({{$applicant->APL_ID}})'>Submit Score </button>
                                        @endif
                                    </div>

                                </form>

                            </div>
                        </div>
                        <div class="text-center text-white opacity-8 mt-3">Copyright © MYDNS 2022</div>
                    </div>
                </div>
            </div>
        </div>
    </div>








































            <!-- <h1>YAHP COMMITTEE</h1>

            <span>
                @if($totalMean !== null)    

                    <label>MEAN SCORE:{{$totalMean}}</label>

                @endif
            </span></br></br>


            <span>
                @if($score !== null)    

                    <label>YOUR SCORE:{{$score->SCR_Score}}</label>

                @endif
            </span></br></br>
            <label class = "error">
                @if($error !== null)
                    {{$error}}
                @endif
            </label>
            @if($applicant !== null)
                <label>ID: {{$applicant->APL_ID}} </label></br>
                <label>Name: {{$applicant->APL_FName}} {{$applicant->APL_Mname}} {{$applicant->APL_LName}}</label></br></br>
                @if($score === null)    

                    <label><input type="text" id = "score"><button onClick='setScore({{$applicant->APL_ID}})'>Set Score</button></label></br></br>
                    

                @endif

                <label><textarea type="text" id = "comment"></textarea><button onClick='setComment({{$applicant->APL_ID}})'>Set Comment</button></label></br></br>
            @endif

            @if($score !== null)    

                <label>YOUR COMMENT{{$score->SCR_Comment}}</label></br></br>

            @endif




            @if($comment !== null) 
            
                @foreach($comment as $com)
                    @if($score !== null && $com->LGN_ID !== $score->LGN_ID)
                        <label>{{$com->LGN_ID}}{{$com->SCR_Comment}}</label></br></br>
                    @elseif($score === null)

                        <label>{{$com->LGN_ID}}{{$com->SCR_Comment}}</label></br></br>
                    @endif
                    

                @endforeach

                

            @endif -->
            

            <script>


                function changeScores(id, userID){

                    
                    let counter = 0;
                    let message = "";
                    let score = $(`#${userID}Score`).val();
                    if($(`#${userID}Score`).val() !== ''){
                        
                        
                        if(score >= 0 && score <= 9){
                            
                        }else{
                            message +=`Invalid score given for Evidence of genuine interest: ${score}\n`;
                            counter = 1;
                        }
                    }else{
                        message +=`No score given for Evidence of genuine interest</br>`;
                        counter = 1;
                    }


                    
                    let score2 = $(`#${userID}Score2`).val(); 
                    if($(`#${userID}Score2`).val() !== ''){
                        
                        if(score2 >= 0 && score2 <= 9){
                            
                        }else{
                            message +=`Invalid score given for Education: ${score2}\n`;
                            counter = 1;
                        }
                    }else{
                        message +=`No score given for Education</br>`;
                        counter = 1;
                    }


                    let score3 = $(`#${userID}Score3`).val();
                    if($(`#${userID}Score3`).val() !== ''){
                        
                        if(score3 >= 0 && score3 <= 6){
                            
                        }else{
                            message +=`Invalid score given for Personal Attributes: ${score3}\n`;
                            counter = 1;
                        }
                    }else{
                        message +=`No score given for Personal Attributes</br>`;
                        counter = 1;
                    }

                    /* let score4 = $(`#${userID}Score4`).val();
                    if($(`#${userID}Score4`).val() !== ''){
                        
                        if(score4 >= 0 && score4 <= 3){
                            
                        }else{
                            message +=`Invalid score given for Personal Attributes: ${score4}\n`;
                            counter = 1;
                        }
                    }else{
                        message +=`No score given for Personal Attributes</br>`;
                        counter = 1;
                    } */
                    let _token = $('meta[name="csrf-token"]').attr('content');
                    if(counter === 0){
                        userID = parseInt(userID);
                        score = parseInt(score);
                        score2 = parseInt(score2);
                        score3 = parseInt(score3);
                        /* score4 = parseInt(score4); */
                        $.ajax({
                            type:'POST',
                            url:`{{ asset('score') }}`,
                            data:{
                                id: id,
                                userID: userID,
                                score: score,
                                score2: score2,
                                score3: score3,
                                /* score4: score4, */
                                _token: _token,
                            },
                            success: function(response){
                                if(response.success){
                                    window.location.href = "{{ asset('profile/$applicant->APL_ID') }}"

                                }else{
                                    console.log(response);
                                }
                            }
                        });
                    }else{
                        window.alert(message);
                    }

                }

                function logout(){
                    window.location.href = `{{ asset('login') }}`;
                }

                function getFile(id){
                    window.location.href = `{{ asset('files/${id}') }}`;
                }

                function setScore(id){
                    $('#scoreError').empty();
                    $('#score2Error').empty();
                    $('#score3Error').empty();
                    $('#score4Error').empty();
                    let counter = 0;

                    let score = $('#score').val();
                    if($('#score').val() !== ''){
                        
                        
                        if(score >= 0 && score <= 9){
                            
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
                        
                        if(score2 >= 0 && score2 <= 9){
                            
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

                    /* let score4 = $('#score4').val();
                    if($('#score4').val() !== ''){
                        
                        if(score4 >= 0 && score4 <= 3){
                            
                        }else{
                            $('#score4Error').append("Invalid score given");
                            counter = 1;
                        }
                    }else{
                        $('#score4Error').append("Invalid score given");
                        counter = 1;
                    } */

                   
                    let _token = $('meta[name="csrf-token"]').attr('content');
                    if(counter === 0){
                        score = parseInt(score);
                        score2 = parseInt(score2);
                        score3 = parseInt(score3);
                        /* score4 = parseInt(score4); */
                        $.ajax({
                            type:'POST',
                            url:`{{ asset('score') }}`,
                            data:{
                                id: id,
                                userID: "no",
                                score: score,
                                score2: score2,
                                score3: score3,
                                /* score4: score4, */
                                _token: _token,
                            },
                            success: function(response){
                                if(response.success){
                                    window.location.href = "{{ asset('profile/$applicant->APL_ID') }}"

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
                                window.location.href = "{{ asset('profile/$applicant->APL_ID') }}"

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