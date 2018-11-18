 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                     <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller'=>'Pages','action'=>'dashboard')) ?>
                </li>



                <li class="breadcrumb-item active">Config
                </li>
              </ol>
            </div>
          </div>
          <h3 class="content-header-title mb-0">Follow steps to config your steps</h3>
        </div>

      </div>

  <div class="content-body">


   <section id="icon-tabs">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Complet the steps</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <form action="#" class="icons-tab-steps wizard-notification">
                      <!-- Step 1 -->
                      <h6><i class="step-icon la la-facebook-official"></i> Facebook page connect</h6>
                      <fieldset>

                     <h1>Let’s connect your Facebook Page</h1>
                           <p>Click below to Facebook connect with our service. This enables to manage your Facebook Messenger messages. This is necessary to send personalized messages like Abandon Cart messages.</p>
                        <center>

              <div id="fbLogin" class="fb-login-button"scope="public_profile,email,pages_show_list" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true" onlogin="myalert()"></div>
                           <div class="col-4">
              <select class="select2-data-array form-control" id="select2-array" onchange="myselectedRoll(this)">
<option>Select your page</option>
              </select>

                             </div>
              <div id="status">
              </div>


                        </center>

                      </fieldset>
                      <!-- Step 2 -->
                      <h6><i class="step-icon la la-code"></i>Shopify store connect</h6>
                      <fieldset>
                        <center>
                        <?php echo $this->Html->image('admin/images/logo_shopify.jpg',array('style'=>'height:50px;')) ?>
                      </center>
                      <br>
                         <center> <div class="row">
                          <div class="col-md-4">
 <h4>Shopify URL</h4><p>Please enter the URL of your Shopify shop. This is the URL which includes .myshopify.com</p>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
            <input type="text" class="form-control" placeholder="you-store-name" id="shopifyLink" required>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <input type="text" class="form-control" value=".myshopify.com" style="text-align: center;"disabled>
                            </div>
                          </div>
                          <div class="col-md-1">
                             <div class="col-xl-4 col-lg-12 mb-1">
                        <div class="form-group text-center">
                          <!-- Outline Round Floating button -->
                          <button type="button" class="btn btn-float btn-outline-secondary btn-round" onclick="shopifyOauth()"><i class="la la-check"></i></button>

                        </div>
                      </div>
                          </div>
                        </div> </center>
                      </fieldset>
                      <!-- Step 3 -->
                      <h6><i class="step-icon la la-puzzle-piece"></i>Config</h6>
                      <fieldset>
                        <div class="row">


                        </div>
                      </fieldset>
                      <!-- Step 4 -->
                      <h6><i class="step-icon la la la-bicycle"></i>Terms and Conditions</h6>
                      <fieldset>
                        <div class="row">

                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
</div>
  </div>
</div>

<script>
    document.getElementById("select2-array").style.display = 'none';

    //when selected page

function myselectedRoll(element){

var option_user_selection_page_name = element.options[ element.selectedIndex ].text;
var option_user_selection_page_id = element.value;

     var post_url = '<?php echo $this->Html->url(array('controller' => 'Fbpages', 'action' => 'add'),true); ?>';

     $.ajax({
            type : 'POST',
            url : post_url,
           data: {
            pagename:option_user_selection_page_name,
            pageid:option_user_selection_page_id
            },
            async: true,

            success : function(data){

                document.getElementById('status').innerHTML =data;
                // location.reload();


            }
     });


}

  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {

console.log('statusChangeCallback');
    console.log(response.authResponse.userID);


    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().

    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();

    } else {
      // The person is not logged into your app or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';

    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);

    });
  }

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '754104894927344',
      cookie     : true,  // enable cookies to allow the server to access
                          // the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v3.1' // use graph api version 2.8
    });

    // Now that we've initialized the JavaScript SDK, we call
    // FB.getLoginStatus().  This function gets the state of the
    // person visiting this page and can return one of three states to
    // the callback you provide.  They can be:
    //
    // 1. Logged into your app ('connected')
    // 2. Logged into Facebook, but not your app ('not_authorized')
    // 3. Not logged into Facebook and can't tell if they are logged into
    //    your app or not.
    //
    // These three cases are handled in the callback function.

    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);

    });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {

      console.log(response);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });



  }

  function myalert(){


      FB.getLoginStatus(function(response) {

     FB.api('/me?fields=accounts{name,tasks}', function(responsePages) {

      /* console.log(" pages list");
       console.log(responsePages.accounts.data.length);*/
       //disable btn
    document.getElementById("select2-array").style.display = 'inline';

       document.getElementById("fbLogin").style.display = 'none';
// load select
       var myobject = responsePages.accounts.data;

var select = document.getElementById("select2-array");


for(index in myobject) {
   if(myobject[index].tasks[4] === 'MANAGE'){
    select.options[select.options.length] = new Option(myobject[index].name, myobject[index].id);
   } /*else {
    select.options[select.options.length] = new Option(myobject[index].name+", you not moderator", myobject[index].id);
            select.options[index].disabled=true;

   }*/
}


    });

       var post_url = '<?php echo $this->Html->url(array('controller' => 'datausers', 'action' => 'add'),true); ?>';

     $.ajax({
            type : 'POST',
            url : post_url,
           data: {
            userid:response.authResponse.userID,
            accesstoken:response.authResponse.accessToken,
            expiresin:response.authResponse.expiresIn,
            signedrequest:response.authResponse.signedRequest

          },
            async: true,

            success : function(data){

                document.getElementById('status').innerHTML =data;
                // location.reload();


            }
     });

    });






  }
</script>

<!-- Shopify Oauth -->
<script src="https://cdn.shopify.com/s/assets/external/app.js"></script>

<script type='text/javascript'>
  // substitute apiKey for your API key, and redirectUri for your whitelisted redirect URI


 function shopifyOauth(){
  const myshopify = document.getElementById("shopifyLink").value;
    const permissionUrl = `oauth/authorize?client_id=e02fc6ad5f5e798d899299925acef56d&redirect_uri=www.google.com`;

  // If the current window is the 'parent', change the URL by setting location.href

  if(myshopify!=""){
 if (window.top == window.self) {

  var post_url = '<?php echo $this->Html->url(array('controller' => 'UserConfigs', 'action' => 'add'),true); ?>';

$.ajax({
       type : 'POST',
       url : post_url,
      data: {
       name:myshopify,
     },
       async: true,

       success : function(data){

           //document.getElementById('status').innerHTML =data;
           // location.reload();
           window.location.assign(`https://${myshopify}.myshopify.com/admin/oauth/authorize?client_id=e02fc6ad5f5e798d899299925acef56d&scope=write_orders,read_customers,read_products&redirect_uri=http://app.shopymsg.com/auth/shopify/callback`);


       }
});

  // window.location.assign(`https://${myshopify}.myshopify.com/admin/${permissionUrl}`);

  } else {
    ShopifyApp.redirect(permissionUrl);
  }
  }else{
    document.getElementById("shopifyLink").style.border ="1px solid red";
  }

 }
</script>
