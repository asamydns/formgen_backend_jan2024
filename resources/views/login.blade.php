@extends('Layouts.layout')
    @section('Title', 'Application')
    @section('Content')

    <style>
.form-row>.col, .form-row>[class*="col-"] {
    padding-right: 100px;
    padding-left: 100px;
}
</style>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="bg-plum-plate bg-animation">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <!-- <div class="app-logo-inverse mx-auto mb-3"></div> -->
                        <div class="modal-dialog w-100 mx-auto">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="h5 modal-title text-center">
                                        <h4 class="mt-2">
                                            <div>Login to Review Applicants</div>
                                            <span></span>
                                        </h4>
                                    </div>

                                <form class="">
                                    <div class="form-row">
                                        <div class="col-md-12">

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group text-center">
                                                    <label class="card-title"><span class="text-danger error" id = "error"></span></label>
                                                </div>
                                            </div>
                                        </div>
           
                                     <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
											    <label class="card-title"><span class="text-danger">*</span> Username</label>
												<input name="text" id = "username" placeholder="" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
											    <label class="card-title"><span class="text-danger">*</span> Password</label>
												<input name="text" id = "password" placeholder="" type="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                            <button class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg" id = "Login">Login </button>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                                </div>
                            </div>
                        </div>
                        <div class="text-center text-white opacity-8 mt-3">Copyright © MYDNS 2022</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


            <script>

                $(document).ready(function() {
                    
                    $(document).on('keypress',function(e) {
                        if(e.which == 13) {
                            $('#submit').click();
                            event.preventDefault();

                        }
                    });


                    $('#Login').on('click', function(event) {
                        event.preventDefault();
                        $('#error').empty();

                        let username = $('#username').val();
                        let password = $('#password').val();
                        let _token = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            type:'POST',
                            url:`{{ asset('login') }}`,
                            data:{
                                username: username,
                                password:password,
                                _token: _token,
                            },
                            success: function(response){
                                if(response.success){
                                    console.log(username)
                                    console.log(password)
                                    if(username == "LyniseTestUser!" && password == "LyniseTesUserYahp!"){
                                        window.location.href = `https://apps.mydns.gov.tt/yahp_committee/public/profile2/453`;
                                    }else{
                                        window.location.href = "{{ asset('/') }}"
                                    }
                                    

                                }else{
                                    $('#error').append("" + response.message);
                                }
                            }
                        });
                        
                    });
                });
            </script>
        </body>
    @endsection