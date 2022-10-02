
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    <table class="table table-striped w-25 mt-5 m-auto">
        <tr>
            <th>name</th>
            <th>face book</th>
            <th>linkedin</th>
            <th>github</th>
            <th>email</th>
            <th>profile_pic</th>
            <th>phone</th>
            <th>view</th>
            <th>update</th>
            <th>delete</th>
        </tr>
        @foreach ($profiles as $profile )
         <tr>
          <td>{{$profile->profile_name}}</td>
          <td>{{$profile->fb}}</td>
          <td>{{$profile->linkedin}}</td>
          <td>{{$profile->github}}</td>
          <td>{{$profile->email}}</td>
          <td> <img class="w-100" src="{{asset("profile_image/".$profile->profile_pic)}}"></td>
          <td>{{$profile->phone}}</td>
          <td><a class="btn btn-primary" href="{{url("name/$profile->profile_name")}}">view</a></td>
          <td><a class="btn btn-warning" href="{{url("edite/$profile->id")}}">update</a></td>
          <td><a class="btn btn-danger" href="{{url("delete/$profile->id")}}">delete</a></td>
         </tr>
        @endforeach
        <tr class=" text-center">
            <td colspan="10" align="center"><a class="btn btn-success" href="{{url("index")}}">add new profile</a></td>
        </tr>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
