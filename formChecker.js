function formChecker() {
  let gat = document.forms["cart"]["gatorade"].value;
  let spr = document.forms["cart"]["sprite"].value;
  let spw = document.forms["cart"]["sparkling-water"].value;
  if ((gat < 0) || (spr < 0) || (spw < 0)) {
    alert("Can't be negative!");
    return false;
  }

  else if ((gat.length == 0) || (spr.length == 0) || (spw.length == 0)) {
    alert("Can't be empty!");
    return false;
  }
  else {
    return True
  }
}