<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
        <title>C/C++</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="style2.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script type="text/javascript">
      function searchit()
      {
         document.getElementById("hp").href=("https://www.google.com/search?q=") + (document.getElementById("linkit").value);
      }
    </script>
        
</head>
<body>
<div class="main">

<div id="navbar">
      
      <h1 style="color:#03ffda; padding: 5px;" >Liquified</h2>

      <div class="search-engine">
         <input type="search" id="linkit" placeholder="Search...">
         <a href="" id="hp" onclick="searchit()" target="_blank"><i class="fa fa-search"></i></a>
      </div>

      <div class="text-editor">
         <a href="nav/editor/editor.html" target="_blank" class="editor-link">Content Editor</a>
      </div>

      <div class="text-editor">
         <a href="nav/screen-recorder/index.html" target="_blank" class="editor-link">Lateless</a>
      </div>

      <div class="text-editor">
         <a href="#" target="_blank" class="editor-link">Quick books</a>
      </div>

      <div class="dropdown">
         <button class="dropbtn">&nbsp;CheatSheet&nbsp;</button>
         <div class="dropdown-content">
           <a href="nav/c_cheatsheet/c.html" target="_blank">C</a>
           <a href="nav/c++_cheatsheet/cpp.html" target="_blank">C++</a>
         </div>
       </div>
   </div>

   <button style="border: none; position: fixed; z-index: 2; left: 97%; top: 20%; padding: 15px; height: 40px; width: 40px; color: #171735; background-color: #03ffdd; border-radius: 50%; display: flex; justify-content: center; align-items: center; text-decoration: none;" data-target="modal-js-example" class="js-modal-trigger">
         <i class="fas fa-comment"></i>
   </button>

<div class="row cspace" style="margin:0px;">
<div class="col-sm-12" style="padding-top:10px;">
<div class="form-group">
<form action="compile.php" id="form" name="f2" method="POST" >
<label for="lang">Choose Language</label>

<select class="form-control" name="language">
<option value="c">C</option>
<option value="cpp">C++</option>

</select><br><br>

<label for="ta">Write Your Code</label>
<textarea class="form-control" name="code" rows="10" cols="50"></textarea><br><br>
<label for="in">Enter Your Input</label>
<textarea class="form-control" name="input" rows="10" cols="50"></textarea><br><br>
<input type="submit" id="st" class="btn btn-success" value="Run Code"><br><br><br>


</form>

<script type="text/javascript">
  
  $(document).ready(function(){

     $("#st").click(function(){
  
           $("#div").html("Loading ......");


     });

  });


</script>

<script>
//wait for page load to initialize script
$(document).ready(function(){
    //listen for form submission
    $('form').on('submit', function(e){
      //prevent form from submitting and leaving page
      e.preventDefault();

      // AJAX 
      $.ajax({ 
            type: "POST", //type of submit
            cache: false, //important or else you might get wrong data returned to you
            url: "compile.php", //destination
            datatype: "html", //expected data format from process.php
            data: $('form').serialize(), //target your form's data and serialize for a POST
            success: function(result) { // data is the var which holds the output of your process.php

                // locate the div with #result and fill it with returned data from process.php
                $('#div').html(result);
            }
        });
    });
});
</script>

<label for="out">Output</label>
<textarea id='div' class="form-control" name="output" rows="10" cols="50"></textarea><br><br>

<!--<script>
"use strict";
function submitForm(oFormElement)
{
  var xhr = new XMLHttpRequest();
  var display=document.getElementById('div');
  xhr.onload = function(){ display.innerHTML=xhr.responseText; }
  xhr.open (oFormElement.method, oFormElement.action, true);
  xhr.send (new FormData (oFormElement));
  return false;
}
</script>-->
<!--<label for="out">Output</label>
<textarea id='div' class="form-control" name="output" rows="10" cols="50"></textarea><br><br>-->
<div class="modal" id="modal-js-example" style="height: 100vh;">
         <div class="modal-background"></div>
         <div class="modal-card" style="height: 100vh; width: 70%;">
           <header class="modal-card-head">
             <p class="modal-card-title">Liqui Chats</p>
             <button class="delete" aria-label="close"></button>
           </header>
           <section class="modal-card-body">
             <!-- Content ... -->
             <iframe src="http://localhost:3000/" width="100%" height="100%">
             </iframe>
           </section>
           <footer class="modal-card-foot">
             <button class="button">Cancel</button>
           </footer>
         </div>
       </div>

</div>
</div>
</div>
</div>
<script>
      document.addEventListener('DOMContentLoaded', () => {
  // Functions to open and close a modal
  function openModal($el) {
    $el.classList.add('is-active');
  }

  function closeModal($el) {
    $el.classList.remove('is-active');
  }

  function closeAllModals() {
    (document.querySelectorAll('.modal') || []).forEach(($modal) => {
      closeModal($modal);
    });
  }

  // Add a click event on buttons to open a specific modal
  (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
    const modal = $trigger.dataset.target;
    const $target = document.getElementById(modal);
    console.log($target);

    $trigger.addEventListener('click', () => {
      openModal($target);
    });
  });

  // Add a click event on various child elements to close the parent modal
  (document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || []).forEach(($close) => {
    const $target = $close.closest('.modal');

    $close.addEventListener('click', () => {
      closeModal($target);
    });
  });

  // Add a keyboard event to close all modals
  document.addEventListener('keydown', (event) => {
    const e = event || window.event;

    if (e.keyCode === 27) { // Escape key
      closeAllModals();
    }
  });
});
   </script>
</body>
</html>


