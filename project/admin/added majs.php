<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  التخصصات المضافة</title>
    <style>
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
    height: 29.25em;
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

.project-categoryh {
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
    <center>
        <h3>لوحة تحكم الادمن</h3>
    </center>
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
               <p class='project-category'>$row[P_name]</p>
                <strong class='project-info'>
                    <span>$row[P_notes]</span>
                    <div>
                     <a href='delete.php? id=$row[P_id]' class='btn btn-danger'>حذف</a>
                     <a href='update.php? id=$row[P_id] #nav-contact-tab aria-selected='true'' class='btn btn-primary'>تعديل </a>
                    </div>
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