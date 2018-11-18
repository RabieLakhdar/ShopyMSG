
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 <div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0 pb-0">
                  <div class="card-title text-center">

             

                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span style="font-size: 15px">Try <?php echo $get_title_app['Dynamique']['titile'] ?> Free for 15 days</span>
                  </h6>
                </div>
   <?php echo $this->Form->create('User'); ?>

                <div class="card-content">
                  <div class="card-body">
                    <div class="form-horizontal">

                      <fieldset class="form-group position-relative has-icon-right">

                        <?php echo $this->Form->input('fullname',array('class'=>'form-control input-lg','label'=>false,'placeholder'=>'Fullname','required','tabindex'=>1)) ?>
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                        <div class="help-block font-small-3"></div>
                      </fieldset>


                            <fieldset class="form-group position-relative has-icon-right">

                          <?php echo $this->Form->input('email',array('placeholder'=>'Email','class'=>'form-control input-lg','required','label'=>false,'tabindex'=>2)) ?>
                            <div class="form-control-position">
                              <i class="ft-mail"></i>
                            </div>
                          </fieldset>
                          <div id="div_email"></div>


                          <fieldset class="form-group position-relative has-icon-right">
                          <?php echo $this->Form->input('password',array('placeholder'=>'Password','class'=>'form-control input-lg','required','label'=>false,'tabindex'=>3)) ?>

                            <div class="form-control-position">
                              <i class="la la-key"></i>
                            </div>
                          </fieldset>






                          <div class="row ">
                               <div class="col-12 col-sm-6 col-md-6">
                          <fieldset class="form-group position-relative has-icon-right">

                          <?php echo $this->Form->input('phone',array('placeholder'=>'Phone','class'=>'form-control input-lg','required','label'=>false,'tabindex'=>4)) ?>
                            <div class="form-control-position">
                              <i class="ft-phone-call"></i>
                            </div>
                          </fieldset>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6">
                          <fieldset class="form-group position-relative has-icon-right">
                          <?php echo $this->Form->input('company_name',array('placeholder'=>'Company','class'=>'form-control input-lg','required','label'=>false,'tabindex'=>5)) ?>

                            <div class="form-control-position">
                              <i class="ft-shield"></i>
                            </div>
                          </fieldset>
                        </div>

                      </div>

                         <fieldset class="form-group position-relative has-icon-right">

                        <?php echo $this->Form->input('revenue_id',array('class'=>'form-control input-lg','empty'=>'Annual Revenue?','required','label'=>false,'tabindex'=>6)) ?>
                        <div class="form-control-position">
                          <i class="ft-crosshair"></i>
                        </div>
                        <div class="help-block font-small-3"></div>
                      </fieldset>
                   <fieldset class="form-group position-relative has-icon-right">

                        <?php echo $this->Form->input('about_id',array('class'=>'form-control input-lg','empty'=>'How did you hear about us?','required','label'=>false,'tabindex'=>7)) ?>
                        <div class="form-control-position">
                          <i class="ft-users"></i>
                        </div>
                        <div class="help-block font-small-3"></div>
                      </fieldset>

                       <fieldset class="form-group position-relative has-icon-right">

                        <?php echo $this->Form->input('provide_detail',array('class'=>'form-control input-lg','placeholder'=>'Please provide details...','label'=>false,'tabindex'=>7)) ?>
                        <div class="form-control-position">
                          <i class="ft-alert-triangle"></i>
                        </div>
                        <div class="help-block font-small-3"></div>
                      </fieldset>

                      <div class="row mb-1">
                        <div class="col-4 col-sm-3 col-md-3">
                          <fieldset>
                            <input type="checkbox" id="remember-me" class="chk-remember" required>
                            <label for="remember-me"> I Agree</label>
                          </fieldset>
                          <?php echo $this->Form->input('role_id',array('type'=>'hidden','label'=>false,'value'=>'1')) ?>
                <?php echo $this->Form->input('password_recp',array('type'=>'hidden','label'=>false)) ?>
                        </div>
                        <div class="col-8 col-sm-9 col-md-9">
                          <p class="font-small-3">By clicking Register, you agree to the <a href="#" data-toggle="modal"
                            data-target="#t_and_c_m">Terms and Conditions</a> set
                            out by this site, including our Cookie Use.</p>
                        </div>
                      </div>
                      <center>

                          <button type="submit" class="btn btn-info btn-lg btn-block"> Start Free Trial</button>

            </form>

                      </center>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <br><br>
  <br><br>


<script type="text/javascript">

$(document).ready(function(){

     $("#UserEmail").focusout(function(){



 var post_url = '<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'email_verif'),true); ?>';

     $.ajax({
            type : 'POST',
            url : post_url,
           data: {
            email:$('#UserEmail').val()
          },
            async: true,

            success : function(data){

                $('#div_email').html(data);

            }
     });


});

});
          </script>
