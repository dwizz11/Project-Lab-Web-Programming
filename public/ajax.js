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
            // sessionStorage.setItem("removedcartitem", data.productname);
      
            

            //  console.log('this one');
         }else{
            // console.log('this two');
            
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

      $('#searchbar').keyup(function (e) { 
         var searchvalue = $('#searchbar').val();
         if(searchvalue == "")  $('#content').replaceWith(homeclone.clone());
         if(searchvalue != ""){
            $.ajax({
               type: 'get',
               url: "/search",
               data: {productname: searchvalue, page: 'home'},
               success: function (data) {
                  $('#content').html(data)
               }
            });
         }
         
      });

      $('#managesearch').keyup(function (e) { 
         var searchvalue = $('#managesearch').val();
         if(searchvalue == "")  $('#managecontent').replaceWith(manageclone.clone());
         if(searchvalue != ""){
            $.ajax({
               type: 'get',
               url: "/search",
               data: {productname: searchvalue, page: 'manage'},
               success: function (data) {
                  $('#managecontent').html(data)
               }
            });
         }
         
      });




  })
