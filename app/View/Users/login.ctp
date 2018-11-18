

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
                    <span>Please Sign Up</span>
                  </h6>
                </div>
   <?php echo $this->Form->create('User'); ?>

                <div class="card-content">
                  <div class="card-body">
                    <div class="form-horizontal">

                      <fieldset class="form-group position-relative has-icon-right">

                        <?php echo $this->Form->input('email',array('class'=>'form-control input-lg','label'=>false,'placeholder'=>'Email','required','tabindex'=>1)) ?>
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                        <div class="help-block font-small-3"></div>
                      </fieldset>

                 <fieldset class="form-group position-relative has-icon-right">

                        <?php echo $this->Form->input('password',array('class'=>'form-control input-lg','label'=>false,'placeholder'=>'Password','required','tabindex'=>1)) ?>
                        <div class="form-control-position">
                          <i class="ft-lock"></i>
                        </div>
                        <div class="help-block font-small-3"></div>
                      </fieldset>


                      <div class="row mb-1">
                        <div class="col-4 col-sm-3 col-md-3">
                          <fieldset>
                            <input type="checkbox" id="remember-me" class="chk-remember">
                            <label for="remember-me"> Let me connected</label>
                          </fieldset>
                        </div>

                      </div>
                      <div class="row">
                        <div class="col-12 col-sm-6 col-md-6">
                          <?php echo $this->Html->link('Register',array('controller'=>'users','action'=>'add'),array('class'=>'btn btn-info btn-lg btn-block')) ?>

                        </div>
                        <div class="col-12 col-sm-6 col-md-6">
                          <button type="submit" class="btn btn-danger btn-lg btn-block"><i class="ft-unlock"></i> login</button>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php echo $this->Form->input('role_id',array('type'=>'hidden','label'=>false,'value'=>'1')) ?>
                <?php echo $this->Form->input('password_recp',array('type'=>'hidden','label'=>false)) ?>
            </form>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <br><br>
  <br><br>
