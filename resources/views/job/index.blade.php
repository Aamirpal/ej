<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Example of Bootstrap 3 Static Form Control</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
	/* Fix alignment issue of label on extra small devices in Bootstrap 3.2 */
    .form-horizontal .control-label{
        padding-top: 7px;
    }
</style>
</head>
<body>
<a href="show_jobs" class="btn btn-primary">Show Jobs</a>
<div class="bs-example col-xs-6">
    <form class="form-horizontal" action="http://uat-ej.herokuapp.com/post_job" method="post" encription="multipart">
         {{ csrf_field() }}
        <div class="form-group">
            <label for="inputPassword" class="control-label col-xs-2">Job Title</label>
            <div class="col-xs-10">
                <input  type="text" class="form-control" id="inputPassword" placeholder="Job Title" name="job_title">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="control-label col-xs-2">Job Id</label>
            <div class="col-xs-10">
                <input  type="text" class="form-control" id="inputPassword" placeholder="Job Id" name="job_id">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="control-label col-xs-2">Job Type</label>
            <div class="col-xs-10">
                <input  type="text" class="form-control" id="inputPassword" placeholder="Job Type" name="job_type">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="control-label col-xs-2">Location</label>
            <div class="col-xs-10">
                <input  type="text" class="form-control" id="inputPassword" placeholder="Location" name="location">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="control-label col-xs-2">Experince</label>
            <div class="col-xs-10">
                <input  type="text" class="form-control" id="inputPassword" placeholder="Experince" name="experince">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="control-label col-xs-2">Skill </label>
            <div class="col-xs-10">
                <input  type="text" class="form-control" id="inputPassword" placeholder="Skill" name="skill">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="control-label col-xs-2">Description</label>
            <div class="col-xs-10">
                <input  type="text" class="form-control" id="inputPassword" placeholder="Description" name="description">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="control-label col-xs-2">Company Name</label>
            <div class="col-xs-10">
                <input  type="text" class="form-control" id="inputPassword" placeholder="Company Name" name="company_name">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="control-label col-xs-2">Logo</label>
            <div class="col-xs-10">
                <input  type="file" class="form-control" id="inputPassword" placeholder="Logo" name="file">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                <button type="submit" class="btn btn-primary">submit</button>
            </div>
        </div>
    </form>
</div>
</body>	
</html>                                 			