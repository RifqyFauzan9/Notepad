<?php 
include "config.php";
$id = $_GET['edit'];
$query = "SELECT * FROM tb_notee WHERE id_note='$id'";
$sql = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($sql);
$no = 0;

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NotepadKu</title>
    <link rel="shortcut icon" href="img/notepad2.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      * {
        font-family: monospace;
    }

    body {
      background: url(img/leaves.webp);
    }

    .none {
        text-decoration: none;
        color: black;
    }

    nav h3 img {
        width: 70px;
        margin-bottom: 5px;
    }

    .footer {
      background: blue; 
      color: white; 
      margin-top: -1rem; 
      margin-bottom:1rem; 
      max-width:fit-content; 
      border-radius:1rem; 
      padding: 10px;
    }

    .navigasi {
      border: 3px solid lightblue; 
      max-width: 300px;
    }

    .kartu {
      max-width: fit-content; border: solid 3px lightblue; display: inline-block;
    }

    .card-link {
      text-decoration: none; 
      color: blue;
    }
    </style>
  </head>
  <body>
    <div class="container">
            <nav><a class="none" href="index.php"><h3 class="mt-3 none"><img src="img/notepad2.png">Edit</h3></a></nav>
            <div class="footer">Copyright © 2023 by Rifqy Fauzan</div>
    <div class="card shadow bg-body-tertiary rounded mb-3 navigasi">
        <div class="card-body">
            <form action="update_dua.php" method="post" >
            <input class="form-control me-2" name="title_note" placeholder="Title" value="<?php echo $result['title_note']?>">
            <input class="form-control me-2 mt-2" name="note_note" placeholder="Text" value="<?php echo $result['note_note']?>">
            <input type="hidden" name="id" value="<?php echo $result['id_note']?>">
            <button class="btn btn-primary mt-2 kanan" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload kanan" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
</svg>
            </button>
        </form>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>