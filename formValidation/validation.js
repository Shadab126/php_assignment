function validation() {
  var userName = document.getElementById("userName");
  var pass = document.getElementById("pass");
  let span1 = document.querySelector(".span1");
  let span2 = document.querySelector(".span2");
  var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;

  if (userName.value == "") {
    // alert("Please enter your name.");
    userName.style.border = "2px solid red";
    span1.innerHTML = "Please enter userName";
    span1.style.color = "red";
    return false;
  }

  if (pass.value.match(passw)) {
    return true;
  } else {
    pass.style.border = "2px solid red";
    span2.innerHTML = "Please enter Valid Password";
    span2.style.color = "red";
    return false;
  }
}
