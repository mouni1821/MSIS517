<html>
<head>
  <script>
function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            alert('Invalid Email Address');
            return false;
        }

        return true;
}
</script>
</head>
<body>

<title>CONTACT</title>
<link href="css1/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
 <link href="css1/dashboard.css" rel="stylesheet">
<link href="css1/style.css" rel='stylesheet' type='text/css' />


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<!-- start menu -->
 <script src="jquery-1.12.4.js"></script>
<script src="jquery-ui.js"></script>
<link rel="stylesheet" href="jquery-ui.css">
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//alapatiswebsite.innocraft.cloud/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Piwik Code -->
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq.push(["setCookieDomain", "*.mounikaalapati.000webhostapp.com"]);
  _paq.push(["setDomains", ["*.mounikaalapati.000webhostapp.com"]]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//alapatiswebsite.innocraft.cloud/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//alapatiswebsite.innocraft.cloud/piwik.php?idsite=1&rec=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

</head>
<script src="../js/jquery.js"></script>
<script>
  $(document).ready(
    function(){
      $(".pop1").on('click', function(){
        $(".box").slideDown("slow");
      });

      $(".close").on('click', function(){
        $(".box").slideUp("slow");
    });
  });
</script>

<style>
  .box{
    background-color: white ;
    height:200px;
    width:400px;
    position: absolute;
    left:35%;
    top:30%;
    display:none;
    text-align: center;
    border: 2px solid black;
  }
  .close{
    float:right;
  }
  #draggable {
    width: 100px;
    height: 100px;
    background: #ccc;
    padding-left: 20px;
    left: 25px;
    top: 30px;
  }
  #droppable {
    position: absolute;
    left: 250px;
    top: 40px;
    width: 125px;
    height: 125px;
    background: #999;
    color: red;
    padding: 10px;
  }
</style>
<body>
<!-- header --> `

<div class="col-sm-3 col-md-2 sidebar">
     <div class="sidebar_top">
       <h1>Resume</h1>
      
         
        
            <div class="profile-photo-container">
          <img src="images/1.jpg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>
        
      
     </div>
    <div class="details">
      <table>

      <h3>+1 (845) 337-9835</h3>
      <h3>mouni.1821@gmail.com</h3>
      <h3>99 Delafield Street</h3>
      <h3>Poughkeepsie</h3>
      <h3>New York - 12601</h3>
<br>      
       <a class="pop1" href="#" >
  <h3>Download Resume</h3>
</a>
    
    </table>
  </div>
    <div class="clearfix"></div>
</div>
<!---->
<link href="css1/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
  <!---//pop-up-box---->      
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
   <div class="content">
     <div class="details_header">
       <ul>
         <li><a href="index.php">HOME</a></li>
				 
				 <li><a href="about.php">ABOUT</a></li>
				 <li><a href="portfolio.php">PORTFOLIO</a></li>
				 <li><a href="contact.php">CONTACT</a></li>
       </ul>
     </div>
     <div class="company">
       <h3 class="clr1">Alapati Mounika Chowdary</h3>
       <div class="company_details">
         
    </div>

    <div class="company contact-grid">
       <h3 style="color:black">Contact</h3>
       <form method="POST" name="myForm" action="https://formspree.io/mouni.1821@gmail.com" >  
          <input type="text" name="username" required="required" placeholder="Your Name">          
          
          <input type="text" name="senderEmail" required="required" placeholder="Your Email ID" onblur="validateEmail(this);">
          
          <input type="text" name="subject" required="required" placeholder="Subject">

        </br></br>

          <textarea cols="77" rows="6" name="Message" placeholder="Message" required></textarea>
          </br></br>
            <select id="RoC" name="Reason of Contact"></select> </br></br>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
          <script >
              var $select = $('#RoC');
              $.getJSON('data.json', function(data){
                

                for (var i = 0; i < data['RoC'].length; i++) {
                 $select.append('<option id="' + data['RoC'][i]['id'] + '">' + data['RoC'][i]['name'] + '</option>');
                 }
              });
          </script>
            </br>
          <div class="send">
            <input type="submit" name="send" onsubmit="setTimeout(function () { window.location.reload(); }, 10)">
              </div>
       </form>
       
     </div>

    <div class="copywrite">
        


       <p>© 2017 Alapati Mounika Chowdary. All Rights Reserved</p>
    </div>
   </div>
</div>
<!---->
<div class="box">
  <img class="close" src="images/close.png" width="30"/>
  <div>
    <p>Perform Captcha</p>
    <div id="droppable">Drop here</div>
    <div id="draggable">Drag me</div>
    <iframe id="my_iframe" style="display:none;"></iframe>
    <script>
$( "#draggable" ).draggable();
$( "#droppable" ).droppable({
  drop: function() {   
    //window.location.=url;
    // window.open(url, 'download'); 
    window.location.href = 'resume.docx';
    }
});
</script>
  </div>
</div>
</body>
</html>

<?php

$link= mysqli_connect("localhost","root","","mouni_proj");
if (isset($_POST['send']))
 {
       $username = $_POST['username'];
       $subject = ($_POST['subject']);
       $message = ($_POST['Message']);
       $email = $_POST['senderEmail'];
       $roc = $_POST['ReasonOfContact'];
       

       // Mail Stuff
       $to = "mouni.1821@gmail.com";
       $subject = "New Form Submitted";
       $txt = "New Contact form has been Submitted";
       $headers = "From: donotreply@fmt.com" ;


       date_default_timezone_set("America/New_York");
       $timestamp = date('Y-m-d G:i:s');
       
       if (isset($_POST['senderEmail'])==true && empty($_POST['senderEmail'])==false)
        {
        $email=$_POST['senderEmail'];
        if (filter_var($email,FILTER_VALIDATE_EMAIL)==true)
         { 
                    
                    $query="INSERT INTO contact (username,subject,email,message,roc,time_stamp) 
                    values ('$username','$subject','$email','$message','$roc','$timestamp')";
                    $stmt=$link->prepare($query);
                    if($stmt->execute()==true)
                        {
                             mail($to,$subject,$txt,$headers);
                             echo "<script>alert(' Submitted Successful')</script>";
                             EXIT();
                             //header('Location:index.php');
                        }
                
        
    }
        else
        {
            echo "<script>alert('Invalid Email Address')</script>";
            die();
        }
    }
}
?>
