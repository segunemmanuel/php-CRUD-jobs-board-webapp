<?php 


if(isset($_POST['submit'])){


    if(!(isset($_SESSION['name']))){

        header("location: user/examples/register.php");
        
        }
        else{

            
$job_id=$_GET['apply'];
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$education=$_POST['education'];
$years=$_POST['years'];
$ava=$_POST['ava'];
$phone=$_POST['phone'];
$msg=$_POST['msg'];

$query= "INSERT INTO jobs_apply(user_job_id,job_apply_name,job_apply_email,job_apply_edu,job_apply_work_exp,job_apply_availability,job_apply_phone,job_apply_id,cv,job_apply_date) ";
$query.="VALUES('{$_SESSION['name']}','{$fullname}','{$email}','{$education}',{$years},'{$ava}','{$phone}', $job_id,'{$msg}', now()) ";

 echo var_dump($query);
 
$create_job=mysqli_query($connection, $query);
echo '<script>alert("Success")</script>';
header("location:apply.php?apply=$job_id");

if(!$create_job){
    die("error".mysqli_error($connection));
}
}



}
?>

<div class="col-lg-10">
<form class="form-contact contact_form" action="" method="post"  enctype="multipart/form-data"  >
<div class="row">

<div class="col-sm-6">
<div class="form-group">
<input class="form-control" name="fullname" id="name" type="text" placeholder="Enter your full names"  >
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control" name="email" id="email" type="email" placeholder="Email">
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
<select name="education" class="mb-3 form-select form-select-lg" aria-label=".form-select-lg example"  >
<option>Enter the highest education attained</option>
<option value="primary">Primary school</option>
<option value="secondary">Secondary school</option>
<option value="bachelors">Bachelors</option>
<option value="master">Masters</option>
<option value="phd">PhD</option>
</select>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control" name="years" id="email" type="number" placeholder="Number of years of experience">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<select name="ava" class="mb-3 form-select form-select-lg" aria-label=".form-select-lg example">
<option>Enter availability</option>
<option value="fultime">Full time</option>
<option value="parttime">Part time</option>
<option value="contract">Contract</option>
<option value="remote">Remote</option>
</select>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control" name="phone" id="phone" type="phones"  placeholder="Enter your phone number"  >
</div>
</div>

<div class="col-12">
<div class="form-group">
<textarea class="form-control w-100" name="msg" id="message" cols="30" rows="9" placeholder="Cover letter"  ></textarea>
</div>
</div>
<div class="col-12">
<div class="form-group">
<input class="form-control" name="cv" id="cv" type="file" placeholder="Upload your CV">
</div>
</div>
</div>
<div class="mt-3 form-group">
<button type="submit" name="submit" class="button button-contactForm boxed-btn">Submit</button>
</div>
</form>
</div>