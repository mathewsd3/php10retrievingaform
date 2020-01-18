<?php
if(isset($_POST['send'])){
	$error='';
    //Sample of php validation 
    if(isset($_POST['languages']) && count($_POST['languages'])<2){
        $error.= '<div id="erreur">Please choose at least 2 items</div>';
    }
    
	echo 'sending:';
	echo '<ul>';
	
	foreach($_POST as $k=>$v){
		if(is_array($v)){
			foreach($v as $key=>$value)
		     echo '<li>'.$key.' : '.$value.'</li>';
		}else{
	echo '<li>'.$k.' : '.$v.'</li>';
		}	
	}
	echo '</ul>';
	 
    }      
                     
?>
<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
crossorigin="anonymous">
</head>

<body>
<hr>
<div class="container">
<form class="needs-validation" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" novalidate>
  <div class="form-row">
    
	<div style="display:block; background-color:red;">
        <?php if(isset($error))echo $error;?>  
    </div>
	<div class="col-md-4 mb-3">
      <label for="validationCustom01">Username</label>
      <input type="text" class="form-control" name="name" id="validationCustom01" maxlength="50" placeholder="Enter Username" value="user" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Password</label>
      <input type="password" name="password" class="form-control" id="validationCustom02" min="18" max='150' placeholder="Enter Password" value="pass" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="text" class="form-control" name="email"  id="validationCustomUsername" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Username" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
    <label for="exampleInputPassword1" name="password" >Password</label>
    <input type="password" class="form-control" id="validationCustom03" maxlength="50" placeholder="Password" required>
     </div>
	 <div class="col-md-6 mb-3">
	 <label for="exampleLabelforAGe">Birth day</label>
    <input id="bday" class="form-control" name="bday"  required="required"  max="2001-10-21" type="date" >
	 </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">State</label>
      <input type="text" name="sate"  class="form-control" id="validationCustom04" placeholder="State" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" name="exampleselect"  id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
	
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" name="languages[]" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>

    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control"  name="msg"  id="exampleFormControlTextarea1" rows="3"></textarea>
      </div> 
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" name="send" type="submit">Submit form</button>
</form>
</div>
<script>
// sample Validation with JS and bootstrap
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>
