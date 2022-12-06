
   function scroll(){

    let scrollY=window.pageYOffset
    let position_category=document.querySelector('#main-div').offsetHeight;
    
    let position_top=document.querySelector('#main-div').offsetTop
    console.log(position_top)



   }
   window.addEventListener('scroll',scroll)

   document.querySelector('#btn-scroll').addEventListener('click',function(){
    window.pageYOffset=position_top
   })
 
