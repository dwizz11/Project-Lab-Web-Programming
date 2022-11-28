function getMessage() {
    $.ajax({
       type:'POST',
       url:'/getmsg',
       data:'_token = <?php echo csrf_token() ?>',
       success:function(data) {
          $("#msg").html(data.msg);
       }
    });
 }



 function checkCart(){



    $.ajax({
          type:'GET',
          url:'/checkcart',
          success:function(data) {
              if(data.empty){
                // alert('Halo')
                  toastMixin.fire({
                      icon: 'info',
                      animation: true,
                      title: 'Your cart is empty, please purchase any item'
                    });
              }else{
                window.location.replace("/cart");
              }
              
          }
       });
  }

  function checkHistory(){
   $.ajax({
      type:'GET',
      url:'/checkhistory',
      success:function(data) {
          if(data.empty){
            // alert('Halo')
              toastMixin.fire({
                  icon: 'info',
                  animation: true,
                  title: 'There are no transaction history'
                });
          }else{
            window.location.replace("/history");
          }
          
      }
   });
  }

  function deletecartitem() {


   var whichitem = $('#deletecartitem').attr("value");

   var token = $("meta[name='csrf-token']").attr("content");

   $.ajax({
      type: "DELETE",
      url: "/cart/delete/" + whichitem,
      data: {"_token": token},
      success: function (data) {

         if(data.cartcount === 0){
            Swal.fire({
               allowOutsideClick: false,
               icon: 'info',
               title: data.productname + " has been removed",
               confirmButtonColor: '#3085d6',
               confirmButtonText: 'Next'
             }).then((result) => {
               if (result.isConfirmed) {
                  Swal.fire({
                     allowOutsideClick: false,
                     title: 'Your cart is empty',
                     icon: 'info',
                     confirmButtonColor: '#3085d6',
                     confirmButtonText: 'Return back to home'
                   }).then((result) => {
                     window.location.replace("/home");
                   })
               }
             })
      
            
         }else{
            
            toastMixin.fire({
               icon: 'warning',
               animation: true,
               title: data.productname + 'has been removed from your cart'
             });

   
         }
         
      }
   });

  }


  $(document).ready(function(){
   var homeclone = $("#content").clone();
   var manageclone = $("#managecontent").clone();
   var delayGet;

      $('#searchbar').keyup(function (e) {
         
         var searchvalue = $('#searchbar').val();
         searchvalue = $.trim(searchvalue);
         if(searchvalue.length == 0){
            $('#content').replaceWith(homeclone.clone());
            return;
         }
         $('#content').html(`
         <div class="container mt-5 bg-white position-relative" style="border-radius: 20px; box-shadow: 0px 0px 20px 10px rgba(0, 0, 0, 0.2); text-align: center; padding: 20px !important;">
         <h5>Searching Product</h5>
         </div>
         `);
         clearTimeout(delayGet);
         delayGet = setTimeout(() => {$.ajax({
            type: 'get',
            url: "/search",
            data: {productname: searchvalue, page: 'home'},
            success: function (data) {
               $('#content').html(data)
            }
         })}, 500);

         
      });

      $('#managesearch').keyup(function (e) { 
         var searchvalue = $('#managesearch').val();
         if(searchvalue.length == 0){
            $('#managecontent').replaceWith(manageclone.clone());
            return;
         }
         $('#managecontent').html(`
         <h5>Searching Product</h5>
         `);
         clearTimeout(delayGet);
         delayGet = setTimeout(() => {$.ajax({
            type: 'get',
            url: "/search",
            data: {productname: searchvalue, page: 'manage',button:'false'},
            success: function (data) {
               $('#managecontent').html(data)
            }
         })}, 500);
         
      });




  })
