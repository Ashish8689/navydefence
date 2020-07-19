//Javascript function scrolling up

      mybutton=document.getElementById("mybtn");

      //When the user scrolls down 20px from top of the document,butoon will appear

      window.onscroll = function(){ scrollFunction()};

      function scrollFunction(){
        if(document.body.scrollTop>20 || document.documentElement.scrollTop>20){
          mybutton.style.display = "block";
        }
        else{
          mybutton.style.display="none";
        }
      }

      //When the user click the button,scroll to the top of document

      function topfunction(){
        document.body.scrollTop=0;    //for Safari
        document.documentElement.scrollTop=0;    //for chrome,firefox,and other   
      }


  
  $(document).ready(function(){

     $('.hamburger').on('click',function(){
     $('.nav-link').toggleClass('open');
     $('.hamburger').toggleClass('toggle');
    });


   //  **************  AOS Animation  ***********

        AOS.init({
        easing:'ease',
        duration:1000,
      });

  });
  

   // Full image view 

    $('.container .grid .test-popup-link').magnificPopup({
      type: 'image',
      gallery:{enabled:true}
    });



