<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>التخصصات </title>
    
    <style>
        .logo{
            
        }
        main{
            width: 90%;
            justify-content: center;
        }
.projects {
 background-color: #fefeff;
}
 .projects .content{
 margin-top: 30px;
 }
.project-card {
    background-color: #fff;
    width: 21.25em;
    height: 25.25em;
    box-shadow: 0 5px 25px rgba(1 1 1 / 15%);
    border-radius: 10px;
    padding: 25px;
    margin: 20px;
    margin-right:50px;
    transition: 0.7s ease;
    float: right;
}

.project-card:hover {
   transform: scale(1.1);
}

.project-card:hover .project-image {
    opacity: 0.9;
 }

.project-image img{
    width: 100%;
    height: 300px;
    
}

.project-title {
    padding: 1.2em;
    text-align: center;
    color: #0a49f6;
}

.project-category {
    display: flex;
    justify-content: space-between;
    text-transform: uppercase;
    font-weight: 800;
    margin-top: 10px;
    text-align: center;
}

.project-info {
    text-align: right;
    font-size: 1em;
    color: #000;
    
}

    </style>
</head>

<body>

    <?php
      include('connect.php');
      $result = mysqli_query($conn, "SELECT * FROM programs");
      while($row = mysqli_fetch_array($result)){
        echo "
        <center>
        <main>
        <div class='content'>
        <div class='project-card'>
            <div class='project-image'>
                <img src='$row[image]' />
            </div>
            <div class='project-title'>
               <p class='project-categoryh'>$row[P_name]</p>
                <strong class='project-info'>
                    <span>$row[P_notes]</span>
                    <a href='#' class='btn btn-danger'>اقرأ المزيد</a>
                </strong>
            </div>
        </div>
        </main>
        </center>
       ";
       }
    
    ?>
    </body>
    </html>
    