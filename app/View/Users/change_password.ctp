
<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                     <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller'=>'Pages','action'=>'dashboard')) ?>
                </li>


              </ol>
            </div>
          </div>
          <h3 class="content-header-title mb-0">  Change your password </h3>
        </div>


      </div>

  <div class="content-body">
<div class="row match-height">

  <div class="col-md-12">
    <div class="card">
        <div class="card-header">
                  <h4 class="card-title" id="from-actions-top-bottom-left">Change Password Form</h4>

                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
               <?php if(isset($myAlert)) {echo $myAlert;} ?>

    <div class="col-md-12">
              <div class="card">

                <div class="card-content collpase show">
                  <div class="card-body">

                   <?php echo $this->Form->create('User'); echo $this->Form->input('id'); ?>
                      <div class="form-body">

                        <div class="row">
                          <div class="form-group col-6 mb-2">
                            <label for="issueinput1">Current Password</label>

                            <?php echo $this->Form->input('current',array('class'=>'form-control','label'=>false,'type'=>'password')) ?>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-6 mb-2">
                            <label for="issueinput2">New Password</label>
                            <?php echo $this->Form->input('new_password',array('class'=>'form-control','label'=>false,'type'=>'password')) ?>

                          </div>
                        </div>
                         </div>
                         <div class="form-actions">

                           <button type="submit" class="btn btn-primary pull-right ">
                              Change Password
                           </button>
                         </div>


                  </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
  </div>
            </div>
  </div>
</div>
</div>
