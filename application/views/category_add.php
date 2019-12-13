<?php //print_r($databaseData); exit;?>
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
                            <div>Category Add
                                <div class="page-title-subheading">Add new Categories.
                                </div>
                            </div>

                        </div>
                        <div class="page-title-actions">
                          
                          <div class="d-inline-block dropdown">
                                <a href="<?php echo base_url('master/category_list');?>" type="button" class="btn-shadow btn btn-info">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-business-time fa-w-20"></i>
                                    </span>
                                    Go Back
                                </a>     
                            </div>
                        </div> 
                    </div>
                </div>            
               
                <!-- Page Area start -->
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Fill category details :</h5>
                        
                    <div class="error_msg">
                    <?php  
                        echo $this->session->flashdata('success'); 
                        echo $this->session->flashdata('error'); 
                    ?>
                    </div>
                        <?php echo form_open('',array('class'=>'needs-validation','novalidate'=>true)); ?>

                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <?php echo form_label('Category name'); ?>
                                    <?php
                                    $set_category_name = set_value('category_name', isset($databaseData->category_name) ? $databaseData->category_name : '');

                                     echo form_input('category_name',$set_category_name,array('id' => 'validationCustom01', 'class'=>'form-control','placeholder'=>'Category name','required'=>true)); ?>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <?php echo form_label('Category discription'); ?>
                                    <?php 
                                    $set_category_desc = set_value('category_desc', isset($databaseData->category_desc) ? $databaseData->category_desc : '');

                                    echo form_textarea('category_desc',$set_category_desc,array('id' => 'validationCustom02','class'=>'form-control','placeholder'=>'Category discription','required'=>true)); ?>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                             <div class="form-row">   
                                <button class="btn btn-primary" type="submit">Submit </button>
                             </div>
                       
                        <?php echo form_close(); ?>

    
                        <script>
                            // Example starter JavaScript for disabling form submissions if there are invalid fields
                            (function() {
                                'use strict';
                                window.addEventListener('load', function() {
                                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                    var forms = document.getElementsByClassName('needs-validation');
                                    // Loop over them and prevent submission
                                    var validation = Array.prototype.filter.call(forms, function(form) {
                                        form.addEventListener('submit', function(event) {
                                            if (form.checkValidity() === false) {
                                                event.preventDefault();
                                                event.stopPropagation();
                                            }
                                            form.classList.add('was-validated');
                                        }, false);
                                    });
                                }, false);
                            })();
                        </script>
                    </div>
                </div>
                    <!-- Page Area end -->                                          
                </div>
            </div>

             <?php $this->load->view('include/footer'); ?>
        
