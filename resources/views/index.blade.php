<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <br>
        @if(\Session::has('Success'))
            <div class="alert alert-success">
                <p>{{\Session::get('Success')}}</p>
            </div>
        @endif  
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Passport Office</th>
                    <th colspan="4">Action</th>
                </tr>
                
            </thead>
            <tbody>
                @foreach($passports as $passport)
                    @php
                        $date = date('Y-m-d',$passport['date']);
                    @endphp
                    <tr>
                        <td>{{$passport['id']}}</td>
                        <td>{{$passport['name']}}</td>
                        <td>{{$date}}</td>
                        <td>{{$passport['name']}}</td>
                        <td>{{$passport['number']}}</td>
                        <td>{{$passport['office']}}</td>
                        <td>
                            <a href="{{action('PassportController@edit', $passport['id'])}}" class="btn btn-warning">Edit  </a>
                        </td>
                        <td>
                            <a href="{{action('PassportController@create')}}" class="btn btn-success">Create</a>
                        </td>
                        <td>
                            <a href="{{url('pdf',$passport['id'])}}" class="btn btn-warning">PDF</a>
                        </td>
                        <td>
                            <form action="{{action('PassportController@destroy', $passport['id'])}}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>