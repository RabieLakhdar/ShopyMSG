
<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
              	     <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller'=>'Pages','action'=>'dashboard')) ?>
                </li>

                   <li class="breadcrumb-item"><?php echo $this->Html->link('Config', array('controller'=>'revenues','action'=>'index')) ?>
                </li>
             
                <li class="breadcrumb-item active">Add new
                </li>
              </ol>
            </div>
          </div>
          <h3 class="content-header-title mb-0">Add new data for Revenues</h3>
        </div>
     
      </div>

       <div class="content-body">


     <div class="col-xl-6 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Insert new data</h4>
                </div>
<?php echo $this->Form->create('Revenue'); ?>

                <div class="card-block">
                  <div class="card-body">
                    <fieldset class="form-group position-relative has-icon-left">
                      <?php echo $this->Form->input('name',array('class'=>'form-control round','label'=>false)) ?>
                      <div class="form-control-position">
                        <i class="icon-plus warning"></i>
                      </div>
                   	
                    </fieldset>
                     <div class="col-md-4 text-center mb-2">
                        <button type="submit" class="btn btn-primary width-200 buttonAnimation" data-animation="rubberBand">Add</button>
                      </div>
                  </div>
            </form>     
                      
              

                </div>

                 
            </div>

       </div>

      </div>
  </div>