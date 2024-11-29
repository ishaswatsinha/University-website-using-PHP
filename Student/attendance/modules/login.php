


<div class="container">
  <div class="row">
  


    <div class="col-lg-10">
      <h3 class="text-center">Student's Section</h3>
		<?php if(isset($_GET['student'])) : ?>
			
				<div class="form-group alert alert-dismissible alert-danger">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Sorry!</strong> Invalid Student Roll No.
				</div>
			
		<?php endif; ?>
	
    <div class="col-md-8 col-md-offset-3 col-lg-8">
      <form class="form-horizontal" action="index.php" method="post" id="studentForm" data-toggle="validator">
        <div class="form-group">
          <label for="rollno" class="control-label">Roll Number</label>
          <input type="number" class="form-control" id="rollno" maxlength="6" name="rollno" placeholder="Please Enter Student's Roll Number" required>
        </div>
				
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-danger btn-block" style="border-radius:0%" value="Proceed">
				</div>
				
				<input type="hidden" name="student" value="y" />
      </form>
    </div> 
    </div>
  </div>

  <hr  />

</div>

<script>
	$('#loginForm').validator();
	$('#studentForm').validator();
</script>

