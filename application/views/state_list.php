  <?php $this->load->view('include/header'); ?>

                <div class="app-main__outer">                    
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-folder icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>State List
                                        <div class="page-title-subheading">List of all States.
                                        </div>
                                    </div>

                                </div>
                                <div class="page-title-actions">
                                  
                                    <div class="d-inline-block dropdown">
                                        <a href="<?php echo base_url('master/state_add');?>" type="button" class="btn-shadow btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Add More
                                        </a>
                                        
                                    </div>
                                </div> 
                            </div>
                        </div>            
                          <div class="col-lg-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">State</h5>
                                        <table class="mb-0 table table-hover">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>State</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($states as $state): ?>
                                            <tr>
                                                <th scope="row"><?= $state->state_id; ?></th>
                                                <td><?= $state->state_name; ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('master/state_add/'.$state->state_id);?>"><i class="pe-7s-pen icon-gradient bg-mean-fruit" title="Edit">
                                                    </i></a> 
                                                    <a class="remove" href="<?php echo base_url('master/state_remove/'.$state->state_id);?>"><i class="pe-7s-trash icon-gradient bg-mean-fruit" title="Remove">
                                                    </i></a> 
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
                    
             <?php $this->load->view('include/footer'); ?>
      
    <script type="text/javascript">
        $(".remove").click(function(){
            if(confirm('Are you sure to remove this record ?'))
            {
                return true;
            }else{
                return false;

            }
        });
    </script>