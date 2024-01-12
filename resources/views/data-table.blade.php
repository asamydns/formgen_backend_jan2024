@extends('Layouts.layout')
@section('Title', 'Application')
@section('Content')
<body>
    
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="bg-plum-plate bg-animation">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <!-- <div class="app-logo-inverse mx-auto mb-3"></div> -->
                        <div class="modal-dialog w-100 mx-auto">
                            <div class="modal-content">
                                
                                <div class="card-body">
                                    
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="FName" class="card-title">You are logged in as: <span class="text-danger">{{$user->LGN_Name}}</span></label>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group d-flex justify-content-end">
                                                <button class=" btn-pill btn-shadow btn-hover-shine btn btn-primary btn-sm"  onClick = "logout()">Logout </button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <hr>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group d-flex justify-content-start">
                                                <button class=" btn-pill btn-shadow btn-hover-shine btn btn-primary btn-sm"  onClick = "home()">Home </button>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="position-relative form-group d-flex justify-content-end">
                                                <button id="view-nav" class="btn-pill btn-shadow btn-hover-shine btn btn-primary btn-sm"  onClick = "scored()">Scored Applications </button>
                                                <button id="view-nav" class=" btn-pill btn-shadow btn-hover-shine btn btn-primary btn-sm"  onClick = "unscored()">Unscored Applications </button>
                                            </div>
                                        </div> 
                                    </div>
                                    
                                    <div class="h5 modal-title">
                                        <h4 class="mt-2">
                                            <div>{{$title}}</div>
                                            <span></span>
                                        </h4>
                                    </div>
                                    
                                    
                                    @if (count($applications) == 0 || empty($applications)) 
                                    <div class="position-relative form-group d-flex justify-content-center">
                                        <i>No applicants</i>
                                    </div>
                                    
                                    @else
                                    <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nominee Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>City/Town</th>
                                        </tr>
                                        <tbody id = "resultBody">
                                            
                                            @foreach ($applications as $application)
                                            <tr class = "cursor" onClick = "getProfile({{$application->APL_ID}})">
                                                <td>{{$application->APL_ID}}</td>
                                                <td>{{$application->APL_FName}} {{$application->APL_Mname}} {{$application->APL_LName}}</td>
                                                <td>{{$application->APL_PPhone}} <br> {{$application->APL_APhone}}</td>
                                                <td>{{$application->APL_Email}}</td>
                                                <td>{{$application->APL_Address3}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    
                                    @if ($title != "Duplicate Applications")
                                    <div class="d-flex justify-content-center">
                                        {{$applications->links()}}
                                    </div>
                                    @endif
                                    
                                    @endif
                                    
                                </div>
                                <div class="text-center text-white opacity-8 mt-3">Copyright © MYDNS 2021</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <script>
                function home(){
                    window.location.href = `{{asset ('/')}}`;
                }
                
                function logout(){
                    window.location.href = `{{ asset('login') }}`;
                }

                function scored(){
                    window.location.href = `{{ asset('scored') }}`;
                }

                function unscored(){
                    window.location.href = `{{ asset('unscored') }}`;
                }
                
                function duplicates (){
                    window.location.href = `{{ asset('duplicates') }}`;
                }
                
                window.addEventListener( "pageshow", function ( event ) {
                    var historyTraversal = event.persisted || 
                    ( typeof window.performance != "undefined" && 
                    window.performance.navigation.type === 2 );
                    if ( historyTraversal ) {
                        // Handle page restore.
                        window.location.reload();
                    }
                });
                
                function getProfile(id){
                    window.location.href = `{{ asset('profile/${id}') }}`;
                }
                
                
            </script>
        </body>
        @endsection