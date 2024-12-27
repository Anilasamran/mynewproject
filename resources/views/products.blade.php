<html>
    <head>
    <title>/project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
 crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css" 
integrity="sha512-UuQ/zJlbMVAw/UU8vVBhnI4op+/tFOpQZVT+FormmIEhRSCnJWyHiBbEVgM4Uztsht41f3FzVWgLuwzUqOObKw=="
 crossorigin="anonymous" referrerpolicy="no-referrer" />
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
 <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
</head>

<style>
    .pink{width:20%;background-color:#32a86d;padding:40px;margin:50px;border-radius:10px;}
    </style>
<body>
    <h1>Form</h1><br><br>
    <div class="pink">
        <form action="/proud"
    method="post">

        @csrf
    <form name="my form" class="form-group">
        <label for="inputname">Name</label>
        <input type="text" class="form-control" name="name" placeholder="name"><br><br>

        <label for="inputname">price</label>
        <input type="text" class="form-control" name="price" placeholder="price"><br><br>

        <label for="inputname">category</label>
        <input type="text" class="form-control" name="category" placeholder="category"><br><br>
        <label for="inputname">gallery</label>
        <input type="file" class="form-control" name="gallery" placeholder="gall..."><br><br>
        <label for="inputname">description</label>
        <input type="text" class="form-control" name="description" placeholder="desc..."><br><br>
        <button type="submit" class="btn btn-dark">submit</button>

    </form>
</div>

</body>
    </html>