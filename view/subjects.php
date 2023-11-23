

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="view\src\css\styles.css" rel="stylesheet" />
        <style>
                        .card {
    transition: transform 0.3s ease; 
    text-decoration: none; 
    color: black; 
}

.card:hover {
    transform: scale(1.03); 
    text-decoration: none; 
}
        </style>
        <title>subject</title>
</head>
<body>

    <?php
    include 'view\templates\sideBar.php';
    $content = $_SESSION['content'];
    ?>
    <div class="container-fluid">
    <h1><?php
    echo $_GET['subject'];
    ?></h1>
    <div class="container mt-5">
        <div class="row">
            <?php
            if (isset($content[0])) {
                $subject = $_SESSION['content'][0];
                foreach ($content as $lecture) {
                    ?> <div class="col-md-4">
                    <div class="card" >
                      <img src="<?php echo $lecture['img_url']; ?>" class="card-img-top" alt="Lecture Image">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $lecture['title']; ?></h5>
                        <p class="card-text"><?php echo $lecture['description']; ?></p>
                        <a href="<?php echo $lecture['file_dir']; ?>" class="btn btn-primary">Download PDF</a>
                      </div>
                    </div>
                  </div>
                  <?php
                }
                
            }
            ?>
        </div>
    </div>
    

    </div>
</body>
</html>