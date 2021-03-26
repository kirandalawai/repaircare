<!DOCTYPE html>
<html>
<head>
    <title>Booking</title>

    <style>
input[type=text],input[type=email],input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 10%;
  background-color: skyblue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: red;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>



<div>
  <form method = "POST" name="repair">
    <h4 style="text-align: left;"><center>Thanks for choosing to book your appointment with us online.<br> We know your time is valuable so please fill out the form below,<br> and we will confirm your appointment date and time immediately<br> during normal business hours.<br><br>Thanks,Repair Care - Appliances Repair Phoenix</h4></center>
    
    <h3>Contact Details</h3>

    <label for="fname"><b>Select Title<font color ="red">*</font></label>
    <select name="title">
        <option value="title">Select</option>
        <option value="mrs">Mr</option>
        <option value="ms">Mrs</option>
    </select>

    <label for="fname">Full Name<font color ="red">*</font></label>
    <input type="text" id="fname" name="fullname"  placeholder="Full Name" required>

    <label for="fname">Phone Num<font color ="red">*</font></label>
    <input type="number" id="fname" name="phoneNum" placeholder="Ph no" required>

    <label for="fname">Email<font color ="red">*</font></label>
    <input type="email" id="fname" name="email" placeholder="email.." required>
    
    <label for="fname">Organization</font></label>
    <input type="number" id="fname" name="Organization" placeholder="Optional">
    
    <label for="fname"><b>Select City<font color ="red">*</font></label>
    <select name="city" >
        <option value="title">Select</option>
        <option value="bnglr">Bangalore</option>
        <option value="coim">Coimbatore</option>
        <option value="chen">Chennai</option>
    </select>

    <label for="fname">Pin code<font color ="red">*</font></label>
    <input type="number" id="fname" name="pincode" placeholder="Pin code"required>


     <label for="fname"><b>Select Brands<font color ="red">*</font></label>
    <select name="brands" >
        <option value="title">Select</option>
        <option value="bnglr">Bosch</option>
        <option value="coim">Siemens</option>
        <option value="chen">Faber</option>
        <option value="chen">Kaff</option>
        <option value="chen">Elica</option>
        <option value="chen">IFB</option>
        <option value="chen">Gilma</option>
        <option value="chen">Glen</option>
        <option value="chen">Whirlpool</option>
        <option value="chen">Hafele</option>
        <option value="chen">Samsung</option>
        <option value="chen">Electrolux</option>
        <option value="chen">LG</option>
        <option value="chen">Indesit</option>
        <option value="chen">Sunflame</option>
        <option value="chen">Cata</option>
        <option value="chen">Prestige</option>
    </select>

     <label for="fname"><b>Select Product<font color ="red">*</font></label>
    <select name="products" >
        <option value="title">Select</option>
        <option value="bnglr">Dishwasher</option>
        <option value="coim">Chimney</option>
        <option value="chen">Cooking raneg</option>
        <option value="chen">Microwave Oven</option>
    </select>

     <label for="fname"><b>Select Services<font color ="red">*</font></label>
    <select name="services" id="">
        <option value="title">Select</option>
        <option value="bnglr">General Services</option>
        <option value="coim">Deep Cleaning</option>
        <option value="chen">Visiting and inspection</option>
        <option value="chen">Repair and services</option>
        <option value="chen">Installation</option>
        <option value="chen">Un-Installation</option>
    </select>
       <input type="submit" name="submit" value="Submit"><br>

       <a href ="repair.php">Home</a>
    </form>
</div>

<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbxFjLA0Fsqz7KD80m3i0X9lKlTpMeZcwElHo3M1RaaOFr98EnHRqRt0Pg4rZ97T8QSM0A/exec'
  const form = document.forms['repair']

  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => alert("Thanks for Contacting us..! We Will Contact You Soon..."))
      .catch(error => console.error('Error!', error.message))
  })
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>