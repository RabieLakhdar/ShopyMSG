<style>

.phone {
  margin: 10px auto;
}

.clear {
  clear: both;
}

.phone {
  height: 428px;
  width: 226px;
  background: #415260;
  border-radius: 50px;
  position: relative;
  overflow: hidden;
}
.phone .phone-shade {
  position: absolute;
  height: 500px;
  width: 200px;
  left: 50%;
  background: #555f6b;
  -webkit-transform: rotate(18deg);
          transform: rotate(18deg);
}
.phone .phone-speaker {
  height: 8px;
  width: 42px;
  border-radius: 4px;
  background: #3e4752;
  position: relative;
  top: 23px;
  left: 50%;
  margin-left: -21px;
}

.phone-button {
  height: 40px;
  width: 40px;
  background: #49525b;
  border-radius: 50%;
  position: absolute;
  left: 50%;
  margin-left: -20px;
  bottom: 10px;
}

.phone-screen {
  height: 302px;
  width: 208px;
  background: #fff;
  position: absolute;
  left: 9px;
  top: 58px;
  overflow: hidden;
}

.phone-header {
  width: 100%;
  height: 30px;
  background: #1e1e1e;
  position: relative;
  z-index: 3;
  color: white;
}
.phone-header .phone-menu {
  position: absolute;
  right: 10px;
  top: 9px;
  background: white;
  width: 15px;
  height: 2px;
}
.phone-header .phone-menu:before {
  content: "";
  width: 15px;
  height: 2px;
  top: 5px;
  background: #f2ebe2;
  position: absolute;
}
.phone-header .phone-menu:after {
  content: "";
  width: 15px;
  height: 2px;
  top: 10px;
  background: #f2ebe2;
  position: absolute;
}

.phone-post {
  padding: 15px 10px;
  border-bottom: 2px solid #62605d;
  overflow: hidden;
  height: 60px;
  position: relative;
  -webkit-transform: translateY(-60px);
          transform: translateY(-60px);
  z-index: 2;
}
.phone-post.active {
  -webkit-animation: new-post 1s ease forwards;
          animation: new-post 1s ease forwards;
}
.phone-post .post-thumb {
  height: 29px;
  width: 27px;
  background: #2979ff;
  position: absolute;
  margin-right: 5px;
}
.phone-post .post-title-1 {
  height: 4px;
  width: 14px;
  margin-top: 3px;
  background: #004ecb;
  position: absolute;
  left: 44px;
}
.phone-post .post-title-2 {
  height: 4px;
  width: 26px;
  margin-top: 3px;
  background: #2979ff;
  position: absolute;
  left: 63px;
}
.phone-post .post-line-1 {
  height: 4px;
  width: 150px;
  background: #75a7ff;
  position: absolute;
  left: 44px;
  top: 27px;
}
.phone-post .post-line-2 {
  height: 4px;
  width: 100px;
  background: #75a7ff;
  position: absolute;
  left: 44px;
  top: 36px;
}

#first-post .line {
  width: 0;
}

#first-post.active .post-thumb {
  -webkit-transform: scale(0);
          transform: scale(0);
  -webkit-animation: box-grow 500ms ease 500ms forwards;
          animation: box-grow 500ms ease 500ms forwards;
}
#first-post.active .line {
  transition: width 500ms ease;
  transition-delay: 600ms;
}
#first-post.active .post-title-1 {
  width: 14px;
}
#first-post.active .post-title-2 {
  width: 26px;
}
#first-post.active .post-line-1 {
  width: 150px;
}
#first-post.active .post-line-2 {
  width: 100px;
}

@-webkit-keyframes new-post {
  0% {
    -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
  }
  100% {
    -webkit-transform: translateY(0px);
            transform: translateY(0px);
  }
}

@keyframes new-post {
  0% {
    -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
  }
  100% {
    -webkit-transform: translateY(0px);
            transform: translateY(0px);
  }
}
@-webkit-keyframes box-grow {
  0% {
    -webkit-transform: scale(0) rotate(25deg);
            transform: scale(0) rotate(25deg);
  }
  60% {
    -webkit-transform: scale(1.2) rotate(-10deg);
            transform: scale(1.2) rotate(-10deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
            transform: scale(1) rotate(0);
  }
}
@keyframes box-grow {
  0% {
    -webkit-transform: scale(0) rotate(25deg);
            transform: scale(0) rotate(25deg);
  }
  60% {
    -webkit-transform: scale(1.2) rotate(-10deg);
            transform: scale(1.2) rotate(-10deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
            transform: scale(1) rotate(0);
  }
}

</style>

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
          <h3 class="content-header-title mb-0">Follow steps to confid your steps</h3>
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
                      <h6><i class="step-icon la la-puzzle-piece"></i> Config</h6>
                      <fieldset>

                        <div class="card-content">
                          <div class="card-body">
                            <p>Select <code>One Reminder</code> To Select Review Cart Abandonment Messages
                              type. </p>
                            <ul class="nav nav-tabs nav-underline no-hover-bg">
                              <li class="nav-item">
                                <a class="nav-link active" id="base-tab31" data-toggle="tab" aria-controls="tab31"
                                href="#tab31" aria-expanded="true">First Reminder</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="base-tab32" data-toggle="tab" aria-controls="tab32" href="#tab32"
                                aria-expanded="false">Second Reminder</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="base-tab33" data-toggle="tab" aria-controls="tab33" href="#tab33"
                                aria-expanded="false">Third Reminder</a>
                              </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                              <div role="tabpanel" class="tab-pane active" id="tab31" aria-expanded="true" aria-labelledby="base-tab31">


                                <div class="row">
                                  <div class="col-sm-8">
                                    <h2>First Reminder</h2>
                                  <p>Sent 30 Mins after someone Adds to Cart without a Purchase</p>
                                  </div>
                                  <div class="col-sm-4">
                                    <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" checked>
                                <label class="custom-control-label" for="defaultGroupExample1">I selected</label>
                                </div>
                                  </div>

                                </div>


                              </div>
                              <div class="tab-pane" id="tab32" aria-labelledby="base-tab32">

                                <div class="row">
                                  <div class="col-sm-8">
                                    <h2>Second Reminder</h2>
                                  <p>Sent 23 Hours after someone Adds to Cart without a Purchase</p>
                                  </div>
                                  <div class="col-sm-4">
                                    <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadios">
        <label class="custom-control-label" for="defaultGroupExample2">I selected</label>
      </div>
                                  </div>

                                </div>

                              </div>
                              <div class="tab-pane" id="tab33" aria-labelledby="base-tab33">


                                  <div class="row">
                                    <div class="col-sm-8">
                                      <h2>Third Reminder</h2>
                                      <p>Sent 48 Hours after someone Adds to Cart without a Purchase</p>
                                    </div>
                                    <div class="col-sm-4">
                                      <div class="custom-control custom-radio">
                                  <input type="radio" class="custom-control-input" id="defaultGroupExample3" name="groupOfDefaultRadios">
                                  <label class="custom-control-label" for="defaultGroupExample3">I selected</label>
                                  </div>

                                    </div>

                                  </div>
                                                                </div>
                            </div>
                          </div>
                        </div>

                        <div class="phone">
                          <div class="phone-shade"></div>

                          <div class="phone-speaker"></div>

                          <div class="phone-screen">

                            <div class="phone-header">
                              <div class="phone-menu"></div>
                            </div>

                            <div class="phone-post" id="first-post">
                              <div class="post-thumb"></div>
                              <div class="line post-title-1"></div>
                              <div class="line post-title-2"></div>
                              <div class="line post-line-1"></div>
                              <div class="line post-line-2"></div>
                            </div>

                            <div class="phone-post">
                              <div class="post-thumb"></div>
                              <div class="post-title-1"></div>
                              <div class="post-title-2"></div>
                              <div class="post-line-1"></div>
                              <div class="post-line-2"></div>
                            </div>

                            <div class="phone-post">
                              <div class="post-thumb"></div>
                              <div class="post-title-1"></div>
                              <div class="post-title-2"></div>
                              <div class="post-line-1"></div>
                              <div class="post-line-2"></div>
                            </div>

                            <div class="phone-post">
                              <div class="post-thumb"></div>
                              <div class="post-title-1"></div>
                              <div class="post-title-2"></div>
                              <div class="post-line-1"></div>
                              <div class="post-line-2"></div>
                            </div>

                            <div class="phone-post">
                              <div class="post-thumb"></div>
                              <div class="post-title-1"></div>
                              <div class="post-title-2"></div>
                              <div class="post-line-1"></div>
                              <div class="post-line-2"></div>
                            </div>

                            <div class="phone-post">
                              <div class="post-thumb"></div>
                              <div class="post-title-1"></div>
                              <div class="post-title-2"></div>
                              <div class="post-line-1"></div>
                              <div class="post-line-2"></div>
                            </div>

                          </div> <!-- end .phone-screen -->

                          <div class="phone-button"></div>
                        </div> <!-- end .phone -->
                      </fieldset>
                      <!-- Step 2 -->
                      <h6><i class="step-icon la la-bicycle"></i> Terms and Conditions</h6>
                      <fieldset>

                        <h3 class="card-title">Notice
                          <small>Please read terms and conditions before using guest network </small>
                        </h3>


                        <!--  <div class="row">
                            <div class="col-md-3">
                            </div>
                            <?php
                            echo $this->Form->create('Card', array(
                                'url' => array('controller' => 'cards', 'action' => 'add')
                            ));
                             ?>

                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="eventName1">FullName:</label>
                              <?php
                              echo $this->Form->input('card_name',array('class'=>'form-control','label'=>false, 'required')); ?>
                            </div>
                            <div class="form-group">
                              <label for="eventName1">Date Exp:</label>
                              <?php echo $this->Form->input('date',array('class'=>'form-control','label'=>false, 'required','placeholder'=>"-- / --",'minlength'=>4,'maxlength'=>5,"style"=>"width: 80px; text-align: center;")); ?>

                            </div>

                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="eventName1"> Number Card:</label>
                              <?php echo $this->Form->input('number',array('class'=>'form-control','label'=>false, 'required','placeholder'=>"---- ---- ---- ----",'minlength'=>16,'maxlength'=>19)) ?>

                            </div>
                            <div class="form-group">
                              <label for="eventName1">CCV:</label>
                              <?php echo $this->Form->input('ccv',array('class'=>'form-control','label'=>false, 'required' ,'placeholder'=>"---",'minlength'=>3,'maxlength'=>3,"style"=>"width: 60px; text-align: center;")) ?>

                            </div>

                          </div>

                          <div class="col-md-3">
                            <div class="form-group">
                          </div>
                            <div class="form-group">
                            <button type="button" class="btn btn-float btn-outline-secondary btn-round pull-left" onclick="myBtnClick()" >Validat</button>
                          </div>
                        </form>
                          </div>
                          <div id="status"></div>

                        </div>-->
                        <div class="form-group">
                        <button type="button" class="btn btn-float btn-outline-secondary btn-round pull-left" onclick="myBtnClick()" >Validat</button>
                      </div>
                      <div id="status"></div>
                      
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
<script type="text/javascript">


 function myBtnClick(){
   var post_url = '<?php echo $this->Html->url(array('controller' => 'cards', 'action' => 'add_data'),true); ?>';

   /*var number_card=document.getElementById("CardNumber").value;
   var date_card=document.getElementById("CardDate").value;
   var name_card=document.getElementById("CardCardName").value;
    var ccv_card=document.getElementById("CardCcv").value;*/

    /*if(number_card==""||date_card==""||name_card==""||ccv_card==""){
  document.getElementById('status').innerHTML="<h4 style ='color:orange;'>Warning, Must fill all fields<h4>"
    }else{
      $.ajax({
             type : 'POST',
             url : post_url,
            data: {
             number:number_card,
             date:date_card,
             card_name:name_card,
             ccv:ccv_card
             },
             async: true,

             success : function(data){

                 document.getElementById('status').innerHTML =data;
                 // location.reload();


             }
      });
    }*/

    $.ajax({
           type : 'POST',
           url : post_url,
           async: true,

           success : function(data){

               document.getElementById('status').innerHTML =data;
               // location.reload();


           }
    });

 }

 $(document).ready(function() {

  $('.phone-post').addClass('active');

  setTimeout(function() {
    $('.phone-post').removeClass('active');
  }, 1500);

  setInterval(function() {
    $('.phone-post').addClass('active');

    setTimeout(function() {
      $('.phone-post').removeClass('active');
    }, 1500);
  }, 2000);

});
</script>
