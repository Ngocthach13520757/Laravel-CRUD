<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <h2>Edit form</h2><br>
        <form action="{{action('PassportController@update',$passport['id'])}}" method="POST">
            @csrf
            <input name="_method" type="hidden" value="PATCH">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" value="{{$passport['name']}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="email">Email:</label>
                    <input type="text" name="email" class="form-control" value="{{$passport['email']}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="phone">Phone number:</label>
                    <input type="text" name="number" class="form-control" value="{{$passport['number']}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label>Passport Office:</label>
                    <select name="office">
                        <option value="Mumbai" @if($passport['office']=='Mumbai') selected @endif>Mumbai</option>
                        <option value="Chennai" @if($passport['office']=='Chennai') selected @endif>Chennai</option>
                        <option value="Vietnam" @if($passport['office']=='Vietnam') selected @endif>Vietnam</option>
                        <option value="Delhi" @if($passport['office']=='Delhi') selected @endif>Delhi</option>
                        <option value="Bangalore" @if($passport['office']=='Bangalore') selected @endif>Bangalore</option>
                    </select>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4" style="margin-top: 30px">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>

            </div>

        </form>
        

    </div>
</body>
</html>