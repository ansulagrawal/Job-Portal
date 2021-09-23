<?php include ('config.php') ?>
<?php include "header.php" ?>
      <div class="content">
         <table class="table table-striped">
            <thead>
               <tr>
                  <th scope="col">#</th>
                  <th scope="col">Candidate Name</th>
                  <th scope="col">Applied For</th>
                  <th scope="col">Quaification</th>
                  <th scope="col">Passout Year</th>                  
               </tr>
            </thead>
            <tbody>
               <?php
                  $sql = "Select `Name`, `Applying For`, `Qualification`, `Year Passout` FROM `canditate`";
                  $result = mysqli_query($conn, $sql);
                  if($result ->num_rows > 0){
                     $i = 0;
                     while($rows =$result->fetch_assoc()){
                        echo"<tr>
                              <th scope='row'>".++$i."</th>
                              <td>".$rows['Name']."</td>
                              <td>".$rows['Applying For']."</td>
                              <td>".$rows['Qualification']."</td>
                              <td>".$rows['Year Passout']."</td>
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