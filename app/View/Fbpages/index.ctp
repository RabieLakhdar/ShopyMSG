
<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
              	     <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller'=>'Pages','action'=>'dashboard')) ?>
                </li>
                <li class="breadcrumb-item active">Config FaceBook Page
                </li>
              </ol>
            </div>
          </div>
          <h3 class="content-header-title mb-0">FaceBook page data</h3>
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
                    <p class="card-text">You can see detail about your Facebook page </p>
                    <table class="table table-striped table-bordered column-rendering">
                      <thead>
                        <tr>
                          <th>PageID</th>
                          <th>PageName</th>
                          <th>Created</th>


                        </tr>
                      </thead>
                      <tbody>
                 	<?php foreach ($fbpages as $fbpage): ?>
	<tr>
		<td><?php echo h($fbpage['Fbpage']['pageid']); ?>&nbsp;</td>
		<td><?php echo h($fbpage['Fbpage']['pagename']); ?>&nbsp;</td>
		<td><?php echo date("d-M-Y",strtotime($fbpage['Fbpage']['created'])); ?>&nbsp;</td>
		<td>
		</td>


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
