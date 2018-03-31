<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/index.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <title>Resume Builder!</title>
</head>
<body>
    <div class="flexbox">
        <div class="side"></div>
        <div class="main">
        <h1 class="main_heading">PHP Resume Builder</h1>
        <form class="form-horizontal" role="form" method="post" action="resume.php">
        <!--Perosnal Information-->
        <div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<h3>Personal Information</h3>
		</div>
	</div>
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Name</label>
		<div class="col-sm-12">
			<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-12">
			<input type="email" class="form-control" id="email" name="email" placeholder="Email-ID" value="">
		</div>
	</div>
    <div class="form-group">
		<label for="phone" class="col-sm-2 control-label">Phone</label>
		<div class="col-sm-12">
			<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" value="">
		</div>
	</div>
    <div class="form-group">
		<label for="location" class="col-sm-2 control-label">Location</label>
		<div class="col-sm-12">
			<input type="text" class="form-control" id="location" name="location" placeholder="Location" value="">
		</div>
	</div>
	<div class="form-group">
		<label for="objective" class="col-sm-2 control-label">Objective</label>
		<div class="col-sm-12">
			<textarea class="form-control" rows="4" name="objective" id="objective" placeholder="Objective"></textarea>
		</div>
	</div>
    <div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<h3>Work Experience</h3>
		</div>
	</div>

    <!-- Experience 1 -->
    
    <div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<h5>Experience 1</h5>
		</div>
	</div>
    <div class="form-group">
		<label for="exp1_cmpname" class="col-sm-2 control-label">Company Name</label>
		<div class="col-sm-12">
			<input type="text" class="form-control" id="exp1_cmpname" name="exp1_cmpname" placeholder="Company Name" value="">
		</div>
	</div>
    <div class="form-group">
		<label for="exp1_role" class="col-sm-2 control-label">Role</label>
		<div class="col-sm-12">
			<input type="text" class="form-control" id="exp1_role" name="exp1_role" placeholder="Role" value="">
		</div>
	</div>
    <div class="form-group">
		<label for="exp1_period" class="col-sm-2 control-label">Period</label>
		<div class="col-sm-12">
			<input type="text" class="form-control" id="exp1_period" name="exp1_period" placeholder="Period" value="">
		</div>
	</div>
    <div class="form-group">
		<label for="exp1_highlights" class="col-sm-2 control-label">Highlights</label>
		<div class="col-sm-12">
			<textarea class="form-control" rows="3" name="exp1_highlights" id="exp1_highlights" placeholder="Highlights"></textarea>
		</div>
	</div>

    <!-- Experience 2 -->

    <div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<h5>Experience 2</h5>
		</div>
	</div>
    <div class="form-group">
		<label for="exp2_cmpname" class="col-sm-2 control-label">Company Name</label>
		<div class="col-sm-12">
			<input type="text" class="form-control" id="exp2_cmpname" name="exp2_cmpname" placeholder="Company Name" value="">
		</div>
	</div>
    <div class="form-group">
		<label for="exp2_role" class="col-sm-2 control-label">Role</label>
		<div class="col-sm-12">
			<input type="text" class="form-control" id="exp2_role" name="exp2_role" placeholder="Role" value="">
		</div>
	</div>
    <div class="form-group">
		<label for="exp2_period" class="col-sm-2 control-label">Period</label>
		<div class="col-sm-12">
			<input type="text" class="form-control" id="exp2_period" name="exp2_period" placeholder="Period" value="">
		</div>
	</div>
    <div class="form-group">
		<label for="exp2_highlights" class="col-sm-2 control-label">Highlights</label>
		<div class="col-sm-12">
			<textarea class="form-control" rows="3" name="exp2_highlights" id="exp2_highlights" placeholder="Highlights"></textarea>
		</div>
	</div>
    <!--Skills and Tech-->
    <div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<h3>Skillset</h3>
		</div>
	</div>
    <div class="form-group">
		<label for="skills" class="col-sm-2 control-label">Skills & Technologies</label>
		<div class="col-sm-12">
			<textarea class="form-control" rows="3" name="skills" id="skills" placeholder="Skills separated by comma"></textarea>
		</div>
	</div>
    <!--Education-->
    <div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<h3>Education</h3>
		</div>
	</div>
    <div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<h5>University/College</h5>
		</div>
	</div>
    <div class="form-group">
		<label for="college_name" class="col-sm-2 control-label">Name</label>
		<div class="col-sm-12">
			<input type="text" class="form-control" id="college_name" name="college_name" placeholder="College Name" value="">
		</div>
	</div>
    <div class="form-group">
		<label for="college_period" class="col-sm-2 control-label">Period</label>
		<div class="col-sm-12">
			<input type="text" class="form-control" id="college_period" name="college_period" placeholder="College Time Period" value="">
		</div>
	</div>
    <div class="form-group">
		<label for="college_cgpa" class="col-sm-2 control-label">CGPA</label>
		<div class="col-sm-12">
			<input type="text" class="form-control" id="college_cgpa" name="college_cgpa" placeholder="CGPA" value="">
		</div>
	</div>
    <div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<h5>Senior Secondary School</h5>
		</div>
	</div>
    <div class="form-group">
		<label for="seniorschool_name" class="col-sm-2 control-label">Name</label>
		<div class="col-sm-12">
			<input type="text" class="form-control" id="seniorschool_name" name="seniorschool_name" placeholder="School Name" value="">
		</div>
	</div>
    <div class="form-group">
		<label for="seniorschool_year" class="col-sm-2 control-label">Year</label>
		<div class="col-sm-12">
			<input type="text" class="form-control" id="seniorschool_year" name="seniorschool_year" placeholder="Passing Year" value="">
		</div>
	</div>
    <div class="form-group">
		<label for="seniorschool_percentage" class="col-sm-2 control-label">Percentage</label>
		<div class="col-sm-12">
			<input type="text" class="form-control" id="seniorschool_percentage" name="seniorschool_percentage" placeholder="Percentage" value="">
		</div>
	</div>
    <div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<h5>Secondary School</h5>
		</div>
	</div>
    <div class="form-group">
		<label for="school_name" class="col-sm-2 control-label">Name</label>
		<div class="col-sm-12">
			<input type="text" class="form-control" id="school_name" name="school_name" placeholder="School Name" value="">
		</div>
	</div>
    <div class="form-group">
		<label for="school_year" class="col-sm-2 control-label">Year</label>
		<div class="col-sm-12">
			<input type="text" class="form-control" id="school_year" name="school_year" placeholder="Passing Year" value="">
		</div>
	</div>
    <div class="form-group">
		<label for="school_percentage" class="col-sm-2 control-label">Percentage</label>
		<div class="col-sm-12">
			<input type="text" class="form-control" id="school_percentage" name="school_percentage" placeholder="Percentage" value="">
		</div>
	</div>
    <!--Interests-->
    <div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<h3>Interests</h3>
		</div>
	</div>
    <div class="form-group">
		<label for="interests" class="col-sm-2 control-label">Interests & Hobbies</label>
		<div class="col-sm-12">
			<textarea class="form-control" rows="3" name="interests" id="interests" placeholder="Hobbies"></textarea>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-12 col-sm-offset-2">
			<input id="submit" name="submit" type="submit" value="Generate Resume" class="btn btn-primary">
		</div>
	</div>
</form>
        </div>
        <div class="side"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>