<div class="wrapper">
    <div class="step">
		<? require_once(MC_ROOT . '/templates/sections/frontend/step_header.php'); ?>
        <div class="tabs-container wizard-container">
            <div class="tab-content">
                <div class="tab-pane active">
                    <div class="row">
                        <div class="col-md-7 col-md-offset-5">
                            <h2 class="step__title step__title-left padding-top-none">
                            <?= l($ss_tahead) ?>
							</h2>
                            <label class="control-label"><?= l('Please fill up the following fields. This is the most important step as we�ll transact the money to you from this information. Please choose carefully and take clear photos.') ?></label>
                        </div>
                    </div>
                    <form class="simple_form form-horizontal" role="form" id="form-step-01" autocomplete="off" novalidate="novalidate" action="<?= $GLOBALS['ss_fhref'] ?>" accept-charset="UTF-8" method="post" enctype="multipart/form-data">
						<?												
							$ss_eladd=' aria-invalid="false" role="moneyChoose" data-placeholder="false" ';  						
							$ss_cladd='';		//         
							$ss_req=0; 			//  HTML  -    
							
							$ss_tabi=1;
							
							$ss_oarr=[
							1=>'I don`t know',
							2=>'Bank account',
							3=>'Domestic remittance',
							4=>'Payment system'
							];
							
							$ss_lname='How do you want to get money?';
							$ss_phold=l('Please select');
							$ss_fname='HowDoYouWantToGetMoney';
							$ss_rname='application_money_choose_id'; 
							$ss_fval=1;
							
							require(MC_ROOT . '/templates/sections/frontend/step_option.php');							
						?>
						
                        <div class="hidden" data-id="2" role="toggleInput">
						<?
							//  
							
							$ss_eladd=' aria-invalid="false" data-placeholder="false" ';
							$ss_tabi=2;
							
							$ss_oarr=[
							1=>'Other',
							2=>'KBZ Bank',
							3=>'AYA Bank',
							4=>'CB Bank',
							5=>'AGD Bank',
							6=>'Yoma Bank',
							7=>'Innwa Bank',
							8=>'Myanmar Apex Bank',
							9=>'United Amara Bank',
							10=>'Myawaddy',
							11=>'Rural Development Bank',
							12=>'First Private bank',
							];
							
							$ss_lname='Choose your bank here';
							$ss_phold=l('Please select');
							$ss_fname='bank_id';
							$ss_rname=$ss_fname.'_id1'; 
							$ss_fval=1;
							
							require(MC_ROOT . '/templates/sections/frontend/step_option.php'); 

							//   
							
							$ss_eladd=' disabled="disabled" ';  //         											
							$ss_tabi=3;
							
							$ss_lname='Fill your bank account number here';
							$ss_phold='KBZ 0123456789879654';
							$ss_fname='bank_account';
							$ss_rname=$ss_fname.'_id1'; 
							$ss_fval=$user['PaymentWallet'];
							
							require(MC_ROOT . '/templates/sections/frontend/step_string.php'); 
							?>
                        </div>

                        <div class="hidden" data-id="3" role="toggleInput">
							<?
							$ss_tabi=4;
							$ss_lname='Your bank branch name or address here';
							$ss_phold='KBZ bank, Merchant road';
							$ss_fname='bank_account';
							$ss_rname=$ss_fname.'_id2'; 
							$ss_fval=$user['PaymentWallet'];

							require(MC_ROOT . '/templates/sections/frontend/step_string.php'); 
							?>
                        </div>

                        <div class="hidden" data-id="4" role="toggleInput">
							<?
							$ss_tabi=5;
							$ss_lname='Write here your OK$ account number';
							$ss_phold='OK$ 09123456789';
							$ss_fname='bank_account';
							$ss_rname=$ss_fname.'_id3'; 
							$ss_fval=$user['PaymentWallet'];

							require(MC_ROOT . '/templates/sections/frontend/step_string.php'); 
							?>
                        </div>
						<?
						/*
						$ss_eladd='';   		//         						
						$ss_cladd='required ';	//         
						$ss_req=1; 				//  HTML  -    
						
						$ss_lname='NRC Number';
						$ss_phold='12/ThaKaKa(N)000000';
						$ss_fname='UsrMMPersonalID';
						$ss_rname=$ss_fname.'_id'; 
						$ss_fval=$user[$ss_fname];
						$ss_tabi=6;
						require(MC_ROOT . '/templates/sections/frontend/step_string.php');
						*/
						require(MC_ROOT . '/templates/sections/frontend/step_nextbutton.php'); 
                        ?>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>