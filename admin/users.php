<?php 
  include("classes/admin.php");
  $admin=new admin;
  $userd=$admin->show_users();

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="author" content="templatemo" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />

    <title>About Us</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css" />
    <link rel="stylesheet" href="../assets/css/templatemo-liberty-market.css" />
    <link rel="stylesheet" href="../assets/css/owl.css" />
    <link rel="stylesheet" href="../assets/css/animate.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>

    <style>
      h3 {
        text-align: center;
        display: grid;
        grid-template-columns: 200px max-content 200px;
        grid-template-rows: 20px 0;
        grid-gap: 20px;
        justify-content: center;
        margin-top: 50px;
        font-family: "Poppins";
      }

      h3:after,
      h3:before {
        content: " ";
        display: block;
        border-bottom: 3px solid #7453fc;
      }

      p {
        font-family: "Poppins";
        font-size: x-large;
        margin-top: 30px;
        color: rgb(255, 255, 255);
      }

      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

nav {
    display: flex;
    height: 80px;
    width: 100%;
    background: #00000000;
    align-items: center;
    justify-content: space-between;
    padding: 0 50px 0 100px;
    flex-wrap: wrap;

}

nav .logo {
    width: 223px;
}

nav ul {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
}

nav ul li {
    margin: 0 5px;
}

nav ul li a {
    color: #f2f2f2;
    text-decoration: none;
    font-size: 18px;
    font-weight: 500;
    padding: 8px 15px;
    border-radius: 5px;
    letter-spacing: 1px;
    transition: all 0.3s ease;
}

nav ul li a.active,
nav ul li a:hover {
    color: #111;
    background: #fff;
}

nav .menu-btn i {
    color: #fff;
    font-size: 22px;
    cursor: pointer;
    display: none;
}

input[type="checkbox"] {
    display: none;
}

@media (max-width: 1000px) {
    nav {
        padding: 0 40px 0 50px;
    }
}

@media (max-width: 920px) {
    nav .menu-btn i {
        display: block;
    }

    #click:checked~.menu-btn i:before {
        content: "\f00d";
    }

    nav ul {
        position: fixed;
        top: 80px;
        left: -100%;
        background: #111;
        height: 100vh;
        width: 100%;
        text-align: center;
        display: block;
        transition: all 0.3s ease;
    }

    #click:checked~ul {
        left: 0;
    }

    nav ul li {
        width: 100%;
        margin: 40px 0;
    }

    nav ul li a {
        width: 100%;
        margin-left: -100%;
        display: block;
        font-size: 20px;
        transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    #click:checked~ul li a {
        margin-left: 0px;
    }

    nav ul li a.active,
    nav ul li a:hover {
        background: none;
        color: red;
    }
}
    </style>
  </head>

  <body style="background-image: url('../images/bgnew.jpg');">
  <nav>
            <div class="logo">
                <a href="admin_main.php" class="logo">
                    <img src="../images/p01.png" alt="" style="width: 124%;" />
                </a>
            </div>
            <ul>
                <li><a href="admin_main.php">Home</a></li>
                <li><a href="manage_courses/manage_courses.php">Manage_Documents</a></li>
                <li><a href="manage_videos/manage_videos.php">Manage_Videos</a></li>
                <!-- <li><a href="#">Logout</a></li> -->
            </ul>
        </nav>

    <div class="page-heading" style="margin-top: -160px;">
      <div class="container">
        <div>
          <h3>List Of Users</h3>

          <div class="col-xl-9 d-flex grid-margin stretch-card" style="margin-left: 130px;">
                <div class="col-md-12">
                    <div style="display:flex;justify-content: center;">
                      <center>
                        <table class="table ml-5 bg-white shodow pl-5 table-responsive" border="2" align="center"
                            style="overflow-y: scroll;display: inline-block;  margin-top:40px; padding: 50px;">
                            
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">UserName</th>
                                    <th scope="col">Email Id</th>
                                </tr>
                            </thead>
                            <tbody style="">
                                <?php 
                        foreach ($userd as $userdata) {        
                 ?>
                                <tr>
                                    <th scope="row"><?php echo $userdata['id']; ?></th>
                                    <td><?php echo $userdata['username']; ?></td>
                                    <td><?php echo $userdata['email']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                       
                        </center>
                    </div>
                </div>
            </div>
           
        </div>
      </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <footer style="padding: 18px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p style="font-size: 15px; font-family: inherit;margin-top: 16px;">
               2022 Copyright : Programming Languages Learning
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="../assets/js/isotope.min.js"></script>
    <script src="../assets/js/owl-carousel.js"></script>
    <script src="../assets/js/wow.js"></script>
    <script src="../assets/js/tabs.js"></script>
    <script src="../assets/js/popup.js"></script>
    <script src="../assets/js/custom.js"></script>
  </body>
</html>
