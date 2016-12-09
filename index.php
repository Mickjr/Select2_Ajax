<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">

  <title>Autocomplete textbox using jQuery, PHP and MySQL by CodexWorld</title>

  <!--  Link stylesheet -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="/vendors/select2/css/select2.css">
  <!--  Link jQuery -->
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="/vendors/select2/js/select2.js"></script>

</head>

<body>
 
<div class="ui-widget">

  <select style="width:200px;" name="skills[]" id="skills" multiple=""></select>

</div>


<script type="text/javascript">


    var path = "/search.php";


    $.ajax({

       
        type: 'POST',

        url: path,

        success: function (data){

          $('#skills').append('<option></option>');

          $.each(data, function(index, val) {

              $.each(val, function(k, v) {

                  $('#skills').append('<option value="' + v.id + '">' + v.name + '</option>');

              });

          });


        }


    });

     $( '#skills' ).select2({ 

          placeholder: "Select a Language"

        });

  

</script>


</body>
</html>