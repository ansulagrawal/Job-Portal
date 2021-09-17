<?php include "header.php"?>
      <div class="content">
         <p class="mt-3">
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
               Post Job
            </a>
         </p>
         <div class="collapse" id="collapseExample">
            <div class="card card-body">
               <form>
                  <div class="mb-3">
                     <label for="companyName" class="form-label">Company Name</label>
                     <input type="text" class="form-control" id="companyName">
                  </div>
                  <div class="mb-3">
                     <label for="companyPosition" class="form-label">Position</label>
                     <input type="text" class="form-control" id="companyPosition">
                  </div>
                  <div class="mb-3">
                     <label for="jobDesc" class="form-label">Job Description</label>
                     <textarea class="form-control"  id="jobDesc" cols="30" rows="10"></textarea>
                  </div>
                  <div class="mb-3">
                     <label for="ctc" class="form-label">CTC</label>
                     <input type="text" class="form-control" id="ctc">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
               </form>            
            </div>
         </div>
         <table class="table table-striped">
            <thead>
               <tr>
                  <th scope="col">#</th>
                  <th scope="col">Company Name</th>
                  <th scope="col">Position</th>
                  <th scope="col">CTC</th>
                  
               </tr>
            </thead>
            <tbody>
               <tr>
                  <th scope="row">1</th>
                  <td>TCS</td>
                  <td>Software Enginier</td>
                  <td>7.8 Lakh</td>
               </tr>
               <tr>
                  <th scope="row">2</th>
                  <td>Infosis</td>
                  <td>Web Developer</td>
                  <td>10 Lakh</td>
               </tr>
               <tr>
                  <th scope="row">3</th>
                  <td>Relience</td>
                  <td>Software Enginier</td>
                  <td>18 Lakh</td>
               </tr>
            </tbody>
            </table>
      </div>

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
   </body>
</html>
