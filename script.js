  








   function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}






 const spans = document.querySelectorAll('.word span');

spans.forEach((span, idx) => {
  span.addEventListener('click', (e) => {
    e.target.classList.add('active');
  });
  span.addEventListener('animationend', (e) => {
    e.target.classList.remove('active');
  });
  
  // Initial animation
  setTimeout(() => {
    span.classList.add('active');
  }, 750 * (idx+1))
});

var $ = jQuery.noConflict();
$(document).ready(function(){

// $(".ad-button").click(function(){
//    $(this).addClass("active").siblings().removeClass("active");   

// });
// first button click
$(".showhide-1").click(function(){
    var count_val = $('.ads-watched input[type="text"]').val();
    var count = parseInt(count_val) + 1;
    $('.ads-watched input[type="text"]').attr('value', count);
    $(this).remove();
    $('button.showhide-2.ad-button').attr("disabled", false);
     
     var isdisabled = $('.showhide-2').is(":disabled");
     localStorage.setItem('disabled1', isdisabled); 

      var isVisible = $('.showhide-1').is(":visible"); 
      localStorage.setItem('visible1', isVisible);  
      localStorage.setItem("inputvalue", count);
  });

var countvalue = localStorage.getItem('inputvalue');
if(countvalue){
  $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue'));
}

// 2 button click
$(".showhide-2").click(function(){
    var count_val2 = $('.ads-watched input[type="text"]').val();
    var count2 =  parseInt(count_val2) + 1;
    $('.ads-watched input[type="text"]').attr('value', count2);
    $(this).remove();
    $('button.showhide-3.ad-button').attr("disabled", false);
    var isdisabled2 = $('.showhide-3').is(":disabled");
     localStorage.setItem('disabled2', isdisabled2); 

      var isVisible2 = $('.showhide-2').is(":visible"); 
      localStorage.setItem('visible2', isVisible2);  
      localStorage.setItem("inputvalue2", count2);
  });
var countvalue2 = localStorage.getItem('inputvalue2');
if(countvalue2){
$('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue2'));
}

// 3 button click
$(".showhide-3").click(function(){
    var count_val3 = $('.ads-watched input[type="text"]').val();
    var count3 =  parseInt(count_val3) + 1;
    $('.ads-watched input[type="text"]').attr('value', count3);
    $(this).remove();
    $('button.showhide-4.ad-button').attr("disabled", false);
    var isdisabled3 = $('.showhide-4').is(":disabled");
     localStorage.setItem('disabled3', isdisabled3);

      var isVisible3 = $('.showhide-3').is(":visible"); 
      localStorage.setItem('visible3', isVisible3);  
      localStorage.setItem("inputvalue3", count3);
  });

  var countvalue3 = localStorage.getItem('inputvalue3');
  if(countvalue3){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue3'));
  }

// 4 button click
$(".showhide-4").click(function(){
    var count_val4 = $('.ads-watched input[type="text"]').val();
    var count4 =  parseInt(count_val4) + 1;
    $('.ads-watched input[type="text"]').attr('value', count4);
    $(this).remove();
    $('button.showhide-5.ad-button').attr("disabled", false);
    var isdisabled4 = $('.showhide-5').is(":disabled");
     localStorage.setItem('disabled4', isdisabled4);

      var isVisible4 = $('.showhide-4').is(":visible"); 
      localStorage.setItem('visible4', isVisible4);  
      localStorage.setItem("inputvalue4", count4);
  });

  var countvalue4 = localStorage.getItem('inputvalue4');
  if(countvalue4){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue4'));
  }

// 5 button click
$(".showhide-5").click(function(){
    var count_val5 = $('.ads-watched input[type="text"]').val();
    var count5 =  parseInt(count_val5) + 1;
    $('.ads-watched input[type="text"]').attr('value', count5);
    $(this).remove();
    $('button.showhide-6.ad-button').attr("disabled", false);
    var isdisabled5 = $('.showhide-6').is(":disabled");
     localStorage.setItem('disabled5', isdisabled5);


      var isVisible5 = $('.showhide-5').is(":visible"); 
      localStorage.setItem('visible5', isVisible5);  
 localStorage.setItem("inputvalue5", count5);
  });

  var countvalue5 = localStorage.getItem('inputvalue5');
  if(countvalue5){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue5'));
  }


// 6 button click
$(".showhide-6").click(function(){
    var count_val6 = $('.ads-watched input[type="text"]').val();
    var count6 =  parseInt(count_val6) + 1;
    $('.ads-watched input[type="text"]').attr('value', count6);
    $(this).remove();
    $('button.showhide-7.ad-button').attr("disabled", false);

    var isdisabled6 = $('.showhide-7').is(":disabled");
     localStorage.setItem('disabled6', isdisabled6);

      var isVisible6 = $('.showhide-6').is(":visible"); 
      localStorage.setItem('visible6', isVisible6);  
 localStorage.setItem("inputvalue6", count6);
  });

  var countvalue6 = localStorage.getItem('inputvalue6');
  if(countvalue6){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue6'));
  }

// 7 button click
$(".showhide-7").click(function(){
    var count_val7 = $('.ads-watched input[type="text"]').val();
    var count7 =  parseInt(count_val7) + 1;
    $('.ads-watched input[type="text"]').attr('value', count7);
    $(this).remove();
    $('button.showhide-8.ad-button').attr("disabled", false);

    var isdisabled7 = $('.showhide-8').is(":disabled");
     localStorage.setItem('disabled7', isdisabled7);

      var isVisible7 = $('.showhide-7').is(":visible"); 
      localStorage.setItem('visible7', isVisible7);  
 localStorage.setItem("inputvalue7", count7);
  });

  var countvalue7 = localStorage.getItem('inputvalue7');
  if(countvalue7){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue7'));
  }



// 8 button click
$(".showhide-8").click(function(){
    var count_val8 = $('.ads-watched input[type="text"]').val();
    var count8 =  parseInt(count_val8) + 1;
    $('.ads-watched input[type="text"]').attr('value', count8);
    $(this).remove();
    $('button.showhide-9.ad-button').attr("disabled", false);

    var isdisabled8 = $('.showhide-9').is(":disabled");
     localStorage.setItem('disabled8', isdisabled8);

      var isVisible8 = $('.showhide-8').is(":visible"); 
      localStorage.setItem('visible8', isVisible8);  
 localStorage.setItem("inputvalue8", count8);
  });

  var countvalue8 = localStorage.getItem('inputvalue8');
  if(countvalue8){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue8'));
  }


// 9 button click
$(".showhide-9").click(function(){
    var count_val9 = $('.ads-watched input[type="text"]').val();
    var count9 =  parseInt(count_val9) + 1;
    $('.ads-watched input[type="text"]').attr('value', count9);
    $(this).remove();
    $('button.showhide-10.ad-button').attr("disabled", false);

    var isdisabled9 = $('.showhide-10').is(":disabled");
     localStorage.setItem('disabled9', isdisabled9);

      var isVisible9 = $('.showhide-9').is(":visible"); 
      localStorage.setItem('visible9', isVisible9);  
 localStorage.setItem("inputvalue9", count9);
  });

  var countvalue9 = localStorage.getItem('inputvalue9');
  if(countvalue9){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue9'));
  }


  // 10 button click
$(".showhide-10").click(function(){
    var count_val10 = $('.ads-watched input[type="text"]').val();
    var count10 =  parseInt(count_val10) + 1;
    $('.ads-watched input[type="text"]').attr('value', count10);
    $(this).remove();
    $('button.showhide-11.ad-button').attr("disabled", false);

    var isdisabled10 = $('.showhide-11').is(":disabled");
     localStorage.setItem('disabled10', isdisabled10);

      var isVisible10 = $('.showhide-10').is(":visible"); 
      localStorage.setItem('visible10', isVisible10);  
 localStorage.setItem("inputvalue10", count10);
  });

  var countvalue10 = localStorage.getItem('inputvalue10');
  if(countvalue10){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue10'));
  }



    // 11 button click
$(".showhide-11").click(function(){
    var count_val11 = $('.ads-watched input[type="text"]').val();
    var count11 =  parseInt(count_val11) + 1;
    $('.ads-watched input[type="text"]').attr('value', count11);
    $(this).remove();
    $('button.showhide-12.ad-button').attr("disabled", false);

    var isdisabled11 = $('.showhide-12').is(":disabled");
     localStorage.setItem('disabled11', isdisabled11);

      var isVisible11 = $('.showhide-11').is(":visible"); 
      localStorage.setItem('visible11', isVisible11);  
 localStorage.setItem("inputvalue11", count11);
  });

  var countvalue11 = localStorage.getItem('inputvalue11');
  if(countvalue11){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue11'));
  }


 // 12 button click
$(".showhide-12").click(function(){
    var count_val12 = $('.ads-watched input[type="text"]').val();
    var count12 =  parseInt(count_val12) + 1;
    $('.ads-watched input[type="text"]').attr('value', count12);
    $(this).remove();
    $('button.showhide-13.ad-button').attr("disabled", false);

    var isdisabled12 = $('.showhide-13').is(":disabled");
     localStorage.setItem('disabled12', isdisabled12);

      var isVisible12 = $('.showhide-12').is(":visible"); 
      localStorage.setItem('visible12', isVisible12);  
 localStorage.setItem("inputvalue12", count12);
  });

  var countvalue12 = localStorage.getItem('inputvalue12');
  if(countvalue12){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue12'));
  }

 
 // 13 button click
$(".showhide-13").click(function(){
    var count_val13 = $('.ads-watched input[type="text"]').val();
    var count13 =  parseInt(count_val13) + 1;
    $('.ads-watched input[type="text"]').attr('value', count13);
    $(this).remove();
    $('button.showhide-14.ad-button').attr("disabled", false);

    var isdisabled13 = $('.showhide-14').is(":disabled");
     localStorage.setItem('disabled13', isdisabled13);

      var isVisible13 = $('.showhide-13').is(":visible"); 
      localStorage.setItem('visible13', isVisible13);  
 localStorage.setItem("inputvalue13", count13);
  });

  var countvalue13 = localStorage.getItem('inputvalue13');
  if(countvalue13){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue13'));
  }

 // 14 button click
$(".showhide-14").click(function(){
    var count_val14 = $('.ads-watched input[type="text"]').val();
    var count14 =  parseInt(count_val14) + 1;
    $('.ads-watched input[type="text"]').attr('value', count14);
    $(this).remove();
    $('button.showhide-15.ad-button').attr("disabled", false);

    var isdisabled14 = $('.showhide-15').is(":disabled");
     localStorage.setItem('disabled14', isdisabled14);

      var isVisible14 = $('.showhide-14').is(":visible"); 
      localStorage.setItem('visible14', isVisible14);  
 localStorage.setItem("inputvalue14", count14);
  });

  var countvalue14 = localStorage.getItem('inputvalue14');
  if(countvalue14){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue14'));
  }

 // 15 button click
$(".showhide-15").click(function(){
    var count_val15 = $('.ads-watched input[type="text"]').val();
    var count15 =  parseInt(count_val15) + 1;
    $('.ads-watched input[type="text"]').attr('value', count15);
    $(this).remove();
    $('button.showhide-16.ad-button').attr("disabled", false);

    var isdisabled15 = $('.showhide-16').is(":disabled");
     localStorage.setItem('disabled15', isdisabled15);

      var isVisible15 = $('.showhide-15').is(":visible"); 
      localStorage.setItem('visible15', isVisible15);  
 localStorage.setItem("inputvalue15", count15);
  });

  var countvalue15 = localStorage.getItem('inputvalue15');
  if(countvalue15){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue15'));
  }

 // 16 button click
$(".showhide-16").click(function(){
    var count_val16 = $('.ads-watched input[type="text"]').val();
    var count16 =  parseInt(count_val16) + 1;
    $('.ads-watched input[type="text"]').attr('value', count16);
    $(this).remove();
    $('button.showhide-17.ad-button').attr("disabled", false);

    var isdisabled16 = $('.showhide-17').is(":disabled");
     localStorage.setItem('disabled16', isdisabled16);

      var isVisible16 = $('.showhide-16').is(":visible"); 
      localStorage.setItem('visible16', isVisible16);  
 localStorage.setItem("inputvalue16", count16);
  });

  var countvalue16 = localStorage.getItem('inputvalue16');
  if(countvalue16){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue16'));
  }

 // 17 button click
$(".showhide-17").click(function(){
    var count_val17 = $('.ads-watched input[type="text"]').val();
    var count17 =  parseInt(count_val17) + 1;
    $('.ads-watched input[type="text"]').attr('value', count17);
    $(this).remove();
    $('button.showhide-18.ad-button').attr("disabled", false);

    var isdisabled17 = $('.showhide-18').is(":disabled");
     localStorage.setItem('disabled17', isdisabled17);

      var isVisible17 = $('.showhide-17').is(":visible"); 
      localStorage.setItem('visible17', isVisible17);  
 localStorage.setItem("inputvalue17", count17);
  });

  var countvalue17 = localStorage.getItem('inputvalue17');
  if(countvalue17){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue17'));
  }

 // 18 button click
$(".showhide-18").click(function(){
    var count_val18 = $('.ads-watched input[type="text"]').val();
    var count18 =  parseInt(count_val18) + 1;
    $('.ads-watched input[type="text"]').attr('value', count18);
    $(this).remove();
    $('button.showhide-19.ad-button').attr("disabled", false);

    var isdisabled18 = $('.showhide-19').is(":disabled");
     localStorage.setItem('disabled18', isdisabled18);

      var isVisible18 = $('.showhide-18').is(":visible"); 
      localStorage.setItem('visible18', isVisible18);  
 localStorage.setItem("inputvalue18", count18);
  });

  var countvalue18 = localStorage.getItem('inputvalue18');
  if(countvalue18){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue18'));
  }

 // 19 button click
$(".showhide-19").click(function(){
    var count_val19 = $('.ads-watched input[type="text"]').val();
    var count19 =  parseInt(count_val19) + 1;
    $('.ads-watched input[type="text"]').attr('value', count19);
    $(this).remove();
    $('button.showhide-20.ad-button').attr("disabled", false);

    var isdisabled19 = $('.showhide-20').is(":disabled");
     localStorage.setItem('disabled19', isdisabled19);

      var isVisible19 = $('.showhide-19').is(":visible"); 
      localStorage.setItem('visible19', isVisible19);  
 localStorage.setItem("inputvalue19", count19);
  });

  var countvalue19 = localStorage.getItem('inputvalue19');
  if(countvalue19){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue19'));
  }

  // 20 button click
$(".showhide-20").click(function(){
    var count_val20 = $('.ads-watched input[type="text"]').val();
    var count20 =  parseInt(count_val20) + 1;
    $('.ads-watched input[type="text"]').attr('value', count20);
    $(this).remove();
    $('button.showhide-21.ad-button').attr("disabled", false);

    var isdisabled20 = $('.showhide-21').is(":disabled");
     localStorage.setItem('disabled20', isdisabled20);

      var isVisible20 = $('.showhide-20').is(":visible"); 
      localStorage.setItem('visible20', isVisible20);  
 localStorage.setItem("inputvalue20", count20);
  });

  var countvalue20 = localStorage.getItem('inputvalue20');
  if(countvalue20){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue20'));
  }
 

   // 21 button click
$(".showhide-21").click(function(){
    var count_val21 = $('.ads-watched input[type="text"]').val();
    var count21 =  parseInt(count_val21) + 1;
    $('.ads-watched input[type="text"]').attr('value', count21);
    $(this).remove();
    $('button.showhide-22.ad-button').attr("disabled", false);

    var isdisabled21 = $('.showhide-22').is(":disabled");
     localStorage.setItem('disabled21', isdisabled21);

      var isVisible21 = $('.showhide-21').is(":visible"); 
      localStorage.setItem('visible21', isVisible21);  
 localStorage.setItem("inputvalue21", count21);
  });

  var countvalue21 = localStorage.getItem('inputvalue21');
  if(countvalue21){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue21'));
  }

  // 22 button click
$(".showhide-22").click(function(){
    var count_val22 = $('.ads-watched input[type="text"]').val();
    var count22 =  parseInt(count_val22) + 1;
    $('.ads-watched input[type="text"]').attr('value', count22);
    $(this).remove();
    $('button.showhide-23.ad-button').attr("disabled", false);

    var isdisabled22 = $('.showhide-23').is(":disabled");
     localStorage.setItem('disabled22', isdisabled22);

      var isVisible22 = $('.showhide-22').is(":visible"); 
      localStorage.setItem('visible22', isVisible22);  
 localStorage.setItem("inputvalue22", count22);
  });

  var countvalue22 = localStorage.getItem('inputvalue22');
  if(countvalue22){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue22'));
  }

  // 23 button click
$(".showhide-23").click(function(){
    var count_val23 = $('.ads-watched input[type="text"]').val();
    var count23 =  parseInt(count_val23) + 1;
    $('.ads-watched input[type="text"]').attr('value', count23);
    $(this).remove();
    $('button.showhide-24.ad-button').attr("disabled", false);

    var isdisabled23 = $('.showhide-24').is(":disabled");
     localStorage.setItem('disabled23', isdisabled23);

      var isVisible23 = $('.showhide-23').is(":visible"); 
      localStorage.setItem('visible23', isVisible23);  
 localStorage.setItem("inputvalue23", count23);
  });

  var countvalue23 = localStorage.getItem('inputvalue23');
  if(countvalue23){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue23'));
  }


  // 24 button click
$(".showhide-24").click(function(){
    var count_val24 = $('.ads-watched input[type="text"]').val();
    var count24 =  parseInt(count_val24) + 1;
    $('.ads-watched input[type="text"]').attr('value', count24);
    $(this).remove();
    $('button.showhide-25.ad-button').attr("disabled", false);

    var isdisabled24 = $('.showhide-25').is(":disabled");
     localStorage.setItem('disabled24', isdisabled24);

      var isVisible24 = $('.showhide-24').is(":visible"); 
      localStorage.setItem('visible24', isVisible24);  
 localStorage.setItem("inputvalue24", count24);
  });

  var countvalue24 = localStorage.getItem('inputvalue24');
  if(countvalue24){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue24'));
  }



  // 25 button click
$(".showhide-25").click(function(){
    var count_val25 = $('.ads-watched input[type="text"]').val();
    var count25 =  parseInt(count_val25) + 1;
    $('.ads-watched input[type="text"]').attr('value', count25);
    $(this).remove();
    $('button.showhide-26.ad-button').attr("disabled", false);

    var isdisabled25 = $('.showhide-26').is(":disabled");
     localStorage.setItem('disabled25', isdisabled25);

      var isVisible25 = $('.showhide-25').is(":visible"); 
      localStorage.setItem('visible25', isVisible25);  
 localStorage.setItem("inputvalue25", count25);
  });

  var countvalue25 = localStorage.getItem('inputvalue25');
  if(countvalue25){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue25'));
  }



  // 26 button click
$(".showhide-26").click(function(){
    var count_val26 = $('.ads-watched input[type="text"]').val();
    var count26 =  parseInt(count_val26) + 1;
    $('.ads-watched input[type="text"]').attr('value', count26);
    $(this).remove();
    $('button.showhide-27.ad-button').attr("disabled", false);

    var isdisabled26 = $('.showhide-27').is(":disabled");
     localStorage.setItem('disabled26', isdisabled26);

      var isVisible26 = $('.showhide-26').is(":visible"); 
      localStorage.setItem('visible26', isVisible26);  
 localStorage.setItem("inputvalue26", count26);
  });

  var countvalue26 = localStorage.getItem('inputvalue26');
  if(countvalue26){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue26'));
  }



  // 27 button click
$(".showhide-27").click(function(){
    var count_val27 = $('.ads-watched input[type="text"]').val();
    var count27 =  parseInt(count_val27) + 1;
    $('.ads-watched input[type="text"]').attr('value', count27);
    $(this).remove();
    $('button.showhide-28.ad-button').attr("disabled", false);

    var isdisabled28 = $('.showhide-28').is(":disabled");
     localStorage.setItem('disabled27', isdisabled27);

      var isVisible27 = $('.showhide-27').is(":visible"); 
      localStorage.setItem('visible27', isVisible27);  
 localStorage.setItem("inputvalue27", count27);
  });

  var countvalue27 = localStorage.getItem('inputvalue27');
  if(countvalue27){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue27'));
  }



  // 28 button click
$(".showhide-28").click(function(){
    var count_val28 = $('.ads-watched input[type="text"]').val();
    var count28 =  parseInt(count_val28) + 1;
    $('.ads-watched input[type="text"]').attr('value', count28);
    $(this).remove();
    $('button.showhide-29.ad-button').attr("disabled", false);

    var isdisabled28 = $('.showhide-29').is(":disabled");
     localStorage.setItem('disabled28', isdisabled28);

      var isVisible28 = $('.showhide-28').is(":visible"); 
      localStorage.setItem('visible28', isVisible28);  
 localStorage.setItem("inputvalue28", count28);
  });

  var countvalue28 = localStorage.getItem('inputvalue28');
  if(countvalue28){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue28'));
  }



  // 29 button click
$(".showhide-29").click(function(){
    var count_val29 = $('.ads-watched input[type="text"]').val();
    var count29 =  parseInt(count_val29) + 1;
    $('.ads-watched input[type="text"]').attr('value', count29);
    $(this).remove();
    $('button.showhide-30.ad-button').attr("disabled", false);

    var isdisabled29 = $('.showhide-30').is(":disabled");
     localStorage.setItem('disabled29', isdisabled29);

      var isVisible29 = $('.showhide-29').is(":visible"); 
      localStorage.setItem('visible29', isVisible29);  
 localStorage.setItem("inputvalue29", count29);
  });

  var countvalue29 = localStorage.getItem('inputvalue29');
  if(countvalue29){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue29'));
  }


// 30 button click
$(".showhide-30").click(function(){
    var count_val30 = $('.ads-watched input[type="text"]').val();
    var count30 =  parseInt(count_val30) + 1;
    $('.ads-watched input[type="text"]').attr('value', count30);
    $(this).remove();
      var isVisible30 = $('.showhide-30').is(":visible"); 
      localStorage.setItem('visible30', isVisible30);  
 localStorage.setItem("inputvalue30", count30);
  });

  var countvalue30 = localStorage.getItem('inputvalue30');
  if(countvalue30){
    $('.ads-watched input[type="text"]').attr('value', localStorage.getItem('inputvalue30'));
  }


  
 var isVisible1 = localStorage.getItem('visible1') === 'false' ? false : true;
    $('.showhide-1').remove(isVisible1);

    var isdisabled1 = localStorage.getItem('disabled1') === 'false' ? false : true;
    $('.showhide-2').attr('disabled', isdisabled1);

    var isVisible2 = localStorage.getItem('visible2') === 'false' ? false : true;
    $('.showhide-2').remove(isVisible2);

    var isdisabled2 = localStorage.getItem('disabled2') === 'false' ? false : true;
    $('.showhide-3').attr('disabled', isdisabled2);

    var isVisible3 = localStorage.getItem('visible3') === 'false' ? false : true;
    $('.showhide-3').remove(isVisible3);

    var isdisabled3 = localStorage.getItem('disabled3') === 'false' ? false : true;
    $('.showhide-4').attr('disabled', isdisabled3);

    var isVisible4 = localStorage.getItem('visible4') === 'false' ? false : true;
    $('.showhide-4').remove(isVisible4);

    var isdisabled4 = localStorage.getItem('disabled4') === 'false' ? false : true;
    $('.showhide-5').attr('disabled', isdisabled4);

    var isVisible5 = localStorage.getItem('visible5') === 'false' ? false : true;
    $('.showhide-5').remove(isVisible5);

    var isdisabled5 = localStorage.getItem('disabled5') === 'false' ? false : true;
    $('.showhide-6').attr('disabled', isdisabled5);

    var isVisible6 = localStorage.getItem('visible6') === 'false' ? false : true;
    $('.showhide-6').remove(isVisible6);

    var isdisabled6 = localStorage.getItem('disabled6') === 'false' ? false : true;
    $('.showhide-7').attr('disabled', isdisabled6);

    var isVisible7 = localStorage.getItem('visible7') === 'false' ? false : true;
    $('.showhide-7').remove(isVisible7);

    var isdisabled7 = localStorage.getItem('disabled7') === 'false' ? false : true;
    $('.showhide-8').attr('disabled', isdisabled7);
    
    var isVisible8 = localStorage.getItem('visible8') === 'false' ? false : true;
    $('.showhide-8').remove(isVisible8);

    var isdisabled8 = localStorage.getItem('disabled8') === 'false' ? false : true;
    $('.showhide-9').attr('disabled', isdisabled8);

    var isVisible9 = localStorage.getItem('visible9') === 'false' ? false : true;
    $('.showhide-9').remove(isVisible9);

    var isdisabled9 = localStorage.getItem('disabled9') === 'false' ? false : true;
    $('.showhide-10').attr('disabled', isdisabled9);

    var isVisible10 = localStorage.getItem('visible10') === 'false' ? false : true;
    $('.showhide-10').remove(isVisible10);

    var isdisabled10 = localStorage.getItem('disabled10') === 'false' ? false : true;
    $('.showhide-11').attr('disabled', isdisabled10);

    var isVisible11 = localStorage.getItem('visible11') === 'false' ? false : true;
    $('.showhide-11').remove(isVisible11);

    var isdisabled11 = localStorage.getItem('disabled11') === 'false' ? false : true;
    $('.showhide-12').attr('disabled', isdisabled11);
    
    var isVisible12 = localStorage.getItem('visible12') === 'false' ? false : true;
    $('.showhide-12').remove(isVisible12);
 
    var isdisabled12 = localStorage.getItem('disabled12') === 'false' ? false : true;
    $('.showhide-13').attr('disabled', isdisabled12);

     var isVisible13 = localStorage.getItem('visible13') === 'false' ? false : true;
    $('.showhide-13').remove(isVisible13);
 
    var isdisabled13 = localStorage.getItem('disabled13') === 'false' ? false : true;
    $('.showhide-14').attr('disabled', isdisabled13);
    
    var isVisible14 = localStorage.getItem('visible14') === 'false' ? false : true;
    $('.showhide-14').remove(isVisible14);
 
    var isdisabled14 = localStorage.getItem('disabled14') === 'false' ? false : true;
    $('.showhide-15').attr('disabled', isdisabled14);
    
    var isVisible15 = localStorage.getItem('visible15') === 'false' ? false : true;
    $('.showhide-15').remove(isVisible15);
 
    var isdisabled15 = localStorage.getItem('disabled15') === 'false' ? false : true;
    $('.showhide-16').attr('disabled', isdisabled15);
    
    var isVisible16 = localStorage.getItem('visible16') === 'false' ? false : true;
    $('.showhide-16').remove(isVisible16);
 
    var isdisabled16 = localStorage.getItem('disabled16') === 'false' ? false : true;
    $('.showhide-17').attr('disabled', isdisabled16);

    var isVisible17 = localStorage.getItem('visible17') === 'false' ? false : true;
    $('.showhide-17').remove(isVisible17);
 
    var isdisabled17 = localStorage.getItem('disabled17') === 'false' ? false : true;
    $('.showhide-18').attr('disabled', isdisabled17);
    
    var isVisible18 = localStorage.getItem('visible18') === 'false' ? false : true;
    $('.showhide-18').remove(isVisible18);
 
    var isdisabled18 = localStorage.getItem('disabled18') === 'false' ? false : true;
    $('.showhide-19').attr('disabled', isdisabled18);

    var isVisible19 = localStorage.getItem('visible19') === 'false' ? false : true;
    $('.showhide-19').remove(isVisible19);
 
    var isdisabled19 = localStorage.getItem('disabled19') === 'false' ? false : true;
    $('.showhide-20').attr('disabled', isdisabled19);

    var isVisible20 = localStorage.getItem('visible20') === 'false' ? false : true;
    $('.showhide-20').remove(isVisible20);
 
    var isdisabled20 = localStorage.getItem('disabled20') === 'false' ? false : true;
    $('.showhide-21').attr('disabled', isdisabled20);
    
    var isVisible21 = localStorage.getItem('visible21') === 'false' ? false : true;
    $('.showhide-21').remove(isVisible21);
 
    var isdisabled21 = localStorage.getItem('disabled21') === 'false' ? false : true;
    $('.showhide-22').attr('disabled', isdisabled21);

    var isVisible22 = localStorage.getItem('visible22') === 'false' ? false : true;
    $('.showhide-22').remove(isVisible22);
 
    var isdisabled22 = localStorage.getItem('disabled22') === 'false' ? false : true;
    $('.showhide-23').attr('disabled', isdisabled22);

    var isVisible23 = localStorage.getItem('visible23') === 'false' ? false : true;
    $('.showhide-23').remove(isVisible23);
 
    var isdisabled23 = localStorage.getItem('disabled23') === 'false' ? false : true;
    $('.showhide-24').attr('disabled', isdisabled23);

    var isVisible24 = localStorage.getItem('visible24') === 'false' ? false : true;
    $('.showhide-24').remove(isVisible24);
 
    var isdisabled24 = localStorage.getItem('disabled24') === 'false' ? false : true;
    $('.showhide-25').attr('disabled', isdisabled24);

    var isVisible25 = localStorage.getItem('visible25') === 'false' ? false : true;
    $('.showhide-25').remove(isVisible25);
 
    var isdisabled25 = localStorage.getItem('disabled25') === 'false' ? false : true;
    $('.showhide-26').attr('disabled', isdisabled25);

    var isVisible26 = localStorage.getItem('visible26') === 'false' ? false : true;
    $('.showhide-26').remove(isVisible26);
 
    var isdisabled26 = localStorage.getItem('disabled26') === 'false' ? false : true;
    $('.showhide-27').attr('disabled', isdisabled26);
  // var countvalue = localStorage.getItem('inputvalue') === 'false' ? false : true;
  //   $('.ads-watched input[type="text"]').attr('value', localStorage.getItem("inputvalue"));



});
