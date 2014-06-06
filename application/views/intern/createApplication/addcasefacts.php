<div id='casefacts_form' class="container">

    <div class="row">
        <div class="col-sm-2 control-group">
            <div class="controls">
                <center> <h5> <b> Application Form No. </b></h5> </center>
            </div>
        </div>

        <div class="col-sm-1 control-group">
            <div class="controls" style='margin-top:2px;'>
                <h5>
                    <input type="text" class="form-control date-picker" id="appnumber" name="appnumber" value="<?= $appnumber ?>" style='display:none;'> <?= $appnumber ?>
                </h5>
            </div>
        </div>

        <div class="col-sm-1 control-group">
            <div class="controls" style='margin-top:2px; font-size: 20px;'>
            </div>
        </div>
    </div><br>

    <div class="row">

        <div class="col-sm-7 control-group"></div>

        <div class="col-sm-2 control-group">
            <div class="controls" style='text-align:right;'>
                <h5> <b>Interview Date &nbsp;&nbsp;&nbsp; </b></h5>
            </div>
        </div>

        <div class="col-sm-2 control-group">
            <div class="controls">
                <div class="input-group date">
                    <span class="input-group-addon"><i class="icon-calendar"></i></span>
                    <input type="text" class="form-control date-picker" id="appinterviewdate" name="appinterviewdate" data-date-format="yyyy-mm-dd" value="<?php echo $datenow; ?>">
                </div>
            </div>
        </div>

        <br><br><br>

        <div class="col-sm-2 control-group">
            <div class="controls">
                <center> <h5> <b> Client Name <span class="glyphicon glyphicon-asterisk"></span> </b> </h5> </center>
            </div>
        </div>
        <div class="col-sm-3 control-group">
            <div class="controls">
                <select id="appclient" name="appclient" class="form-control">
                    <?php foreach ($clientlist as $row) : ?>
                        <option value="<?= $row->personID ?>" <?php if ($row->personID == $this->session->userdata('newclientid')) echo 'selected'; ?> >
                            <?= $row->lastname ?>, <?= $row->firstname ?> <?php if ($row->middlename != '' || $row->middlename != NULL) echo substr($row->middlename, 0, 1) . '.'; ?>
                        </option><?php endforeach; ?>
                </select>
            </div>
        </div>

        <br> <br>

        <div class="col-sm-2 control-group">
            <div class="controls">
                <center> <h5> <b> Stage <span class="glyphicon glyphicon-asterisk"></span></b></h5> </center>
            </div>
        </div>

        <div class="col-sm-3 control-group">
            <div class="controls">
                <select id="appstage" name="appstage" class="form-control">
                    <option value='1'>New</option>
                    <option value='2'>Preliminary Investigation</option><!-- complainant respondent  -->
                    <option value='3'>Pre-Trial</option>
                    <option value='4'>Trial Court</option> <!-- plaintiff accused -->
                </select>
            </div>
        </div>    

        <div class='col-sm-1'></div>

        <div class="col-sm-2 control-group">
            <div class="controls">
                <center> <h5> <b> Client Type <span class="glyphicon glyphicon-asterisk"></span> </b></h5> </center>
            </div>
        </div>

        <div class="col-sm-3 control-group">
            <div class="controls">
                <select id="appclienttype" name="appclienttype" class="form-control">
                    <option value='8'>Complainant</option>
                    <option value='9'>Respondent</option>
                </select> 
            </div>
        </div>


        <br><br>


        <div class="col-sm-2 control-group">
            <div class="controls">
                <center> <h5> <b> Forum </b> </h5> </center>
            </div>
        </div>

        <div class="col-sm-3 control-group">
            <div class="controls">
                <select id="appforum" name="appforum" class="form-control">
                    <option value='-'>-</option>
                    <option value='Barangay'>Barangay</option>
                    <option value='Department of Justice'>Department of Justice</option>
                    <option value='Regional Trial Court'>Regional Trial Court</option>
                    <option value='Metropolitan Trial Court'>Metropolitan Trial Court</option> 
                    <option value='Court of Appeals'>Court of Appeals</option> 
                    <option value='Court of Tax'>Court of Tax</option>
                    <option value='Ombudsman'>Ombudsman</option>
                    <option value='Sandiganbayan'>Sandiganbayan</option>
                </select>
            </div>
        </div>


        <div class='col-sm-1'></div>

        <div class="col-sm-2 control-group">
            <div class="controls">
                <center> <h5> <b> Case No. </b></h5> </center>
            </div>
        </div>

        <div class="col-sm-3 control-group">
            <div class="controls">
                <?php echo form_input(array('id' => 'appcaseno', 'name' => 'appcaseno', 'type' => 'text', 'class' => 'form-control')); ?>
            </div>
        </div>

        <br><br>

        <div class="col-sm-2 control-group">
            <div class="controls">
                <center> <h5> <b> Opposing Party </b> </h5> </center>
            </div>
        </div>

        <div class="col-sm-2 control-group">
            <div id='opposingpartydiv' class="controls">
                <select id="appopposing" name="appopposing" class="form-control">
                    <?php foreach ($opposingpartylist as $row) : ?>
                        <?php if ($row->personID != $this->session->userdata('newclientid')) { ?>
                            <option value="<?= $row->personID ?>">
                                <?= $row->lastname ?>, <?= $row->firstname ?> <?php if ($row->middlename != '' || $row->middlename != NULL) echo substr($row->middlename, 0, 1) . '.'; ?>
                            </option>
                        <?php } ?><?php endforeach; ?>
                </select>
            </div>
        </div>


        <div class="col-sm-1 control-group">
            <div class="controls">
                <sup><a class ="btn btn-success pull-left" href="#addOpposingModal" data-toggle="modal" style="margin-top:0px;"> <i class="icon-plus"></i> </a></sup>
            </div>
        </div>
        <br> <br><br>

        <div class="col-sm-2 control-group">
            <div class="controls">
                <center> <h5> <b> Title <span class="glyphicon glyphicon-asterisk"></span> </b> </h5> </center>
            </div>
        </div>

        <div class="col-sm-9 control-group">
            <div class="controls">
                <?php echo form_input(array('id' => 'apptitle', 'name' => 'apptitle', 'type' => 'text', 'class' => 'form-control')); ?>
            </div>
        </div>

        <br> <br>

        <div class="col-sm-2 control-group">
            <div class="controls">
                <center> <h5> <b> Narrative <span class="glyphicon glyphicon-asterisk"></span> </b></h5> </center>
            </div>
        </div>

        <div class="col-sm-9 control-group">
            <div class="controls">
                <?php echo form_textarea(array('id' => 'appnarrative', 'name' => 'appnarrative', 'type' => 'text', 'class' => 'form-control')); ?>
            </div>
        </div>

        <br> <br><br><br><br> <br><br><br><br> <br><br><br><br><br>
    </div>
    <br>

    <div class="row">

        <h4>Incident Details</h4>
        <hr>

        <div class="col-sm-2 control-group">
            <div class="controls">
                <center> <h5> <b> Place of Incident <span class="glyphicon glyphicon-asterisk"></span></b> </h5> </center>
            </div>
        </div>

        <div class="col-sm-6 control-group">
            <div class="controls">
                <?php echo form_input(array('id' => 'appplace', 'name' => 'appplace', 'type' => 'text', 'class' => 'form-control')); ?>
            </div>
        </div>

        <div class="col-sm-3 control-group">
            <div class="controls">
                <select id="appplacecity" name="appplacecity" class="form-control">
                    <option>Caloocan</option>
                    <option>Las Pinas</option>
                    <option>Makati</option>
                    <option>Malabon</option>
                    <option>Mandaluyong</option>
                    <option selected>Manila</option>
                    <option>Marikina</option>
                    <option>Muntinlupa</option>
                    <option>Navotas</option>
                    <option>Paranaque</option>
                    <option>Pasay</option>
                    <option>Pasig</option>
                    <option>Quezon City</option>
                    <option>San Juan</option>
                    <option>Taguig</option>
                    <option>Valenzuela</option>
                </select>
            </div>
        </div>

        <br> <br>

        <div class="col-sm-2 control-group">
            <div class="controls">
                <center> <h5> <b> Date of Incident </b></h5> </center>
            </div>
        </div>

        <div class="col-sm-3 control-group">
            <div class="controls">
                <div class="input-group date">
                    <span class="input-group-addon"><i class="icon-calendar"></i></span>
                    <input type="text" class="form-control date-picker" id="appincidentdate" name="appincidentdate" data-date-format="yyyy-mm-dd" value="<?php echo $datenow; ?>">
                </div>
            </div>
        </div>

        <div class="col-sm-1 control-group">
            <div class="controls">
                <center> <h5> or </h5> </center>
            </div>
        </div>

        <div class="col-sm-5 control-group">
            <div class="controls">
                <?php echo form_input(array('placeholder' => 'Estimated Month - Year', 'id' => 'appincidentdateest', 'name' => 'appincidentdateest', 'type' => 'text', 'class' => 'form-control')); ?>
            </div>
        </div>

        <br> <br>

        <div class="col-sm-2 control-group">
            <div class="controls">
                <center> <h5> <b> Time of Incident </b> </h5> </center>
            </div>
        </div>

        <div class="col-sm-3 control-group">
            <div class="controls">
                <div class="input-group bootstrap-timepicker">
                    <span class="input-group-addon"><i class="icon-time"></i></span>
                    <input type="text" class="form-control timepicker" id="appincidenttime" name="appincidenttime" value="<?php echo $timenow; ?>">
                </div>
            </div>
        </div>

        <div class="col-sm-1 control-group">
            <div class="controls">
                <center> <h5> or </h5> </center>
            </div>
        </div>

        <div class="col-sm-5 control-group">
            <div class="controls">
                <?php echo form_input(array('placeholder' => 'Estimated Time', 'id' => 'appincidenttimeest', 'name' => 'appincidenttimeest', 'type' => 'text', 'class' => 'form-control')); ?>
            </div>
        </div>
    </div>

    <br><br><br>

    <div class="row">

        <h4> &nbsp; Offense</h4>
        <div class="hide"> <h4> Possible Offense</h4> </div>
        <hr>

        <div class="col-lg-5">

            <div class="col-sm-2 control-group">
                <div class="controls">
                    <h5> <center><b>Source</b></center></h5>
                </div>
            </div>

            <div class="form-inline">
                <div class="controls">
                    <center>
                        <label class="radio" for="offenseSource-1">
                            <input type="radio" name="offenseSource" value="Revised Penal Code" onclick="location.href = 'javascript:toggleRPC();';">
                            Revised Penal Code
                        </label>
                        <label class="radio" for="offenseSource-0">
                            <input type="radio" name="offenseSource" value="Special Penal Law"  onclick="location.href = 'javascript:toggleSpecial();';">
                            Special Penal Law
                        </label> &nbsp;
                    </center>
                </div>
            </div>

            <br>

            <div id="caseOffensePenal" style="display: none">

                <div class="col-sm-3 control-group">
                    <div class="controls">
                        <h5> <center><b>Offense</b></center></h5>
                    </div>
                </div>

                <div class="col-sm-6 control-group">
                    <div class="controls">
                        <select id="appoffensepenal" name="appoffensepenal" class="form-control"> 
                            <optgroup label="Penal Code">
                            <optgroup label="&nbsp;&nbsp;&nbsp;Crimes Against Public Order"> 
                                <option>Inciting to rebellion or insurrection</option>
                                <option>Sedition</option>                    
                            </optgroup>
                            <optgroup label="&nbsp;&nbsp;&nbsp;Crimes Against Public Interest">
                                <option>Illegal use of uniforms & insignia</option>
                                <option>Falsification of legislative documents</option>
                                <option>Forgery</option>
                                <option>Offering false testimony in evidence</option>
                                <option>Sedition</option>                    
                            </optgroup>
                            <optgroup label="&nbsp;&nbsp;&nbsp;Crimes Against Persons">
                                <option>Homicide</option>
                                <option>Murder</option>
                                <option>Parricide</option>
                                <option>Rape</option>
                                <option>Serious Physical Injuries</option>							
                                <option>Sexual Assault, Acts of Lasciviousness & Rape</option>
                                <option>Slight Physical Injuries</option>                    
                            </optgroup>
                            <optgroup label="&nbsp;&nbsp;&nbsp;Crimes Against Personal Liberty and Security">
                                <option>Exploitation of minors</option>
                                <option>Kidnapping and Serious Illegal Detention</option>                   
                            </optgroup>
                            <optgroup label="&nbsp;&nbsp;&nbsp;Crimes Against Property">
                                <option>Bouncing Checks</option>  
                                <option>Carnapping</option>
                                <option>Robbery</option>
                                <option>Robbery with Homicide</option>
                                <option>Robbery with Rape</option>
                                <option>Sqindling (Estafa)</option>
                                <option>Theft</option>
                            </optgroup>
                            <optgroup label="&nbsp;&nbsp;&nbsp;Crimes Against Chastity">
                                <option>Acts of Lasciviousness</option>
                                <option>Adultery</option>  
                                <option>Sexual Harrasment</option>
                            </optgroup>
                            <optgroup label="&nbsp;&nbsp;&nbsp;Crimes Against Honor">
                                <option>Libel</option>  
                                <option>Libelous Remarks</option>          	
                                <option>Slander</option>
                            </optgroup>
                            </optgroup> 
                        </select>
                    </div>
                </div>

                <br><br>

                <div class="col-sm-3 control-group">
                    <div class="controls">
                        <h5> <center><b>Offense Stage</b></center></h5>
                    </div>
                </div>

                <div class="col-sm-6 control-group">
                    <div class="controls">
                        <select id="appoffensestagepenal" name="appoffensestagepenal" class="form-control">
                            <option>Attempted</option>
                            <option>Frustrated</option>
                            <option>Consumated</option>
                            <option>N/A</option>
                        </select>
                        <input type="button" id="btnaddoffensepenal" value="Add Offense" class='btn btn-info col-sm-12'/>
                    </div>
                </div>

            </div>

            <div id="caseOffenseSpecial" style="display: none">

                <div class="col-sm-3 control-group">
                    <div class="controls">
                        <h5> <center><b>Offense</b></center></h5>
                    </div>
                </div>

                <div class="col-sm-6 control-group">
                    <div class="controls">
                        <select name="appoffensespecial" id="appoffensespecial" class="form-control">
                            <optgroup label="Special Laws">
                                <option>Anti-Carnapping Act of 1972</option>
                                <option>Anti-Child Pornography Act of 2009</option>
                                <option>Anti-Hazing Law</option>
                                <option>Anti-Photo and Video Voyeurism Act of 2009</option>
                                <option>Anti-Sexual Harrassment Act of 1995</option> 
                                <option>Anti-Violence Against Women and Their Children Act of 2004</option>
                                <option>Anti-Wire Tapping Act</option>
                                <option>Bouncing Checks Law</option>
                                <option>Human Security Act of 2007</option>
                                <option>Illegal Possession of Firearms</option>
                                <option>Juvenile Justice and Welfare Act of 2006</option>
                                <option>Special Protection of Children Against Child Abuse, Exploitation and Discrimination Act</option>
                                <option>The Comprehensive Dangerous Drugs Act of 2002</option>
                            </optgroup>  
                        </select>
                    </div>
                </div>

                <br><br>

                <div class="col-sm-3 control-group">
                    <div class="controls">
                        <h5> <center><b>Offense Stage</b></center></h5>
                    </div>
                </div>

                <div class="col-sm-6 control-group">
                    <div class="controls">
                        <select id="appoffensestagespecial" name="appoffensestagespecial" class="form-control">
                            <option>N/A</option>
                            <option>Attempted</option>
                            <option>Frustrated</option>
                            <option>Consumated</option>
                        </select>
                        <input type="button" id="btnaddoffensespecial" value="Add Offense" class='btn btn-info col-sm-12'/>
                    </div>
                </div>

            </div>

        </div>

        <div id='offensetablediv' class="col-lg-6">
            <table id='offensetable' class="table table-striped table-bordered">
                <tr>
                    <th>Offense</th>
                    <th>Offense Stage</th>
                </tr>
            </table>
        </div>
    </div>

    <br><br>

    <!-- Button -->
    <div class="row">
        <div class="control-group pull-right">
            <label class="control-label" for="submit"></label>
            <div class="controls">
                <input type='button' id='btncasefactsnext' value='Next' class='btn btn-success'>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- START OF ADD LINKED PERSON MODAL -->
        <div class="modal fade" id="addOpposingModal">
            <div class="modal-dialog-evidence">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Add Opposing Party</h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-sm-2 control-group">
                            <div class="controls">
                                <center> <h5><b>Name<span class="glyphicon glyphicon-asterisk"></span></b></h5></center>
                            </div>
                        </div>

                        <div class="col-sm-3 control-group">
                            <div class="controls">
                                <?php echo form_input(array('placeholder' => 'First', 'id' => 'partyFirstName', 'name' => 'partyFirstName', 'type' => 'text', 'class' => 'form-control')); ?>
                            </div> 
                        </div>

                        <div class="col-sm-3 control-group">
                            <div class="controls">
                                <?php echo form_input(array('placeholder' => 'Middle', 'id' => 'partyMiddleName', 'name' => 'partyMiddleName', 'type' => 'text', 'class' => 'form-control')); ?>
                            </div>   
                        </div>

                        <div class="col-sm-3 control-group">
                            <div class="controls">
                                <?php echo form_input(array('placeholder' => 'Last', 'id' => 'partyLastName', 'name' => 'partyLastName', 'type' => 'text', 'class' => 'form-control')); ?>   
                            </div>
                        </div>
                        <br><br>

                        <div class="col-sm-2 control-group">
                            <div class="controls">
                                <center> <h5><b>Address</b></h5> </center>
                            </div>
                        </div>

                        <div class="col-sm-3 control-group">
                            <div class="controls">
                                <?php echo form_input(array('placeholder' => 'House', 'id' => 'partyAddressHouseNo', 'name' => 'partyAddressHouseNo', 'type' => 'text', 'class' => 'form-control')); ?>
                            </div>
                        </div>

                        <div class="col-sm-3 control-group">
                            <div class="controls">
                                <?php echo form_input(array('placeholder' => 'Street', 'id' => 'partyAddressStreet', 'name' => 'partyAddressStreet', 'type' => 'text', 'class' => 'form-control')); ?>
                            </div>
                        </div>

                        <div class="col-sm-3 control-group">
                            <div class="controls">
                                <?php echo form_input(array('placeholder' => 'Area', 'id' => 'partyAddressDistrict', 'name' => 'partyAddressDistrict', 'type' => 'text', 'class' => 'form-control')); ?>
                            </div>
                        </div>

                        <br><br>
                        <div class="col-sm-2 control-group">
                            <div class="controls">
                            </div>
                        </div>
                        <div class="col-sm-3 control-group">
                            <div class="controls">
                                <?php echo form_input(array('placeholder' => 'Town', 'id' => 'partyAddressTown', 'name' => 'partyAddressTown', 'type' => 'text', 'class' => 'form-control')); ?>
                            </div>
                        </div>

                        <div class="col-sm-3 control-group">
                            <div class="controls">
                                <?php echo form_input(array('placeholder' => 'Postal Code', 'id' => 'partyAddressPostalCode', 'name' => 'partyAddressPostalCode', 'type' => 'text', 'class' => 'form-control')); ?>
                            </div>
                        </div>

                        <br><br>

                        <div class="col-sm-2 control-group">
                            <div class="controls">
                                <center> <h5><b>Contact Number</b></h5> </center>
                            </div>
                        </div>

                        <div class="col-sm-3 control-group">
                            <div class="controls">
                                <?php echo form_input(array('placeholder' => 'Home', 'id' => 'partyCNHome', 'name' => 'partyCNHome', 'type' => 'text', 'class' => 'form-control')); ?>
                            </div>
                        </div>

                        <div class="col-sm-3 control-group">
                            <div class="controls">
                                <?php echo form_input(array('placeholder' => 'Office', 'id' => 'partyCNOffice', 'name' => 'partyCNOffice', 'type' => 'text', 'class' => 'form-control')); ?>
                            </div>
                        </div>

                        <div class="col-sm-3 control-group">
                            <div class="controls">
                                <?php echo form_input(array('placeholder' => 'Mobile', 'id' => 'partyCNMobile', 'name' => 'partyCNMobile', 'type' => 'text', 'class' => 'form-control')); ?>
                            </div>
                        </div>

                        <br><br>
                        <br>
                    </div>

                    <div class="modal-footer">
                        <button id='btnaddopposingparty' class="btn btn-success" data-dismiss="modal" aria-hidden="true">Add Opposing Party</button>
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF ADD LINKED PERSON MODAL -->
    </div>

</div>