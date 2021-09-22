<?php include ('config.php') ?>
<?php include "header.php" ?>
      <div class="content">
         <p class="mt-3">
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
               Post Job
            </a>
         </p>
         <div class="collapse" id="collapseExample">
            <div class="card card-body">
               <form method="POST">
                  <div class="mb-3">
                     <label for="companyName" class="form-label">Candidate Name</label>
                     <input type="text" class="form-control" id="companyName" name="cname">
                  </div>
                  <div class="mb-3">
                     <label for="companyPosition" class="form-label">Position</label>
                     <input type="text" class="form-control" id="companyPosition" name="pos">
                  </div>
                  <div class="mb-3">
                     <label for="jobDesc" class="form-label">Resume</label>
                     <textarea class="form-control"  id="jobDesc" cols="30" rows="10" name="resume"></textarea>
                  </div>
                  <div class="mb-3">
                     <label for="ctc" class="form-label">CTC</label>
                     <input type="text" class="form-control" id="ctc" name="ctc">
                  </div>
                  <button type="submit" class="btn btn-primary" name="applyJob">Submit</button>
               </form>            
            </div>
         </div>
         <table class="table table-striped">
            <thead>
               <tr>
                  <th scope="col">#</th>
                  <th scope="col">Candidate Name</th>
                  <th scope="col">Position</th>
                  <th scope="col">Resume</th>
                  
               </tr>
            </thead>
            <tbody>
               <?php
                  $sql = "Select cName, pos, resume from appliedcandidates";
                  $result = mysqli_query($conn, $sql);
                  if($result ->num_rows > 0){
                     $i = 0;
                     while($rows =$result->fetch_assoc()){
                        echo"<tr>
                              <th scope='row'>".++$i."</th>
                              <td>".$rows['cName']."</td>
                              <td>".$rows['pos']."</td>
                              <td><a class='fa fa-download text-center' style='color: black;'></a>  ".$rows['resume']."</td>
                           </tr>";
                     }
                  } else{
                     echo"";
                  }
               ?>
            </tbody>
            </table>
      </div>

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
   </body>
</html>