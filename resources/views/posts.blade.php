<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD BY DB QUERY BUILDER LARAVEL 8</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">

        @if(Session::has('delete_post'))
        <div class="alert alert-success" role="alert">
            {{Session::get('delete_post')}}

        </div>

        @endif
           <a class="btn btn-primary" href="{{url('/add-post')}}">Go To Add Post Page</a>
            <table class="table">
                <thead>
                    <tr>
                   
                    <th scope="col">Post Title</th>
                    <th scope="col">Post Body</th>
                    <th scope="col">Action</th>
                    
                    </tr>
                </thead>
                <tbody>

                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td>{{$post->body}}</td>
                        <td>
                            <a class="btn btn-success" href="/posts/{{$post->id}}">View</a>
                            
                            <a class="btn btn-primary" href="/edit-post/{{$post->id}}">Edit</a>
                            <a class="btn btn-danger" href="/delete-post/{{$post->id}}" onclick="confirm('are you sure want to delete this post?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
                  
                </tbody>
            </table>

        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>