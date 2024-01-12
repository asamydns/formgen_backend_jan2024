@extends('Layouts.layout')
    @section('Title', 'Application')
    @section('Content')
        <body>

        <div>
            <h1>Testing</h1>
        </div>

        <p>{{$user->LGN_Name}}</p>

        <p>{{$applicant}}</p>

        <p>{{$uploads}}</p>

            <script>

            </script>
        </body>
    @endsection