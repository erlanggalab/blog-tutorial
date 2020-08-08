<?php
$data = [
    [
        "title" => "Foto Pohon 1",
        "content" => "Berisi Foto Pohon 1",
        "image" => "foto-pohon.jpg"
    ],
    [
        "title" => "Foto Pohon 2",
        "content" => "Berisi Foto Pohon 2",
        "image" => "foto-pohon.jpg"
    ],
    [
        "title" => "Foto Pohon 3",
        "content" => "Berisi Foto Pohon 3",
        "image" => "foto-pohon.jpg"
    ],
    [
      "title" => "Foto Pohon 4",
      "content" => "Berisi Foto Pohon 4",
      "image" => "foto-pohon.jpg"
  ]
];



?>
<html>
    <head>
        <title>Erlangga Blog</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">ERLANGGA BLOG</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              </form>
            </div>
          </nav>
          <div class="container mt-5">
            <div class="row">
                <?php
                for($i = 0; $i < count($data); $i++) { 
                ?>
                    <div class="col-md-4"> 
                        <div class="card" style="width: 18rem;">
                            <img src="<?=$data[$i]['image'];?>" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title"><?=$data[$i]['title'];?></h5>
                            <p class="card-text"><?=$data[$i]['content'];?>.</p>
                            <a href="post-1.html" class="btn btn-primary">Buka Foto Lengkap</a>
                            </div>
                        </div>
                    </div>
                    
                <?php 
                  }
                ?>
                
              </div>
           
        </div>
    </body>
</html>