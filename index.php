<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <!-- Bootstrap library -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
    .address-block {
    max-width: 500px;
    margin: 0 auto;
    border: 5px solid #8080803b;
    padding: 9px;
    border-radius: 10px;
  }
  .address-block h2 {
    margin: 0;
  }
  .address-block p {
    margin-bottom: 10px;
  }
  .address-submit{
    display: table;
    margin: 0 auto;
  }
  .form-control {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 16px;
    line-height: 18px;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
   input.error {
    border: 1px solid red;
  }
  .error{
    color: red;
  }
  .nav-link{
    text-transform: capitalize;
  }
  .alert-success,.alert-danger{
    display:none;
    margin-top: 10px;
  }
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    background-color: #007bff;
    color: white;
}

.tab-content {
    margin-top: 10px;
    border: 1px solid grey;
    padding-top: 10px;
}
.tab-content p {
    margin-bottom: 5px;
}
</style>
</head>
<body>
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Save Address</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
         <!-- Nav tabs -->
         <p>Which address format do you want to save?</p>
         <ul class="nav nav-tabs">

          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#original">Original</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#standardize">Standardize(USPS)</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active container" id="original">
            <?php
          ?>...</div>
          <div class="tab-pane container" id="standardize">...</div>
        </div>
        <div class="alert alert-success alert-dismissible fade show">
         <span> Address Saved successfully.</span>
       </div>
       <div class="alert alert-danger alert-dismissible fade show">
         <span> A problem has been occurred while submitting your data.</span>
       </div>
     </div>

     <!-- Modal footer -->
     <div class="modal-footer">
      <button type="button" class="btn btn-primary address-save">Save</button>
    </div>

  </div>
</div>
</div>

<div class="container pt-3">   
  <div class="address-block">
  <h2>Address Validator</h2>
  <p>Validate/Standardizes addresses using USPS</p>
  <form action="" name="address_form" class="needs-validation" novalidate method="post"> 
    <div class="form-group">
      <label for="address_line1">Address Line 1</label>
      <input type="text" class="form-control" id="address_line1" placeholder="Enter Address Line 1"  name="address_line1" required>
    </div>
    <div class="form-group">
      <label for="address_line2">Address Line 2</label>
      <input type="text" class="form-control" id="address_line2"  placeholder="Enter Address Line 2" name="address_line2" required>

    </div>
    <div class="form-group">
      <label for="city">City</label>
      <input type="text" class="form-control" id="city" placeholder="Enter City" name="city" required>

    </div>
    <div class="form-group">
      <label for="state">State</label>
      <select class="form-control" id="state" name="state" required>
        <option value="">N/A</option>
        <option value="AK">Alaska</option>
        <option value="AL">Alabama</option>
        <option value="AR">Arkansas</option>
        <option value="AZ">Arizona</option>
        <option value="CA">California</option>
        <option value="CO">Colorado</option>
        <option value="CT">Connecticut</option>
        <option value="DC">District of Columbia</option>
        <option value="DE">Delaware</option>
        <option value="FL">Florida</option>
        <option value="GA">Georgia</option>
        <option value="HI">Hawaii</option>
        <option value="IA">Iowa</option>
        <option value="ID">Idaho</option>
        <option value="IL">Illinois</option>
        <option value="IN">Indiana</option>
        <option value="KS">Kansas</option>
        <option value="KY">Kentucky</option>
        <option value="LA">Louisiana</option>
        <option value="MA">Massachusetts</option>
        <option value="MD">Maryland</option>
        <option value="ME">Maine</option>
        <option value="MI">Michigan</option>
        <option value="MN">Minnesota</option>
        <option value="MO">Missouri</option>
        <option value="MS">Mississippi</option>
        <option value="MT">Montana</option>
        <option value="NC">North Carolina</option>
        <option value="ND">North Dakota</option>
        <option value="NE">Nebraska</option>
        <option value="NH">New Hampshire</option>
        <option value="NJ">New Jersey</option>
        <option value="NM">New Mexico</option>
        <option value="NV">Nevada</option>
        <option value="NY">New York</option>
        <option value="OH">Ohio</option>
        <option value="OK">Oklahoma</option>
        <option value="OR">Oregon</option>
        <option value="PA">Pennsylvania</option>
        <option value="PR">Puerto Rico</option>
        <option value="RI">Rhode Island</option>
        <option value="SC">South Carolina</option>
        <option value="SD">South Dakota</option>
        <option value="TN">Tennessee</option>
        <option value="TX">Texas</option>
        <option value="UT">Utah</option>
        <option value="VA">Virginia</option>
        <option value="VT">Vermont</option>
        <option value="WA">Washington</option>
        <option value="WI">Wisconsin</option>
        <option value="WV">West Virginia</option>
        <option value="WY">Wyoming</option>
      </select>
      
    </div>
    <div class="form-group">
      <label for="zipcode">Zip Code</label>
      <input type="text" class="form-control" id="zipcode" placeholder="Enter Zip Code" name="zipcode" required>

    </div>
    <button type="submit" name="address_submit" class="btn btn-primary address-submit" >Validate</button>
  </form>
</div>
</div>
<script type="text/javascript">
  $( document ).ready(function() {

   $(".nav-tabs .nav-item").on("click",function(e) {
    $('.alert-danger').hide();
    $('.alert-success').hide();

  });
   var form = $( ".needs-validation" );
   form.validate();
   $(".address-submit").on("click",function(e) {
     event.preventDefault(); 
     $('.db-save').html('');

     if(form.valid() ){
      var form_values = $('form');

       var url = "address-validator.php"; //form.attr('action');

       $.ajax({
         type: "POST",
         url: url,
             data: form_values.serialize(), // serializes the form's elements.
             dataType: "json",
             success: function(response)
             {
              $("#myModal").modal('show');
              $('.modal-body #original').html(response.original)
              $('.modal-body #standardize').html(response.standardize)

              localStorage.setItem('original_array', JSON.stringify(response.original_array));
              localStorage.setItem('standardize_array',  JSON.stringify(response.standardize_array)); 
            },
            error: function(response) {
              console.log('ERROR BLOCK');
              console.log(response);
            }
          });
     }

   });





   $(".address-save").on("click",function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.


    var url = "add-data.php"; //form.attr('action');

    var active_tab = $("ul.nav-tabs li a.active").text();
    var flag = true;
    if( active_tab == 'Original'){
      data = localStorage.getItem('original_array');
      var flag = true
    }
    else{
     data = localStorage.getItem('standardize_array');
     console.log(data.Address1);
     const myObj = JSON.parse(data);

     if(myObj.error !== undefined){
      $('.alert-danger').show();
      $('.alert-danger').html('<strong>Error!</strong>'+ myObj.error )
      flag = false;
    }
    else{
      flag = true;
    }
  }
  if(flag == true){
    $.ajax({
     type: "POST",
     url: url,
     data: {myData:data},
     dataType: "json",
     success: function(response)
     {
      if(response.msg == 'success'){
        $('.alert-success').show();
        $('.alert-danger').hide();
      }
      else{
       $('.alert-danger').show();
       $('.alert-success').hide();
     }
   },
   error: function(response) {
    console.log(response);
  }
});
  }

});
 });
</script>
</body>
</html>