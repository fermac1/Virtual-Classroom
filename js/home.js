$(document).ready(function(){
    $('#login').hide();
    $('#signup').hide();

    $('#loginbtn').click(function(){
        $('#signup').hide();
      $('#login').show();
      document.getElementById('ovrlay').style.overflowY ='scroll';
      document.getElementById('main').style.overflowY ='auto';
      document.getElementById('ovrlay').style.overflowX ='hidden';
    })
    $('#signupbtn').click(function(){
        $('#login').hide();
        $('#signup').show();
        document.getElementById('main').style.overflowY ='auto';
        document.getElementById('ovrlay').style.overflowY ='auto';
        document.getElementById('ovrlay').style.overflowX ='hidden';

      })
//signup form
$('.loginlink').click(function(){
    $('#signup').hide();
  $('#login').show();
  document.getElementById('ovrlay').style.overflowY ='none';
})

//login form
$('.signuplink').click(function(){
    $('#login').hide();
    $('#signup').show();
    document.getElementById('main').style.overflowY ='auto';
    document.getElementById('ovrlay').style.overflowY ='auto';
    document.getElementById('ovrlay').style.overflowX ='none';
    document.getElementById('footer').style.position ='relative';
  })
  
  })
