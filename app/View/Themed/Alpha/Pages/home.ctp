<div id="ws_masthd_wrap">
  <div class="container">
        <div class="row">
          <div class="col-sm-12" id="ws_masthd_bgnd">
              <div id="ws_mast_lcol">
                  <div id="ws_mast_txt01">
                                    Find a Personal Loan Today<br />

                    </div>
                    <div class="ws_mast_loantxt">
                    You could qualify for 
                    a loan from $100 - $30,000 <br>
                    and have funds as soon as the next business day. 
                    </div>
                </div>
                <div id="ws_mast_rcol">
                  <div id="ws_formboxp1">
                        <div class="row">
                          <div class="col-sm-12">
                              <div id="ws_formhd">
                                Personal Loans For ALL Credit Types<br />
                          Start Here
                                </div>
                            </div>
                        </div>
                        <form class="form-horizontal" role="form" id="LeadInForm" action="/application" method="post">

                          <div class="form-group">
                            <div class="col-sm-12">
                              <label for="LoanPurpose" class="col-sm-12 control-label" style="color:#fff !important;">Intended Use:</label>
                              <select name="LoanPurpose" id="LoanPurpose" tabindex="1" class="form-control" data-parsley-required="true" 
            >
                                <option value="">-Choose-</option>
                                <option value="auto"<?php echo ($this->Session->read('Application.LoanPurpose') == 'auto') ? ' selected="selected"' : ''; ?>>Auto Repair</option>
                                <option value="debt"<?php echo ($this->Session->read('Application.LoanPurpose') == 'debt') ? ' selected="selected"' : ''; ?>>Debt Consolidation</option>
                                <option value="home"<?php echo ($this->Session->read('Application.LoanPurpose') == 'home') ? ' selected="selected"' : ''; ?>>Home Improvement</option>
                                <option value="major"<?php echo ($this->Session->read('Application.LoanPurpose') == 'major') ? ' selected="selected"' : ''; ?>>Major Purchase</option>
                                <option value="medical"<?php echo ($this->Session->read('Application.LoanPurpose') == 'medical') ? ' selected="selected"' : ''; ?>>Medical</option>
                                <option value="other"<?php echo ($this->Session->read('Application.LoanPurpose') == 'other') ? ' selected="selected"' : ''; ?>>Other</option>

                              </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="CreditRating" class="col-sm-12 control-label" style="color:#fff !important;">Rate your credit:</label>
                            <div class="col-sm-12">
                               <select name="CreditRating" class="form-control" id="CreditRating" tabindex="2" data-parsley-required="true">
                  <option value="">-Select-</option>
                  <option value="excellent" <?php echo ($this->Session->read('Application.CreditRating') == 'excellent') ? 'selected="selected"' : '' ?>>Excellent (760+)</option>
                  <option value="good"<?php echo ($this->Session->read('Application.CreditRating') == 'good') ? 'selected="selected"' : '' ?>>Good (700+)</option>
                  <option value="fair"<?php echo ($this->Session->read('Application.CreditRating') == 'fair') ? 'selected="selected"' : '' ?>>Fair (640+)</option>
                  <option value="poor"<?php echo ($this->Session->read('Application.CreditRating') == 'poor') ? 'selected="selected"' : '' ?>>Poor</option>
                  <option value="unsure"<?php echo ($this->Session->read('Application.CreditRating') == 'unsure') ? 'selected="selected"' : '' ?>>Unsure</option>
                </select>
                            </div>
                          </div>
                          <div class="form-group">
                           <label for="Zip" class="col-sm-12 control-label" style="color:#fff !important;">Zip Code:</label>
                            <div class="col-sm-12">
                              <input name="Zip" type="number" class="form-control" id="Zip" tabindex="3" size="15" maxlength="5" value="<?php echo $this->Session->read('Application.Zip'); ?>" placeholder="Zip Code" 
                data-parsley-required="true" 
                data-parsley-pattern="/^[0-9]{5}?$/"/>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-12">
                            <label for="Military" class="col-sm-12 control-label" style="color:#fff !important;">Are you active Military?</label>
                              <select name="Military" class="form-control" id="Military" tabindex="4" data-parsley-required="true">
                  <option value="true">Yes</option>
                  <option value="false" selected>No</option>
                </select>
                            </div>
                          </div><!--
                          <div class="form-group">
                          <label for="MonthlyNetIncome" class="col-sm-12 control-label" style="color:#fff !important;">Monthly Income:</label>
                            <div class="col-sm-12">
                              <div class="input-group">
                                <div class="input-group-addon">$</div>
                                <input type="number" class="form-control" name="MonthlyNetIncome" id="MonthlyNetIncome" value="<?php echo $this->Session->read('Application.MonthlyNetIncome'); ?>" placeholder="Income" maxlength="5" tabindex="5"
                  data-parsley-required="true" 
                  data-parsley-type="digits" 
                  data-parsley-length="[1,5]"/>
                                <div class="input-group-addon">.00</div>
                              </div>
                            </div>
                          </div>-->
                          <div class="form-group">
                            <div class="col-sm-12">
                              <div class="ckbox ckbox-success white">
                                  <input type="checkbox" value="true" id="Agree" tabindex="6" name="Agree" data-parsley-required="true" <?php if($this->Session->read('Application.Agree')=="true"){ echo "checked";} ?> />
                                  <label
                    for="Agree" >I am / we are over Eighteen (18) years of age,
                    am / are a U.S. resident and am not currently in bankruptcy.
                    I/We have read and agree to the <a
                    href="https://global.leadstudio.com/terms"
                    data-title="Terms and Conditions" data-toggle="lightbox"
                    data-gallery="remoteload">Terms and Conditions</a>, <a
                    href="https://global.leadstudio.com/privacy?site=SecuraLoan"
                    data-title="Privacy Policy" data-toggle="lightbox"
                    data-gallery="remoteload">Privacy Policy</a> and <a
                    href="https://global.leadstudio.com/econsent"
                    data-title="E-consent" data-toggle="lightbox"
                    data-gallery="remoteload">E-consent</a>.
                  </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-12 text-center">
                              <div id="button-app-start" class="btn-lg btn-warning cursor" role="button" id="button">REQUEST NOW <span class="glyphicon glyphicon-chevron-right"></span></div>
                            </div>
                          </div>
                        </form>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="ws_sec3_wrap">
  <div class="container">
      <div class="row">
          <div class="col-sm-12">
              <div id="ws_sec3_txt01">
                A fast, safe and private way to secure the cash you need
                </div>
            </div>
        </div>
    </div>
</div>
<div id="ws_sec4_wrap">
  <div class="container">
      <div class="row">
          <div class="col-sm-4">
              <div class="ws_sec4_icon">
                <?php echo $this->Html->image('ltl_icon_profile.png', array('alt'=>'SecuraLoan', 'class'=>'img-responsive', 'width'=>'154', 'height'=>'154', 'url'=>'/')); ?>
                </div>
                <div class="ws_sec4_icontxt">
                1. Create Your Account
              </div>
            </div>
          <div class="col-sm-4">
              <div class="ws_sec4_icon">
                <?php echo $this->Html->image('ltl_icon_match.png', array('alt'=>'SecuraLoan', 'class'=>'img-responsive', 'width'=>'154', 'height'=>'154', 'url'=>'/')); ?>
                </div>
                <div class="ws_sec4_icontxt">
                2. Get Connected
              </div>
            </div>
          <div class="col-sm-4">
              <div class="ws_sec4_icon">
                <?php echo $this->Html->image('ltl_icon_cash.png', array('alt'=>'SecuraLoan', 'class'=>'img-responsive', 'width'=>'154', 'height'=>'154', 'url'=>'/')); ?>
                </div>
                <div class="ws_sec4_icontxt">
                3. Get Approval Decision
              </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
  <div class="ltl_section_block">
      <div class="ltl_col_text">
          <div class="ltl_col_text_hd">Get a Great Personal Loan</div>
            <div class="ltl_col_text_subhd">Don’t drive to a bank and fill out tons of paperwork only to wait weeks for an underwriting decision. Get Approval Decision Now!</div>
            <div class="ltl_col_text_body">With our loan system, it’s easy to create your personal account in minutes. Then, we will show your loan profile to our network of lenders without you having to do anything else. Multiple lenders will review your application, and it’s fast, secure and extremely private.  Just pick the loan amount that is right for you, connect with your lender right online by being redirected to the lenders offer page automatically where all the terms, fees, and disclosures are given to you upfront. Generally the whole process only takes minutes from start to finish, and usually the loan proceeds are automatically deposited right into your bank account.</div>
        </div>
        <div class="ltl_col_img">
          <?php echo $this->Html->image('ltl_family.jpg', array('alt'=>'SecuraLoan', 'class'=>'img-responsive', 'width'=>'324', 'height'=>'215', 'url'=>'/')); ?>
          
        </div>
  </div>
  <div class="ltl_section_block">
      <div class="ltl_col_img">
        <?php echo $this->Html->image('ltl_woman_laptop.jpg', array('alt'=>'SecuraLoan', 'class'=>'img-responsive', 'width'=>'321', 'height'=>'214', 'url'=>'/')); ?>
      </div>
        <div class="ltl_col_text">
          <div class="ltl_col_text_hd">This is how we make it simple</div>
            <div class="ltl_col_text_subhd">This website is a totally <strong>FREE</strong> service, connecting you with a wide array of lenders that deliver loan proceeds directly into your bank account, <strong>FAST</strong>.</div>
            <div class="ltl_col_text_body">Simply fill out a few easy questions one time. Then we do all the work for you by submitting your profile to our network of lenders. Within minutes, your new lender will connect with you and offer you their product. These products range from Installment loans to Short term personal loans. Installment loans are fixed rate loans that have longer terms with better interest rates and fees. Because of the better terms, installment loans usually require better credit history to qualify. Short term loans usually have higher interest rates, but they can be super quick and easy to qualify for. Short term loans can help you to avoid late fees and penalties that you might otherwise incur if you did not have the cash to pay your other obligations on time. The good news about our service is that in all cases, you will be given all the terms and fee disclosures UPRFONT before you obligate yourself to anything. If you don’t like the terms, the pricing, or any aspect of the offer, there is no commitment on your part to accept the deal and you won’t be charged anything.</div>
        </div>
    </div>
    <div class="ltl_section_block">
      <div class="ltl_cta_icon">
        <?php echo $this->Html->image('ltl_icon_cta.png', array('alt'=>'SecuraLoan', 'class'=>'img-responsive', 'width'=>'70', 'height'=>'90', 'url'=>'/')); ?>
        
      </div>
      <div class="ltl_cta_txt">Find out how much cash you qualify for!</div>
     <!-- <div class="ltl_cta_btn"><a class="btn btn-warning btn-lg" href="pg2.html" role="button">Get Started Now <span class="glyphicon glyphicon-arrow-right"></span></a></div>-->
    </div>
    <div class="ltl_section_block">
        <div class="row clearfix" id="ltl_txtbox_row">
            <div class="col-md-4 col-sm-4">
                <div class="ltl_txtbox">
                    <div class="ltl_txtbox_hd">Why Use Us?</div>
                    <div class="ltl_txtbox_body">It's Fast and Free - There's No lines, No hassles, No upfront fees. You can usually have your cash deposited right into your account!</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="ltl_txtbox">
                    <div class="ltl_txtbox_hd">Easy Online Process</div>
                    <div class="ltl_txtbox_body">It’s Easy – Just complete one simple form and we do all the work sending it to multiple lenders.</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="ltl_txtbox">
                    <div class="ltl_txtbox_hd">Safe and Secure</div>
                    <div class="ltl_txtbox_body">It’s Safe – We never store your sensitive information after your live session. Everything is encrypted for your safety.</div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 text-center" id="ltl_tagline">
            We Serve All Credit Types – Loans are available even with less than perfect credit!
            </div>
        </div>
    </div>
</div>