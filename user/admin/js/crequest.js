function fun1(val) {
  // alert(val);
  $.ajax({
    type: 'post',
    url: 'delete.php',
    data: { value : val },

    success: function (response){
      document.querySelector(`#bar_${val}`).style.display = 'none'
    }})
}


function fun2(val,bloodgroup, email) {
  document.querySelector(`#bar_${val} span`).style.width = '50%'
  $.ajax({
    type: 'post',
    url: 'accept.php',
    data: { value : val, blood : bloodgroup , emailid : email},

    success: function (response){
      document.querySelector(`#bar_${val} span`).style.width = '100%'
      document.querySelector(`#bar_${val}`).style.display = 'none'

    }})
}
