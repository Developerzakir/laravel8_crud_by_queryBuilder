<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8 Crud Operation With DB Query Builder</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h2>Update Post</h2>
                </div>

                <div class="card-body">
                    @if(Session::has('update_post'))

                    <div class="alert alert-success" role="alert">
                        {{Session::get('update_post')}}

                    </div>

                    @endif
                    <form method="POST" action="{{route('post.updatePost')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$posts->id}}">

                        <div class="mb-3">
                            <label for="title" class="form-label">Post Title</label>
                            <input type="text" class="form-control" name="title" value="{{$posts->title}}" id="title" aria-describedby="emailHelp">
                        
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Post Description</label>
                            <textarea class="form-control" name="body" id="body"  rows="6">{{$posts->body}}</textarea>
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                </div>
            </div>
            
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>