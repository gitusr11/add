<?php //print_r($category); exit; ?>
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
                            <div>Advertise Add
                                <div class="page-title-subheading">Add new Categories.
                                </div>
                            </div>

                        </div>
                        <div class="page-title-actions">
                          
                          <div class="d-inline-block dropdown">
                                <a href="<?php echo base_url('advertise');?>" type="button" class="btn-shadow btn btn-info">
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
                        <h5 class="card-title">Fill advertise details :</h5>
                        
                    <div class="error_msg">
                    <?php  
                        echo $this->session->flashdata('success'); 
                        echo $this->session->flashdata('error'); 
                    ?>
                    </div>
                        <?php echo form_open('',array('class'=>'needs-validation','novalidate'=>true)); ?>

                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <?php echo form_label('Advertise name'); ?>
                                    <?php
                                    $set_advertise_name = set_value('advertise_name', isset($databaseData->advertise_name) ? $databaseData->advertise_name : '');

                                     echo form_input('advertise_name',$set_advertise_name,array('id' => 'validationCustom01', 'class'=>'form-control','placeholder'=>'Advertise name','required'=>true)); ?>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>

                                    <div class="col-md-4 mb-3">
                                    <?php echo form_label('Category'); ?>
                                    <?php
                                    
                                    $selected = array(3);
                                     echo form_dropdown('category_id',$category,$selected,'class = "form-control" ' ); ?>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>

                                    <div class="col-md-4 mb-3">
                                    <?php echo form_label('Position'); ?>
                                    <?php
                                    
                                    $selected1 = array(3);
                                     echo form_multiselect('position_id[]',$position,$selected1,'class = "form-control"','multiple' ); ?>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <?php echo form_label('Advertise discription'); ?>
                                    <?php 
                                    $set_advertise_desc = set_value('advertise_desc', isset($databaseData->advertise_desc) ? $databaseData->advertise_desc : '');

                                    echo form_textarea('advertise_desc',$set_advertise_desc,array('id' => 'validationCustom02','class'=>'form-control','placeholder'=>'Advertise discription','required'=>true)); ?>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <?php echo form_label('Advertise image'); ?>
                                    <?php
                                    echo form_upload('advertise_media',array('class'=>'form-control','placeholder'=>'Advertise image','required'=>true)); ?>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>

                                <div class="col-md-2 mb-2">
                                    <?php echo form_label('Advertise Status'); ?>
                                    <?php
                                    echo form_checkbox('advertise_status',1,true,array('class'=>'form-control','placeholder'=>'Advertise status')); ?>
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
        
