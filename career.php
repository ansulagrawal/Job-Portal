<?php include ('config.php') ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

      <link rel="stylesheet" href="./components/CSS/career.css">
      <title>Career</title>
   </head>
   <body>
      <div class="card text-light mb-5">
         <img src="./components/Images/jback.jpg" class="card-img" alt="..." style="height: 16em;">
         <div class="card-img-overlay pt-5 ps-5 sm">
            <h1 class="card-title pt-5 ps-5">Job Portal</h1>
            <h5 class="card-text ps-5  ">Best Jobs available matching your skills</h5>
         </div>
      </div>
      <div class=" m-5 job-container">
            <?php
            $sql = "Select cname, position, jdesc, skills, ctc from jobs";
            $result = mysqli_query($conn, $sql);
            if($result ->num_rows > 0){
               while($rows =$result->fetch_assoc()){
                  echo'
                     <div class="job-tile">
                        <div class="rolename">
                           <span class="fs-3 fw-bolder">'.$rows["position"].'</span>
                           <span class="ms-3"> - '.$rows["cname"].'</span>
                        </div>
                        <div class="rolename">
                           <span class="fw-normal"><strong class="fw-bold">Skills Required: </strong>'.$rows["skills"].'</span>
                        </div>
                        <div class="description">
                           <strong class="fw-bold">Description:</strong>
                           <span class="fw-normal">'.$rows["jdesc"].'</span>
                        </div>
                        <div class="buttons">
                           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           Apply Now
                        </button>
                        </div>
                     </div>
                  ';
               }
            }else{
               echo"";
            }
            ?>
      </div>
      <!-- Modal -->
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
               <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Apply for Jobs</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form method="POST">
                     <div class="modal-body">
                        <div class="mb-3">
                           <label for="companyName" class="form-label">Full Name</label>
                           <input type="text" class="form-control" id="candiName" name="canname">
                        </div>
                        <div class="mb-3">
                           <label for="companyName" class="form-label">Applying For</label>
                           <input type="text" class="form-control" id="companyName" name="compname">
                        </div>
                        <div class="mb-3">
                           <label for="companyName" class="form-label">Quaification</label>
                           <input type="text" class="form-control"  id="qualification" name="qual">
                        </div>
                        <div class="mb-3">
                           <label for="companyName" class="form-label">Year Passout</label>
                           <input type="number" class="form-control" id="yearPassout" name="yearPass">
                        </div>
                        <div class="mb-3">
                           <label for="jobDesc" class="form-label">Resume Link</label>
                           <input type="text" class="form-control"  id="jobDesc" name="resume">
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"  name="appliedJob">Apply</button>
                     </div>
                  </form>
               </div>
            </div>
      </div>

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
   </body>
</html>