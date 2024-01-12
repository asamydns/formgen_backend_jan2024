@extends('Layouts.layout')
    @section('Title', 'Application')
    @section('Content')
        <body>
<div id = "table-paginate">
    <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
        <tr>
            <th>Nominee Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>City/Town</th>
            <th>Shortlisted</th>
        </tr>

        @foreach($data as $d)

            <tr id = "tableRows" class = "cursor" onClick = "getProfile({{$d->APL_ID}})" >
                <td>{{$d->APL_ID}}</td>
                <td>{{$d->APL_FName}}</td>
                <td>{{$d->APL_Mname}}</td>
                <td>{{$d->APL_LName}}</td>
            </tr>
        @endforeach
    </table>
</br>
    {!! $data->links() !!}
</div>

</body>
@endsection