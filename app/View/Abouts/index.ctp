 
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
          <h3 class="content-header-title mb-0">List of hear about us source</h3>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
            <?php echo $this->Html->link($this->Html->tag('i','Add New',array('class'=>'ft-plus icon-left')),array('controller'=>'abouts','action'=>'add'),array('class'=>'btn btn-info round box-shadow-2 px-2','escape'=>false)) ?>
          </div>
        </div>
      </div>

  <div class="content-body">
      <section id="column">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Column rendering</h4>
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
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <p class="card-text">You can update or delet data for fetch it on Sign up form. </p>
                    <table class="table table-striped table-bordered column-rendering">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Created</th>
                          <th>Actions</th>
                        
                        </tr>
                      </thead>
                      <tbody>
                 	 <?php foreach ($abouts as $about): ?>
	<tr>
		<td><?php echo h($about['About']['name']); ?>&nbsp;</td>
		<td><?php echo h($about['About']['created']); ?>&nbsp;</td>
		<td>
			 <div class="fonticon-wrap">
                         
                          
                            <?php echo $this->Form->postLink($this->Html->tag('i','',array('class'=>'ft-x-square')), array('action' => 'delete', $about['About']['id']), array('escape'=>false), __('Are you sure you want to delete  %s?', $about['About']['name'])); ?>
                        </div>
		
		</td>
		<td>data</td>

	</tr>
<?php endforeach; ?>


                  
                      </tbody>
             
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
  </div>
</div>
</div>
  

   