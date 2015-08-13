
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Input Data I-Siska</title>
<style>

/*custom font*/
@import url(http://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {margin: 0; padding: 0;}

html {
   height: 100%;
   /*Image only BG fallback*/
   background: url('http://thecodeplayer.com/uploads/media/gs.png');
   /*background = gradient + image pattern combo*/
   background: 
      linear-gradient(rgba(196, 102, 0, 0.2), rgba(155, 89, 182, 0.2)), 
      url('http://thecodeplayer.com/uploads/media/gs.png');
}

body {
   font-family: montserrat, arial, verdana;
}
/*form styles*/
#msform {
   width: 400px;
   margin: 50px auto;
   text-align: center;
   position: relative;
}
#msform fieldset {
   background: white;
   border: 0 none;
   border-radius: 3px;
   box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
   padding: 20px 30px;
   
   box-sizing: border-box;
   width: 80%;
   margin: 0 10%;
   
   /*stacking fieldsets above each other*/
   position: absolute;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
   display: none;
}
/*inputs*/
#msform input, #msform textarea {
   padding: 15px;
   border: 1px solid #ccc;
   border-radius: 3px;
   margin-bottom: 10px;
   width: 100%;
   box-sizing: border-box;
   font-family: montserrat;
   color: #2C3E50;
   font-size: 13px;
}
/*buttons*/
#msform .action-button {
   width: 100px;
   background: #27AE60;
   font-weight: bold;
   color: white;
   border: 0 none;
   border-radius: 1px;
   cursor: pointer;
   padding: 10px 5px;
   margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
   box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
   font-size: 15px;
   text-transform: uppercase;
   color: #2C3E50;
   margin-bottom: 10px;
}
.fs-subtitle {
   font-weight: normal;
   font-size: 13px;
   color: #666;
   margin-bottom: 20px;
}
/*progressbar*/

</style>
<!-- cdn for modernizr, if you haven't included it already -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
<!-- polyfiller file to detect and load polyfills -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
<script>
  webshims.setOptions('waitReady', false);
  webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');
</script>


</head>

<body >
<!-- multistep form -->
<form autocomplete="off" style="width:600px" id="msform" action="index.php/InsertData/isiska" method="post">

<!-- <form id="msform" action="localhost/sibemf/index.php/cformabsen/ambil_data_form" method="post"> -->

   <!-- progressbar -->
   
   <!-- fieldsets -->
   <fieldset>
      <h3 class="fs-subtitle">Memasukkan Data Isiska</h3>
      <input type="text" name="Cust_Name" placeholder="Cust_Name" required />
      <input type="text" name="Cust_Ship" placeholder="Cust_Ship" required />
      <input type="text" name="City" placeholder="City" required />
      <input type="text" name="Customer_Segmen" placeholder="Customer_Segmen" required />
      <input type="text" name="Product" placeholder="Product" required />
      <input type="text" name="BW_Packet" placeholder="BW_Packet" required />
      <input type="button" name="next" class="next action-button" value="Next" /> 
     <!--  //<input type="submit" name="submit" class="submit action-button" value="Submit" /> -->
      
   </fieldset>
  
   <fieldset>
      <h3 class="fs-subtitle">Memasukkan Data Isiska</h3>
      <input type="text" name="One_Time_Charge" placeholder="One_Time_Charge" required />
      <input type="text" name="Abonemen" placeholder="Abonemen" required />
      <input type="text" name="Sales_by" placeholder="Sales_by" required />
      <input type="text" name="AM_Name" placeholder="AM_Name" required />
      <input type="text" name="AM_Phone" placeholder="AM_Phone" required />
      <input type="text" name="Customer_Name" placeholder="Customer_Name" required />  
      <input type="button" name="previous" class="previous action-button" value="Previous" />
      <input type="button" name="next" class="next action-button" value="Next" />
   </fieldset>
   <fieldset>
      <h3 class="fs-subtitle">Memasukkan Data Isiska</h3>
      <input type="text" name="Customer_Phone" placeholder="Customer_Phone" required />
      <input type="date" style="width:380px" name="Contract_Date" placeholder="Contract_Date" required />
      <input type="date" style="width:380px" name="Due_Date_Live" placeholder="Due_Date_Live" required />
      <input type="text" name="Tech_Data" placeholder="Tech_Data" required />
      <input type="button" name="previous" class="previous action-button" value="Previous" />
      <input type="submit" name="submit" class="submit action-button" value="Submit" />
</form>

<script src="<?php echo base_url(); ?>assets/jquery-1.9.1.min.js" language="javascript" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/jquery.easing.min.js" language="javascript" type="text/javascript"></script>


<script>
/* 
Orginal Page: http://thecodeplayer.com/walkthrough/jquery-multi-step-form-with-progress-bar 

*/
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
   if(animating) return false;
   animating = true;
   
   current_fs = $(this).parent();
   next_fs = $(this).parent().next();
   
   //activate next step on progressbar using the index of next_fs
   $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
   
   //show the next fieldset
   next_fs.show(); 
   //hide the current fieldset with style
   current_fs.animate({opacity: 0}, {
      step: function(now, mx) {
         //as the opacity of current_fs reduces to 0 - stored in "now"
         //1. scale current_fs down to 80%
         scale = 1 - (1 - now) * 0.2;
         //2. bring next_fs from the right(50%)
         left = (now * 50)+"%";
         //3. increase opacity of next_fs to 1 as it moves in
         opacity = 1 - now;
         current_fs.css({'transform': 'scale('+scale+')'});
         next_fs.css({'left': left, 'opacity': opacity});
      }, 
      duration: 800, 
      complete: function(){
         current_fs.hide();
         animating = false;
      }, 
      //this comes from the custom easing plugin
      easing: 'easeInOutBack'
   });
});

$(".previous").click(function(){
   if(animating) return false;
   animating = true;
   
   current_fs = $(this).parent();
   previous_fs = $(this).parent().prev();
   
   //de-activate current step on progressbar
   $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
   
   //show the previous fieldset
   previous_fs.show(); 
   //hide the current fieldset with style
   current_fs.animate({opacity: 0}, {
      step: function(now, mx) {
         //as the opacity of current_fs reduces to 0 - stored in "now"
         //1. scale previous_fs from 80% to 100%
         scale = 0.8 + (1 - now) * 0.2;
         //2. take current_fs to the right(50%) - from 0%
         left = ((1-now) * 50)+"%";
         //3. increase opacity of previous_fs to 1 as it moves in
         opacity = 1 - now;
         current_fs.css({'left': left});
         previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
      }, 
      duration: 800, 
      complete: function(){
         current_fs.hide();
         animating = false;
      }, 
      //this comes from the custom easing plugin
      easing: 'easeInOutBack'
   });
});

//$(".submit").click(function(){
//   return false;
//})

</script>



</body>
</html>