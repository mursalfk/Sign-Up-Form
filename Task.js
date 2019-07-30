
// For the dropdown menu task
var citiesByProvince = {
    Sindh: ["Karachi","Hyderabad","Jamshoro"],
    Punjab: ["Lahore","Faisalabad","Multan"],
    Balochistan: ["Quetta","Sibi", "Zhob"],
    KPK: ["Peshawar", "Shingor", "Baltit"],
    "Former - FATA": ["Lower Dir", "Upper Dir", "Jandola"]
    }

function makeSubmenu(value) {
    if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
    else {
    var citiesOptions = "";
    for(cityId in citiesByProvince[value]) {
    citiesOptions+="<option>"+citiesByProvince[value][cityId]+"</option>";
    }
    document.getElementById("citySelect").innerHTML = citiesOptions;
    }
}

//For Password and Username Validation
function checkForm(form)
{
    if(form.username1.value == "") {
      alert("Error: Username cannot be blank!");
      form.username1.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.username1.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.username1.focus();
      return false;
    }

  if(form.password.value != "" && form.password.value === form.c_password.value) {
    if(form.password.value.length < 6) {
      alert("Error: Password must contain at least six characters!");
      form.password.focus();
      return false;
    }
    re = /[0-9]/;
    if(!re.test(form.password.value)) {
      alert("Error: password must contain at least one number (0-9)!");
      form.password.focus();
      return false;
    }
    re = /[a-z]/;
    if(!re.test(form.password.value)) {
      alert("Error: password must contain at least one lowercase letter (a-z)!");
      form.password.focus();
      return false;
    }
    re = /[A-Z]/;
    if(!re.test(form.password.value)) {
      alert("Error: password must contain at least one uppercase letter (A-Z)!");
      form.password.focus();
      return false;
    }
  } else {
    alert("Error: Please check that you've entered and confirmed your password!");
    form.password.focus();
    return false;
  }
  return true;
}
function reset(){
  var x = document.getElementById("uname").value;
  var y = document.getElementById("pwd").value;
  var z = document.getElementById("c_pwd").value;
  z.innerHTML=" ";
  y.innerHTML=" ";
  x.innerHTML=" ";
}