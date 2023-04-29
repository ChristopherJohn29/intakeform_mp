<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/intakeform.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap');
    </style>
    <title>Mobile Physicians - Intake Form</title>
  </head>
  <body>
    
    <div class="container intake-form">
    <!-- Content here -->
        <div class="text-center"><img src="<?=base_url()?>/assets/PhysicianMedicalGroup_logo.png" width="50%"></div>
        <div class="headline text-center"><h2>HOME VISIT REQUEST</h2></div>
        <div class="section-handler"><small>Fields with <span class="asterisk">*</span> are required.</small></div>
        
        <div>
            
            <form method="POST" action="<?=base_url()?>/IntakeForm/submit">
                <div class="section-handler">
                    <div class="sub-header"><h6><span>Patient Information</span></h6></div>
                    <div class="form-group row">
                        <label for="patientName" class="col-sm-4 col-form-label">Patient Name <span class="asterisk">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-lg" id="patient-name" placeholder="" required name="pi_patient_name">
                            <div class="valid-feedback">Patient Name is required.</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="dateofBIrth" class="col-sm-4 col-form-label">Date of Birth <span class="asterisk">*</span></label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control form-control-lg" id="date-of-birth" placeholder="" required name="pi_dob">
                            <div class="valid-feedback">Date of Birth is required.</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cellPhone" class="col-sm-4 col-form-label">Phone # <span class="asterisk">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-lg" id="phone" name="pi_phone" placeholder="" required>
                            <div class="valid-feedback">Phone # is required.</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="gender" class="col-sm-4 col-form-label">Gender <span class="asterisk">*</span></label>
                        <div class="col-sm-8">
                            <div class="custom-control custom-radio">
                              <input type="radio" id="gender1" name="pi_gender" value="male" class="custom-control-input">
                              <label class="custom-control-label" for="gender1">Male</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="gender2" name="pi_gender" value="female" class="custom-control-input">
                              <label class="custom-control-label" for="gender2">Female</label>
                            </div>
                            <div class="valid-feedback">Gender is required.</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="col-sm-4 col-form-label">Address <span class="asterisk">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-lg" id="date-of-birth" placeholder="" required name="pi_address">
                            <div class="valid-feedback">Address is required.</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="preferredLanguage" class="col-sm-4 col-form-label">Preferred Language</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-lg" id="date-of-birth" placeholder="" name="pi_language">
                        </div>
                    </div>
                </div>
                
                <div class="section-handler">
                    <div class="sub-header"><h6><span>Type of Visit</span></h6></div>
                    <div class="form-group row">
                        <label for="typeofVisit" class="col-sm-4 col-form-label">Type of Visit <span class="asterisk">*</span></label>
                        <div class="col-sm-8">
                            <div class="custom-control custom-radio">
                              <input type="radio" id="tov1" name="tov" value="Home Visit (Physical)" class="custom-control-input">
                              <label class="custom-control-label" for="tov1">Home Visit (Physical)</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="tov2" name="tov" value="Telehealth" class="custom-control-input">
                              <label class="custom-control-label" for="tov2">Telehealth</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="tov3" name="tov" value="Either" class="custom-control-input">
                              <label class="custom-control-label" for="tov3">Either</label>
                            </div>
                            <div class="valid-feedback">Type of Visit is required.</div>
                        </div>
                    </div>
                </div>
                
                <div class="section-handler">
                    <div class="sub-header"><h6><span>Insurance Information</span></h6></div>
                    <div class="form-group row">
                        <label for="medicareID" class="col-sm-4 col-form-label">Medicare part B, Insurance ID# <span class="asterisk">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" required class="form-control form-control-lg" id="date-of-birth" placeholder="" name="ii_medicare">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ssnID" class="col-sm-4 col-form-label">SSN (If MBI is not available)</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-lg" id="date-of-birth" placeholder="" name="ii_ssn">
                        </div>
                    </div>
                </div>
                
                <div class="section-handler">
                    <div class="sub-header"><h6><span>Reason for Visit Request</span></h6></div>
                    <div class="form-group row">
                        <label for="reasonforVisit" class="col-sm-4 col-form-label">Reason for Visit <span class="asterisk">*</span></label>
                        <div class="col-sm-8">
                            <div class="custom-control custom-radio">
                              <input type="radio" id="rfv1" name="rvr_reason_for_visit" value="Follow-up Visit" class="custom-control-input">
                              <label class="custom-control-label" for="rfv1">Follow-up Visit (Recertification)</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="rfv2" name="rvr_reason_for_visit" value="Discharged from Hospital" class="custom-control-input">
                              <label class="custom-control-label" for="rfv2">Discharged from Hospital</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="rfv3" name="rvr_reason_for_visit" value="Referral from Home Health" class="custom-control-input">
                              <label class="custom-control-label" for="rfv3">Referral to Home Health (New Start of Care)</label>
                            </div>

                            <div class="custom-control custom-radio">
                              <input type="radio" id="rfv4" name="rvr_reason_for_visit" value="Transfer of Care" class="custom-control-input">
                              <label class="custom-control-label" for="rfv4">Transfer of Care</label>
                            </div>

                            <div class="custom-control custom-radio">
                              <input type="radio" id="rfv5" name="rvr_reason_for_visit" value="Other Reason" class="custom-control-input">
                              <label class="custom-control-label" for="rfv5">Other Reason</label>
                            </div>
                            
                            <div class="hidden-fields">
                                <div class="form-row" id="discharged-from-hospital" style="display:none;">
                                    <div class="col-md-8 mb-3">
                                        <input type="text" class="form-control form-control-lg" name="rvr_hospital" id="facility-name" placeholder="">
                                        <small class="form-text text-muted">Hospital</small>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <input type="date" class="form-control form-control-lg" name="rvr_date_discharged" id="rvr_date_discharged" placeholder="">
                                        <small class="form-text text-muted">Date Discharged <span class="asterisk">*</span></small>
                                    </div>
                                </div>

                                <div class="form-group" id="other-reason" style="display:none;">
                                    <input type="text" class="form-control form-control-lg" name="rvr_reason_for_visit_request" id="facility-name" placeholder="">
                                    <small class="form-text text-muted">State your reason for visit request here</small>
                                </div>
                            </div>
                            
                            <div class="valid-feedback">Reason for Visit is required.</div>
                        </div>
                        
                    </div>
                    
                    <div class="form-group row">
                        <label for="medicareID" class="col-sm-4 col-form-label">Additional Comments</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="additional-comment" name="rvr_additional_comment" placeholder=""></textarea>
                        </div>
                    </div>
                    
                </div>
                
                <div class="section-handler">
                    <div class="sub-header"><h6><span>Preferred Facility / Home Health Care</span></h6></div>
                    <div class="form-group row">
                        <label for="facilityName" class="col-sm-4 col-form-label">Name of Facility <span class="asterisk">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-lg" id="facility-name" name="pf_name_of_facility" placeholder="" required>
                            <div class="valid-feedback">Facility Name is required.</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="facilityAddress" class="col-sm-4 col-form-label">Address <span class="asterisk">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-lg" id="facility-address" placeholder="" required name="pf_address">
                            <div class="valid-feedback">Facility Address is required.</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="facilityContact" class="col-sm-4 col-form-label">Contact Person <span class="asterisk">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-lg" id="facility-contact" placeholder="" required name="pf_contact_person">
                            <div class="valid-feedback">Contact Person is required.</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="facilityEmail" class="col-sm-4 col-form-label">Email <span class="asterisk">*</span></label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control form-control-lg" id="facility-email" placeholder="" required name="pf_email">
                            <small class="form-text text-muted">We will send your copy of this Home Visit Request in this email</small>
                            <div class="valid-feedback">Email is Required is required.</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="facilityPhone" class="col-sm-4 col-form-label">Phone # <span class="asterisk">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-lg" id="facility-email" placeholder="" required name="pf_phone">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="facilityPhone" class="col-sm-4 col-form-label">Fax #</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-lg" id="facility-email" placeholder="" name="pf_fax">
                        </div>
                    </div>
                </div>
                
                <div class="section-handler">
                    <div class="sub-header"><h6><span>Supervising MD</span></h6></div>
                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">Preferred Supervising MD <span class="asterisk">*</span></label>
                        <div class="col-sm-8">
                            <?php 
                            
                            foreach ($supermd as $key => $value) {
                                ?>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="smd<?=$key?>" name="preferred_smd" class="custom-control-input" value="<?=$value['provider_firstname']?> <?=$value['provider_lastname']?>">
                                    <label class="custom-control-label" for="smd<?=$key?>"><?=$value['provider_firstname']?> <?=$value['provider_lastname']?></label>
                                </div>
                                <?php
                            }
                            
                            ?>
                            
                        </div>
                    </div>
                </div>
                
                <div class="section-handler">
                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8"><button type="submit" class="btn btn-primary btn-lg" >Submit Form</button></div>
                    </div>
                </div>
            </form>
            
        </div>
    </div>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
    jQuery('input[name="rvr_reason_for_visit"]').click(function(){

        if(jQuery('#rfv5').is(':checked')) {
            jQuery('#other-reason').css('display','block');
        } else {
            jQuery('#other-reason').css('display','none');
        }

        if(jQuery('#rfv2').is(':checked')) {
            jQuery('#discharged-from-hospital').css('display','flex');
            jQuery('#rvr_date_discharged').attr('required', 'required');
        } else {
            jQuery('#discharged-from-hospital').css('display','none');
            jQuery('#rvr_date_discharged').removeAttr('required');
        }
    });
</script>

</body>
</html>