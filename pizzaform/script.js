function onlyTwoCheckBoxes() {
  var checkboxes = document.getElementsByName("toppings[]");
  var checkedCount = 0; 

  for (var i = 0; i < checkboxes.length-1; i++) { 
    if (checkboxes[i].checked) { 
      checkedCount++; 
    }
  }

    if (checkedCount > 2) {
      alert("You can select only 2 toppings");
      return false;
    }
    else if (checkedCount < 2) {
      alert("Please select exactly 2 toppings");
      return false;
    }


}