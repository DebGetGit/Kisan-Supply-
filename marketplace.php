<!DOCTYPE html>
<html>
  <head>
    <title>Kisan Supply Home</title>
    <!-- <script>
  function goBack() {
    window.history.back()
  }
  function goForward() {
  window.history.forward()
}
</script> -->
    <link rel="stylesheet" type="text/css" href="css/agro.css" />
    <style type="text/css">
      .box {
        border: 20px;
        padding: 20px;
        border-radius: 30px;
        background-color: rgb(126, 89, 20);
        text-decoration: none;
      }
    </style>
    <script>
      function setIframeSource() {
        // behavior of myIframe
        var theSelect = document.getElementById("location");
        var theIframe = document.getElementById("page");
        var theUrl;
        theUrl = theSelect.options[theSelect.selectedIndex].value;
        theIframe.src = theUrl;

        // // behavior of myIframe2
        // var theSelect2 = document.getElementById("location");
        // var theIframe2 = document.getElementById("myIframe2");
        // var theUrl2;
        // theUrl2 = theSelect2.options[theSelect2.selectedIndex].value;
        // theIframe2.src = theUrl2;

        // // behavior of myIframe3
        // var theSelect3 = document.getElementById("location");
        // var theIframe3 = document.getElementById("myIframe3");
        // var theUrl3;
        // theUrl3 = theSelect3.options[theSelect3.selectedIndex].value;
        // theIframe3.src = theUrl3;
      }
    </script>
  </head>
  <body>
    <header> 
        <div class="main"> 
        <div class="logo"> 
        <img src="images\logo.png"> 
        </div> 
        <ul> 
        <div class="topnav">
        <li class="current"><a href="index.html">Home</a></li> 
        <!-- <li><a href="agro.php">Agro</a></li>  -->
        <li><a href="about.html">About</a></li>
        <li><a href="Calculator/index.html">Calculator</a></li>  
        <li><a href="login.html">Login</a></li> 
        <li><a href="cart.html">Cart</a></li> 
        
        <form id="form1" method="post">
        <div class="title">
        <label style="color:white;">Location:</label>
        <select name="location" id="location" onchange="setIframeSource()">
          <option value="market1.php">Howrah</option>
          <option value="market2.php">Salkia</option>
          <option value="market3.php">Bally</option>
          <option value="market4.php">Belur</option>
        </select>
    </form>
        <iframe id='page' src="market1.php"frameborder="0" marginwidth="0" marginheight="0" height="740" width="800" title="Iframe Example"></iframe>
    </div>
    
  </body>
  
</html>
