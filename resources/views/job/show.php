<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<a href="post_job" class="btn btn-primary">Post a Job</a>
<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Job Id</th>
        <th>Job title</th>
        <th>Job type</th>
        <th>Location</th>
      </tr>
    </thead>
    <tbody class="tbody">   
    </tbody>
  </table>
  <ul class="pagination">
  </ul>
</div>
</body>


<script type="text/javascript">
  $(document).ready(function(){
    $.ajax({
      url: "jobs"
    }).done(function(res) {
      // alert(res);
      html = "";
      $.each(res.data, function(index, value){
        html += '<tr>';
        html +='<td>'+value.job_id+'</td>';
        html +='<td>'+value.job_title+'</td>';
        html +='<td>'+value.job_type+'</td>';
        html +='<td>'+value.location+'</td>';
        html +='</tr>';
      });
      $('.tbody').html(html);
      for(i=1; i<=res.total; i++){
       $('.pagination').append('<li><a href="#">'+i+'</a></li>');
      }
    });
  });
</script>
</html>
