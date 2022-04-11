<?php  
   session_start();  

   include_once '../model/model_SignUp.php';  

   $user = new Sign();  


   $id = $_SESSION['id'];  
   if (!$user->session()){  
      header("location: ../Page d'accueil/singIn.php");  
   }  

   if (isset($_REQUEST['q'])){  
      $user->logout();  
      header("location: ../Page d'accueil/singIn.php"); 
   }  
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>DashbordAdmin</title>
        <!-- Favicon-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

          <!-- Bootstrap core JS-->
         

         <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>


        <link rel="stylesheet" href="../styleAdmin/bootstrap.css">
        <link rel="stylesheet" href="../style/styleColors.css">
        <link rel="stylesheet" href="../styleAdmin/indexDashbord.css">
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            
            <div class="Sidebar slidarcolor" id="sidebar-wrapper">

                <div class="boxImage">
                    <img src="../images/logo/rsz_black_and_yellow_typographic_art___design_logo__3_-removebg-preview.png" alt="">
                </div>

                
                <div class="list-group list-group-flush list-link">
                      
                      <div class="mt-3 d-flex justify-content-center">
                        <a href="indexDashbord.php" class="fs-5 text-center me-3 text-decoration-none text-dark ">
                            <i class="bi bi-columns-gap icon-list"></i>
                            Home
                        </a>
                      </div>

                      <div class="mt-3 d-flex justify-content-center">
                        <a href="" class="fs-5 text-center me-3 text-decoration-none text-dark ">
                            <i class="bi bi-people icon-list"></i>
                            friends 
                        </a>
                      </div>
                      
                      <div class="mt-3 d-flex justify-content-center">
                        <a href="student.php" class="fs-5 text-center  text-decoration-none text-dark ">
                            <i class="bi bi-chat-dots icon-list"></i>
                            Messages
                        </a>
                      </div>

                      <div class="mt-3 d-flex justify-content-center">
                        <a href="contactsAdmin.php" class="fs-5 text-center me-1 text-decoration-none text-dark">
                            <i class="bi bi-person-rolodex icon-list"></i>
                            contacts
                        </a>
                      </div>

                      
                      <div class="mt-3 d-flex justify-content-center">
                        <a href="" class="fs-5 text-center me-3 text-decoration-none text-dark ">
                            <i class="bi bi-card-checklist icon-list"></i>
                            mission 
                        </a>
                      </div>

                      <div class="mt-3 d-flex justify-content-center">
                        <a href="payment.php" class="fs-5 text-center me-1 text-decoration-none text-dark">
                            <i class="bi bi-gear icon-list"></i>
                            setting
                        </a>
                      </div>



                      <div class="mt-3 d-flex justify-content-center">
                        <a href="?q=logout" class="fs-5 text-center me-1 text-decoration-none text-dark">
                          <i class="bi bi-box-arrow-left icon-list"></i>
                            LOGOUT
                        </a>
                      </div>


                      
                     
                    </div>
            </div>




            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->

                <nav class="navbar navbar-expand-lg  bg-light navbar-light ">
                    <div class="container-fluid">
                        <a class="navbar-brand navIcons" id="sidebarToggle">
                            <i class="bi bi-arrow-left-right"></i>
                        </a>
                    </div>
                </nav>

                
                <!-- Page content-->
                <div class="container-fluid">
                    
                    <div class="container">
                        <div class="container-content">


                            <div class="content-left">                                
                                <div class="carts">
                                    <div class="cart cart-1">
                                        <p>total patients</p>
                                        <p>63,987</p>
                                        <p>total patient admited: 30,40</p>
                                    </div>
                                    <div class="cart cart-2">
                                        <p>total patients</p>
                                        <p>63,987</p>
                                        <p>total patient admited: 30,40</p>
                                    </div>
                                    <div class="cart cart-3">
                                        <p>total patients</p>
                                        <p>63,987</p>
                                        <p>total patient admited: 30,40</p>
                                    </div>
                                </div>

                                <div class="tabelContent">

                                    <div class="barContact">
                                        <div class="barContact-lf">
                                            <h1>contacts</h1>
                                            <a href="">add new</a>
                                        </div>

                                        <div class="barContact-re">
                                            <form action="">
                                                <input type="search" name="search" id="search" placeholder="search contacts">
                                            </form>
                                        </div>
                                    </div>

                                    <div class="tabals">
                                        <table class="table table-borderless tabls">
                                            <thead>
                                              <tr>
                                                <th scope="col">name</th>
                                                <th scope="col">phone</th>
                                                <th scope="col">email</th>
                                                <th scope="col">address</th>
                                                <th scope="col">edit</th>
                                              </tr>
    
                                            </thead>
                                            <tbody>

                                              <tr>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>mdo</td>
                                                <td>mdo</td>
                                                <td>
                                                    <button type="button" class="btn btndrow" id="dropdownMenuOffset" data-bs-toggle="dropdown" >
                                                        <i class="bi bi-filter-right"></i>
                                                      </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                                        <li><a class="dropdown-item" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-fill id"></i> edit</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="bi bi-trash2-fill de"></i>delet</a></li>
                                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-eye-fill sh"></i>show</a></li>
                                                      </ul>
                                                </td>
                                              </tr>
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="content-re">
                                <div class="cartAdmin">
                                    <div class="imagedash"></div>
                                    <p><?php $user->fullname($id); ?></p>
                                    <span>admin</span>
                                    <a href="">setting</a>
                                </div>
                            </div>

                            <div class="calendar">
                                
                            </div>



                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="contentForm">

                                      <div class="mb-3">
                                        <label for="exampleInputfullname1" class="form-label">fullname</label>
                                        <input type="text" class="form-control" id="exampleInputfullname1">
                                      </div>

                                      <div class="mb-3">
                                        <label for="exampleInputphone1" class="form-label">phone</label>
                                        <input type="text" class="form-control" id="exampleInputphone1">
                                      </div>

                                      <div class="mb-3">
                                        <label for="exampleInputemail1" class="form-label">email</label>
                                        <input type="gmail" class="form-control" id="exampleInputemail1">
                                      </div>
                                      
                                      <div class="mb-3">
                                        <label for="exampleInputaddress1" class="form-label">address</label>
                                        <input type="text" class="form-control" id="exampleInputaddress1">
                                      </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button onclick="hh();"  type="button" class="btn btn-primary" style="background-color: #cce7c2 ; ">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>






                            
                        </div>
                    </div>

                    
                </div>
           </div>
       </div>


        <!-- Core theme JS-->
        <script src="../scriptAdmin/scripts.js"></script>
    </body>
</html>
