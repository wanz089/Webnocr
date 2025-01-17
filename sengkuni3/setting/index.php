<?php
include 'data.php';
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Setting Email</title>
  <link rel='stylesheet' href='https://cdn.rawgit.com/JacobLett/bootstrap4-latest/504729ba/bootstrap-4-latest.min.css'><link rel="stylesheet" href="./style.css">
  <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        *{
        margin:0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        }

        html,body{
        height: 100%;
        }

        body{
        display: grid;
        place-items: center;
        text-align: center;
        background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
        background-size: 400% 400%;
        animation: gradient 20s ease infinite;
        }
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
</style>

</head>
<body>
<div class="container" style="height:100vh;display:flex;align-items: center;justify-content: center;">

  <form class="container" id="needs-validation" onsubmit="return false">
    <div class="add">
      <div class="form-group">
      <img src="" style="transform:scale(1.2);max-width: 100%">
      </div>

      <div class="jumbotron p-2">
      <nav class="navbar navbar-light bg-dark text-white p-0 pl-2 rounded">
        <a class="navbar-brand text-white" href="#">
          SETTING EMAIL
        </a>
      </nav>
        <label class="mt-3" for="exampleInputEmail1">NAMA RESULT</label>
        <input type="email" class="form-control" value="<?= $nama; ?>" readonly>
        <label class="mt-2" for="exampleInputEmail1">EMAIL</label>
        <input type="email" class="form-control" value="<?= $mailzz; ?>" readonly>

        <button class="btn btn-primary mt-3" data-toggle="modal" data-target="#gantidata">Ganti Data</button>
      </div>




      


<div class="modal fade" id="gantidata" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">SETTING DATA</h5>
      </div>
      <div class="modal-body">
      <div class="form-group">
      <label for="exampleInputEmail1">NAMA RESULT - CONTOH: RESS GG</label>
        <input type="text" id="valNama" class="form-control" value="<?= $nama; ?>">
        <label class="mt-2" for="exampleInputEmail1">EMAIL - CONTOH: emailmu@gmail.com</label>
        <input type="email" id="valMailzz" class="form-control" value="<?= $mailzz; ?>">
      </div>

      </div>
      <div class="modal-footer d-flex justify-content-start">
        <button type="button" id="gantis" class="btn btn-success">Ganti</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>





  
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src='https://cdn.rawgit.com/JacobLett/bootstrap4-latest/504729ba/bootstrap-4-latest.min.js'></script><script  src="./script.js"></script>
<script>

  $('#gantis').click(function(){
  const nama = $('#valNama').val();
  const mailzz = $('#valMailzz').val();
  $(this).css('pointerEvents','none').css('opacity','0.5').css('cursor','no-drop');
  $.get('ganti.php?nama='+nama+'&mailzz='+mailzz,function(done){
    if(done == 200)
    {
      setTimeout(() => {
        $('#gantis').css('pointerEvents','unset').css('opacity','1').css('cursor','pointer');
        location.reload()
      },2000)
    }
  })
})
</script>

</body>
</html>
