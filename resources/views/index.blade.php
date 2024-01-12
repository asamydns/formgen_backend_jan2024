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
                                        
                                        <div class="col-md-6">
                                            <div class="position-relative form-group d-flex justify-content-end">
                                                <button class=" btn-pill btn-shadow btn-hover-shine btn btn-primary btn-sm"  onClick = "logout()">Logout </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h5 modal-title">
                                        <h4 class="mt-2">
                                            <div>Applicant Listing</div>
                                            <span></span>
                                        </h4>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <label class="card-title"><span class="text-danger"></span>Search by criteria:</label>
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group">
                                                        <div class="position-relative form-check"><label class="form-check-label"><input type = "radio" class="form-check-input" name = "searchtype" id = "searchType" value = "1" checked/> Applicant ID</label></div>
                                                        <div class="position-relative form-check"><label class="form-check-label"><input type = "radio" class="form-check-input" name = "searchtype" id = "searchType" value = "2" /> Name</label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        
                                        <div class="col-sm-12 col-md-9">
                                            <div class="position-relative form-group">
                                                <label for="category" class="">Search Applicants</label>
                                                <input name="text" id = "searchValue" placeholder="Enter search criteria..." type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <button class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-sm"  id = "SearchButton">Go </button>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-3">
                                            <div class="position-relative form-group">
                                                
                                                <div id="view-nav" class="position-relative form-group d-flex justify-content-end">
                                                    <button id="home-nav" class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-sm"  id = "viewDuplicates" onclick="master()">Valid Applications </button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-3">
                                            <div class="position-relative form-group">
                                                
                                                <div id="view-nav" class="position-relative form-group d-flex justify-content-end">
                                                    <button id="home-nav" class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-sm"  id = "viewDuplicates" onclick="duplicates()">Duplicate Applications </button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div><br>
                                    
                                    <div id = "searchResults">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-white opacity-8 mt-3">Copyright © MYDNS 2021</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        
        function logout(){
            window.location.href = `{{ asset('login') }}`;
        }
        
        function master () {
            window.location.href = `{{ asset('master') }}`;
        }
        
        function assigned (){
            window.location.href = `{{ asset('assigned') }}`;
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
        
        $(document).ready(function() {
            
            $(document).on('keypress',function(e) {
                if(e.which == 13) {
                    $('#submit').click();
                    event.preventDefault();
                    
                }
            });
            
            
            $('#SearchButton').on('click', function(event) {
                event.preventDefault();
                $('#searchResults').empty();
                $('#entriesContainer').empty();
                $('#dataTable').empty();
                let url;
                
                let searchType = $('#searchType:checked').val();
                
                if(searchType === '1'){
                    url = 'getUserID';
                }else{
                    url = 'getUserName';
                }
                let searchValue = $('#searchValue').val();
                
                
                let _token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type:'POST',
                    url:`{{ asset('${url}') }}`,
                    data:{
                        searchValue: searchValue,
                        _token: _token,
                    },
                    success: function(response){
                        if(response.success){
                            let shown = 5;
                            /* for(let i = 0; i < response.count; i++){
                                $('#dataTable').append('<tr id = "tableRows" class = "cursor" onClick = "getProfile('+response.applicants[i].APL_ID+')" ><td>'+response.applicants[i].APL_ID+'</td><td>'+response.applicants[i].APL_FName+'</td><td>'+response.applicants[i].APL_Mname+'</td><td>'+response.applicants[i].APL_LName+'</td></tr>');
                            } */
                            
                            const max = response.count;
                            const numPages = max/shown;
                            /* console.log(response); */
                            $('#searchResults').append(response.data);
                            /* $('#resultBody').hide();
                            $('#resultBody').slice(0, 2).show(); */
                            /* 
                            $('#entriesContainer').append(response.count);
                            $('#pagination').append(response.applicant); */
                            
                        }else{
                            $('#searchResults').append(response.message);
                        }
                    }
                });
                
            });
        });
    </script>
</body>
@endsection