

<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
              	     <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller'=>'Pages','action'=>'dashboard')) ?>
                </li>

                <li class="breadcrumb-item active">Users
                </li>
              </ol>
            </div>
          </div>
          <h3 class="content-header-title mb-0">List of Admins </h3>
        </div>

       <div class="content-header-right col-md-6 col-12">
          <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
            <?php echo $this->Html->link($this->Html->tag('i','Add New Admin',array('class'=>'ft-plus icon-left')),array('controller'=>'users','action'=>'add_admin'),array('class'=>'btn btn-info round box-shadow-2 px-2','escape'=>false)) ?>
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
                    <p class="card-text">List admins of this plateform </p>
                    <table class="table table-striped table-bordered column-rendering">
                      <thead>
                        <tr>
                          <th>Fullname</th>
                          <th>Email</th>
                          <th>Phone</th>



                        </tr>
                      </thead>
                      <tbody>
                 	 <?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['fullname']); ?></td>
		<td><?php echo h($user['User']['email']); ?></td>
		<td><?php echo h($user['User']['phone']); ?></td>
	<td>admin</td>



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
