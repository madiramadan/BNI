<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a0c0e56fc70c251"></script> 
<style>
.perlindungan_detail_kanan p{line-height:22px !important;}
.box-produk .ket-produk{line-height:24px !important;padding-bottom:20px;}
.box-produk .kolom-produk{padding-right:2%;width:100%;min-height:auto !important;}
.label-produk{
	font-size:16px!important;
}
</style>
				<?php
        $img = base_url().'uploads/product/';
        $img2 = base_url().'uploads/img/';
        if(file_exists("./uploads/img/".$val['image'])) $img=$img2;
        $file = base_url().'uploads/brosur/';
		$file2 = base_url().'uploads/product/';

        if(!file_exists("./uploads/brosur/".$val['brosur']))
		{
			//echo "<span style='display:none'>File Not Exists in Brocure</span>";
			$file=$img;
		} 
        elseif(!file_exists("./uploads/product/".$val['brosur']) && !file_exists("./uploads/brosur/".$val['brosur']))
		{
			//echo "<span style='display:none'>File Not Exists in Img</span>";
			$file=base_url().'uploads/img/';
		} 

		//echo "<span style='display:none'>$file</span>";
				?>
        <section class="section-top desktop">
        	<div class="bg-top-blog-detail" style="background-image:url('<?php echo $img.$val['image'];?>');">
        		<div class="blog-detail-head">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-12 text-center">
	                      <div class="judul"><?php echo $val['title'.getLang()];?></div>
	                      <div class="info"><?php echo $val['category'.getLang()];?></div>
	                    </div>
	                </div> 
	            </div>
	          </div>
          </div>
        </section>
        <section class="section-top mobile">
        	<div class="bg-top-managemen">
        		<img src="<?php echo $img.$val['image_mobile'];?>" width="100%">
          </div>
          <div class="col-xs-12">
	          <div class="text-center" style="margin-top:20px;">
		          <div class="judul" style="font-size:24px;line-height:26px;color:#F7941E;font-weight:bold;margin-bottom:20px;text-shadow:none;"><?php echo $val['title'.getLang()];?></div>
			      </div>
			    </div>
        </section>

        <section class="you-can-help">
        	<div class="container">
              <div class="row">
                  <div class="col-xl-12 col-lg-12">
                      <div class="you-can-help__left">
                          <div class="row">
                          	<!-- Kolom Kiri -->
			                  	  <div class="col-md-3 perlindungan_detail_kiri">
			                  	  	<div class="box-left-detail" rel="1">
							                	<div>
							                		<div class="title_detail_prod aktif">
							                			<?php echo $val['title'.getLang()];?>
							                			<i class="fa fa-angle-right"></i>
							                		</div>
							                	</div>
							                	<div>
							                		<div class="title_detail_prod">
							                			<a href="#keunggulan">
															<?php echo getLang() ? "Superiority" : "Keunggulan" ?>
								                			<i class="fa fa-angle-right"></i>
								                		</a>
							                		</div>
							                	</div>
							                	<div>
							                		<div class="title_detail_prod">
							                			<a href="#manfaat">
															<?php echo getLang() ? "Benefit" : "Manfaat" ?>
								                			<i class="fa fa-angle-right"></i>
								                		</a>
							                		</div>
							                	</div>
							                	<div>
							                		<div class="title_detail_prod">
							                			<a href="#syarat">
															<?php echo getLang() ? "Requirements" : "Syarat" ?>
								                			<i class="fa fa-angle-right"></i>
								                		</a>
							                		</div>
							                	</div>
							                </div>
							                <?php
							                if($val['brosur']) {?>
			                  	  	<div class="clear">
				                    		<a class="btn-blue" href="<?php echo $file2.$val['brosur'];?>" target="_blank"><?php echo getLang() ? "Download Brochure" : "Download Brosur" ?></a>
				                    	</div>
				                    	<?php } else {?>
				                    	<div class="clear">
				                    		<a class="btn-dis3"><?php echo getLang() ? "Download Brochure" : "Download Brosur" ?></a>
				                    	</div>
				                    	<?php }?>
				                    	<?php
							                if($val['title_image_mobile']) {?>
			                  	  	<div class="clear">
				                    		<a class="btn-blue" href="<?php echo base_url().'uploads/product/'.$val['title_image_mobile'];?>" target="_blank"><?php echo getLang() ? "General RIPLAY" : "RIPLAY Umum" ?></a>
				                    	</div>
				                    	<?php }?>

										<?php if($val['category']!='Telemarketing') {?> 
				                    	<div class="clear">
				                    		<a class="btn-orange" href="#formp"><?php echo getLang() ? "I am Interested" : "Saya Tertarik"?></a>
				                    	</div>
										<?php }?>
							<!--<div class="clear">
								<?php if($this->uri->segment(4) == 'blife-plan-multi-protection-plus') { ?>
                                                                	<a class="btn-orange" href="https://www.bni-life.co.id/uploads/riplay_umum/RIPLAY-Umum_BLife-Plan-Multi-Protection-Plus.pdf" target="_blank">RIPLAY Umum</a>
								<?php } elseif ($this->uri->segment(4) == 'solusi-pintar') { ?>
									<a class="btn-orange" href="https://www.bni-life.co.id/uploads/riplay_umum/RIPLAY-UMUM-BLife-Solusi-Pintar.pdf" target="_blank"> RIPLAY Umum </a>
								<?php } elseif($this->uri->segment(4) == 'solusi-abadi-plus') { ?>
									<a class="btn-orange" href="https://www.bni-life.co.id/uploads/riplay_umum/RIPLAY-UMUM-BLife-Solusi-Abadi-Plus.pdf" target="_blank"> RIPLAY Umum </a>
								<?php } ?>
                                                        </div>-->
				                    </div>

				                    <!-- Kolom Kanan -->
				                    <div class="col-md-9 col-xs-12 perlindungan_detail_kanan">
				                    	<div class="box-produk">
				                    		<h2><?php echo getLang() ? "Why" : "Mengapa"?> <?php echo $val['title'.getLang()];?></h2>
				                    		<?php echo $val['description'.getLang()];?>
				                    		<div class="step" id="keunggulan"></div>
				                    	</div>
				                    	<!-- Keunggulan -->
				                    	<?php
				                    	$q=GetAll("product_unggulan", array("id_product"=> "where/".$val['id'],'is_publish'=>'where/1','is_delete'=>'where/0','id'=>'order/desc'));
				                    	if($q->num_rows() > 0) {?>
					                    	<div class="box-produk">
					                    		<h2><?php echo getLang() ? "Program Advantage" : "Keunggulan Program"?></h2>
					                    		<?php
					                    		foreach($q->result_array() as $r) {?>
					                    			<div class="kolom-produk desktop">
						                    			<div class="label-produk"><?php echo $r['title'.getLang()];?></div>
						                    			<div class="ket-produk"><?php echo $r['description'.getLang()];?></div>
						                    		</div>
					                    			<div class="kolom-produk mobile" style="margin-bottom:0px!important;font-size:16px!important;">
						                    			<div class="label-produk" style="font-size:16px!important;"><?php echo $r['title'.getLang()];?></div>
						                    			<div class="ket-produk" style="font-size:16px!important;"><?php echo $r['description'.getLang()];?></div>
						                    		</div>
					                    		<?php }?>
					                    		<div class="step" id="manfaat"></div>
					                    	</div>
					                    <?php }
					                    ?>
					                    
					                    <!-- Manfaat -->
				                    	<?php
				                    	$q=GetAll("product_manfaat", array("id_product"=> "where/".$val['id'],'is_publish'=>'where/1','is_delete'=>'where/0','id'=>'order/desc'));
				                    	if($q->num_rows() > 0) {?>
					                    	<div class="box-produk">
					                    		<h2><?php echo getLang() ? "Program Benefit" : "Manfaat Program"?></h2>
					                    		<?php
					                    		foreach($q->result_array() as $r) {?>
					                    			<div class="kolom-produk desktop">
						                    			<div class="label-produk"><?php echo $r['title'.getLang()];?></div>
						                    			<div class="ket-produk"><?php echo $r['description'.getLang()];?></div>
						                    		</div>
					                    			<div class="kolom-produk mobile" style="margin-bottom:0px!important;">
						                    			<div class="label-produk"><?php echo $r['title'.getLang()];?></div>
						                    			<div class="ket-produk"><?php echo $r['description'.getLang()];?></div>
						                    		</div>
					                    		<?php }?>
					                    		<div class="step" id="syarat"></div>
					                    	</div>
					                    <?php }
					                    ?>
					                    
					                    <!-- Syarat -->
				                    	<?php
				                    	$q=GetAll("product_syarat", array("id_product"=> "where/".$val['id'],'is_publish'=>'where/1','is_delete'=>'where/0','id'=>'order/desc'));
										echo "<span style='display:none'>".$this->db->last_query()."</span>";
				                    	if($q->num_rows() > 0) {?> 
					                    	<div class="box-produk">
					                    		<h2><?php echo getLang() ? "Membership Requirements" : "Syarat Kepesertaan"?></h2>
					                    		<?php
					                    		foreach($q->result_array() as $r) {?>
					                    			<div class="kolom-produk desktop">
						                    			<div class="label-produk"><?php echo $r['title'.getLang()];?></div>
						                    			<div class="ket-produk"><?php echo 
														$r['description'.getLang()];
														//Strip_tags(word_limiter($r['description'.getLang()],150));
														
														?></div> 
						                    		</div>
					                    			<div class="kolom-produk mobile" style="margin-bottom:0px!important;">
						                    			<div class="label-produk" style="font-size:16px!important;"><?php echo $r['title'.getLang()];?></div>
						                    			<div class="ket-produk" style="padding-bottom:0px!important;font-size:16px!important;"><?php echo 
														$r['description'.getLang()];
														//Strip_tags(word_limiter($r['description'.getLang()],150));
														
														?></div>
						                    		</div>
					                    		<?php }?>
					                    	</div>
					                    <?php }
					                    ?>
				                    </div>
                  				</div>
                      </div>
                  </div>
              </div>
          </div>
        </section>
        
        <section class="you-can-help section-bottom" style="background:#006885;" id="formp">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
			                	<div class="row">
			                			<div class="col-xl-12 text-center">
			                				<div class="col-md-2 desktop"></div>
							                <div class="col-md-8 col-xs-12">
					                			<div class="block-title text-center wow fadeIn" data-wow-delay="50ms">
				                            <h2 style="color:#fff;font-weight:bold;"><?php echo $bhs[143];?></h2>
				                            <p style="color:#fff;"><br><?php echo $bhs[144];?></p>
				                        </div>
				                      </div>
				                      <div class="col-md-2 desktop"></div>
			                      </div>
			                      <div class="col-xl-12 text-center">
			                      	<?php
				                      $pesan = $this->session->flashdata("pesan");
				                      if($pesan) echo "<div class='col-md-12 col-xs-12 text-center'>".$pesan."</div>";
				                      ?>
			                      	<div class="col-md-2 desktop"></div>
							                <div class="col-md-8 col-xs-12">
							                	<form method="POST" action="<?php echo lang_url('perlindungan/submit');?>" class="formz">
									                <input type="hidden" name="id_produk" value="<?php echo $val['id'];?>">
									                <div class="col-md-6 col-xs-12">
									                	<input name="c_nama" placeholder="<?php echo getLang() ? "Name" : "Nama"?>" class="form-control" required>
									                </div>
									                <div class="col-md-6 col-xs-12">
									                	<input name="c_email" placeholder="Email" class="form-control" required>
									                </div>
									                <div class="col-md-6 col-xs-12">
									                	<input name="c_hp" placeholder="<?php echo getLang() ? "Phone Number" : "No HP"?>" class="form-control" required>
									                </div>
									                <div class="col-md-6 col-xs-12">
									                	<input name="c_usia" placeholder="<?php echo getLang() ? "Age" : "Usia"?>" class="form-control" required>
									                </div>
									                <div class="clear"></div>
									                <div class="col-md-12 col-xs-12">
									                	<input name="c_kota" placeholder="<?php echo getLang() ? "City / Regency" : "Kota / Kabupaten"?>" class="form-control" required>
									                </div>
									                <div class="clear"></div>
									                <div class="col-md-12 col-xs-12">
									                	<input name="c_judul" placeholder="Subject" class="form-control" required>
									                </div>
													<div class="col-md-12 col-xs-12" style="display:none;">
									                	<input name="c_sumber" id="c_sumber" placeholder="Sumber" class="form-control" required readonly>
									                </div>
													<div class="col-md-12 col-xs-12" style="display:none;">
									                	<input name="linksumber" id="linksumber" placeholder="Link Sumber" class="form-control" required readonly>
									                </div>
									                <div class="col-md-12 col-xs-12">
									                	<textarea name="c_pesan" rows="6" placeholder="<?php echo getLang() ? "Message" : "Pesan"?>" class="form-control" required></textarea>
									                </div>
									                <div class="col-md-12 col-xs-12">
										                <?php echo $recaptcha; ?>
										            </div>
									                <!-- <div class="col-md-12 col-xs-12">
														<input type="checkbox" required id="chkbx1" name="chkbx1">
														<label for="chkbx1" style="color:white; font-size:12px;"> I certify that i am at least 18 years old and that i agree to the Term and Policies and Privacy Policy. This service is for the U.S. only.</label>
										            </div> -->
													<div class="col-md-12 col-xs-12 text-center">
									                	<br>
									                	<input type="submit" value="Submit" class="btn-blue" style="background:#F7941E !important;margin-top:10px;width:200px;">
									                </div>
									              </form>
							                </div>
							                <div class="col-md-2 desktop"></div>
							              </div>
						            </div>
						        </div>
						    </div>
						</div>
				</section>
				
				<section class="you-can-help">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
			                	<div class="row">
			                			<div class="col-xl-12 text-left">
							                <div class="col-md-6 col-xs-12">
							                	<a href="<?php echo lang_url("formulir");?>">
						                			<div class="box-umum fleft wow fadeInLeft" data-wow-delay="50ms">
							                			<div class="col-md-2 col-xs-5">
						                					<img src="<?php echo base_url();?>assets/images/formulir-klaim.png" width="100%">
						                				</div>
						                				<div class="col-md-10 col-xs-7">
					                            <h4 style="font-weight:bold;"><?php echo getLang() ? "How to Claim Requirements" : "Cara Klaim Persyaratan"?></h4>
					                            <p><?php echo getLang() ? "Find important documents of forms needed to facilitate your service" : "Temukan dokumen atau formulir penting yang dibutuhkan untuk memudahkan pelayanan Anda."?></p>
					                          </div>
					                      	</div>
					                      </a>
				                      </div>
				                      <div class="col-md-6 col-xs-12">
				                      	<a href="<?php echo lang_url("faq");?>">
				                          <div class="box-umum fleft wow fadeInRight" data-wow-delay="50ms">
				                          	<div class="col-md-2 col-xs-5">
					                          	<img src="<?php echo base_url();?>assets/images/faq_new.png" width="100%">
					                          </div>
					                          <div class="col-md-10 col-xs-7">
					                            <h4 style="font-weight:bold;">FAQ</h4>
					                            <p><?php echo getLang() ? "See questions that are frequently asked by our customers, regarding insurance and BNI Life products." : "Lihat pertanyaan-pertanyaan yang sering diajukan oleh nasabah kami, seputar asuransi dan produk BNI Life."?></p>
					                          </div>
					                        </div>
					                      </a>
				                      </div>
			                      </div>
						            </div>
						        </div>
						    </div>
						</div>
				</section>
				
        <section class="perlindungan">
            <div class="container">
                <div class="row">
                		<div class="col-md-4 col-xs-12"><img class="right" src="<?php echo base_url();?>uploads/Bella-Perlindungan-3juli2024.jpg"></div>
                    <div class="col-md-8 col-xs-12 lindungi bella-perlindungan">
                      <div class="judul"><?php echo getLang() ? "What you're looking for doesn't exist?" : "Yang Kamu Cari Tidak Ada?"?><br><?php echo getLang() ? "Ask Bella directly" : "Tanyakan Langsung Ke Bella."?></div>
                      <a class="btn-color ngobrol_billa"><?php echo getLang() ? "Ask Bella" : "Tanya Bella"?></a>
                    </div>
                </div>
            </div>
        </section>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <style>
	        	.brand-one{background:#f15a22;}
	        	.lenna-credit{display:none !important;}
	        	.lenna-main-window[data-v-1f80176f]{right:10% !important;}
	        	.lenna-main-window{bottom:0px !important;width:75% !important;background:url('<?php echo base_url();?>uploads/bg-chat-n.png') no-repeat;background-size:cover;margin-bottom:0px !important;}
	        	.lenna-chat-header,.lenna-register-main,.lenna-credit,.lenna-chat-body,.lenna-footer-container{width:600px !important;margin:auto;position:unset !important;}
	        	.lenna-footer-container{width:100% !important;border-radius:0px !important;}
	        	.lenna-register-main{height:400px !important;}
	        	.lenna-main-window.lenna-rounded-border[data-v-3fa28b9c]{border-radius:10px 10px 0px 0px !important;right:14% !important;}
	        	.lenna-footer-container.lenna-rounded-border[data-v-3fa28b9c]{border-radius:0px !important;}
	        	.lenna-chat-footer{border-radius:0px !important;width:600px;margin:auto;}
	        	.lenna-chat-header{display:none !important;}
	        	.lenna-others .lenna-message-container{left: 38px;position: relative;top: -56px;}
	        	#chatBody,.lenna-register-main{background:rgb(0, 104, 133, 0) !important;height:80vh !important;scrollbar-width: none;}
	        	#lenna-webchat #logo{position:absolute;margin:14px;color:#fff;}
	        	#lenna-webchat #billa{position:absolute;right:0;margin:14px;text-align:right;color:#fff;}
	        	.lenna-message-footer small,.lenna-message-footer.lenna-self small[data-v-eb5a4950]{color:#fff !important;}
	        	.lenna-message-footer.lenna-self div[data-v-eb5a4950]{display:none;}
	        	.lenna-message-head{display:none !important;}
	        	.sc-closed-icon{z-index:100;background:#006885 !important;}
	        	.lenna-footer-container, .lenna-text-input, .lenna-bg-white{background:#fff !important;}
	        	.lenna-chat-action{display:none;}
	        	#lenna-webchat {
						  scrollbar-width: thin;          /* #f7941e "auto" or "thin" */
						  scrollbar-color: #006885 #006885;   /* scroll thumb and track */ 
						  scrollbar-color: transparent;   /* scroll thumb and track */ 
						}
						.lenna-message.lenna-d-flex.lenna-flex-wrap.lenna-self{display:block !important;}
						.lenna-quickbutton-wrapper{width:40% !important;margin-left:32px !important;}
						@media (max-width: 799px) {
							.lenna-main-window[data-v-19f454fc]{width:83% !important;margin:auto !important;margin-bottom:0px !important;margin-right:0px !important;bottom:0px !important;height:85% !important;}
							.lenna-others .lenna-message-content{max-width:80% !important;}
							#chatBody,.lenna-register-main{background:#006885 !important;height:70vh !important;border-radius:10px 10px 0px 0px !important;}
							.lenna-chat-header,.lenna-register-main,.lenna-credit,.lenna-chat-body,.lenna-footer-container{width:100% !important;margin:auto;position:unset !important;}
							.lenna-chat-footer{width:100% !important;}
							.sc-closed-icon{transform:unset;border-radius: 50px !important;width: 30px !important;height: 30px !important;right:30px !important;bottom:78vh !important;padding:0px !important;}
						}
						::-webkit-scrollbar {
						  width: 0px;
						  scrollbar-width: none;
						  background: transparent; 
						}
						::-webkit-scrollbar-track {
						  width: 0px;
						  background: transparent !important; 
						  scrollbar-width: none;
						}					
						::-webkit-scrollbar-thumb {
						  border-radius: 0px;       /* roundness of the scroll thumb */
						  border: 0px solid #006885;
						  width: 0px;
						  background: transparent !important; 
						  scrollbar-width: none;
						}
						.sc-launcher.custom-open-icon.open-image.close-color{right:150px !important;bottom:50px !important;/*10px*/max-height:165px !important;}
						/* New */
						.lenna-others:first-child .lenna-message-content::before{display:none;}
		        .lenna-others:first-child .lenna-message-content::after{display:none;}
		        .lenna-self:last-child .lenna-message-content::before{display:none;}
		        .lenna-self:last-child .lenna-message-content::after{display:none;}
		        .lenna-message-content{border-radius:20px 20px 20px 20px !important;background:#33938b !important;}
		        .lenna-self .lenna-message-content{border-radius:20px 20px 20px 20px !important;background:#33938b !important;}
		        .lenna-others:first-child .lenna-message-content{border-radius:20px 20px 20px 0px !important;background:#33938b !important;}
		        .lenna-self:first-child .lenna-message-content{border-radius:20px 20px 0px 20px !important;background:#fff !important;}
		        .lenna-others .lenna-message-content span, .lenna-others .lenna-message-content .lenna-text-content, 
		        .lenna-others .lenna-message-content .lenna-text-content h2, .lenna-others .lenna-message-content .lenna-text-content h3{color:#fff !important;}
		        .lenna-self .lenna-message-content span{color:#000 !important;}
		        .infinite-status-prompt .lenna-badge{background:#33938b !important;}
		        .lenna-others .lenna-message-footer{margin-top:15px !important;}
		        .lenna-self .lenna-message-footer{margin-top:5px !important;}
		        .lenna-message.lenna-d-flex.lenna-flex-wrap.lenna-self.lenna-custom-flex-wrap{position:relative;top:-44px;}
		        .lenna-others .custom-carousel-content[data-v-0a22f380]{max-width:80% !important;left:22px !important;padding-left:14px !important;}
		        .lenna-quickbutton-wrapper .lenna-quickbutton-item{white-space:normal !important;}
		        @media (min-width: 800px) {
	  	        .lenna-others .lenna-message-content{width:400px !important;max-width:400px !important;}
	  	        .lenna-table[data-v-19ceb552]{width:100% !important;}
	  	        .lenna-custom-table tbody tr td[data-v-19ceb552]:first-child{width:100px !important;max-width:100px !important;}
	  	        .lenna-custom-table tbody tr td[data-v-19ceb552]:nth-child(n+2){width:300px !important;max-width:300px !important;}
		        }
		        /*.mylivechat_inline{bottom:-68px !important;}*/
		        /* Show Live Chat */
		        .mylivechat_inline{bottom:0px !important;}
		        .mylivechat_collapsed{display:none;}
		        .lenna-message-avatar img{width:50px !important;}
				
				#lenna-webchat-bnil {z-index: 99999999;}
				
    
				#lenna-webchat-bnil > #bl-launcher {
					bottom: 50px !important;
					z-index: 999999;
				}
				#lenna-webchat-bnil > div > .lenna-main-window {
					width: 480px !important;
					right: 35px !important;
					bottom: 0 !important;
				}

				#lenna-webchat-bnil > div > .lenna-main-window > .lenna-chat-header {
					display: block !important;
				}

				#lenna-webchat-bnil > div > .lenna-main-window > #logo {
				display: none !important;
				}
				#lenna-webchat-bnil > div > .lenna-main-window > .lenna-footer-container > .lenna-chat-footer {
				width: 100% !important;
				}
				#lenna-self-animated-0 {
				background: #33938b !important
				}			

				@media not all and (min-width: 640px) {
				#lenna-webchat-bnil > div > .lenna-main-window {
				width: 100% !important;
				right: 0 !important;
				bottom: 0 !important;
				}
				}
				
				#lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-self > div:nth-child(2) > div {
				  background-color: transparent !important;
				  border-radius: 24px !important;
				}
				
				#lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-others > div:nth-child(2) > div:not(:nth-child(2)) {
				  background-color: #f7941d !important;
				  left: 22px !important; 
				}

				#lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-self > div:nth-child(2) > div > div > span {
				  color: #000 !important;
				  line-height: 16px !important;
				}

				#lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-others[type="bot"] > .lenna-custom-carousel + .lenna-message-container > .lenna-carousel-wrapper > .custom-carousel-content  {
				 padding: 0 !important;
				 max-width: 100% !important;
				}
				
				@supports (-webkit-touch-callout: none) {
				  #lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-others[type="bot"] > .lenna-custom-carousel + .lenna-message-container > .lenna-carousel-wrapper > .custom-carousel-content {
					padding-bottom: 4px !important;
				  }
				}
				
				#lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-others[type="bot"] > .lenna-custom-carousel + .lenna-message-container > .custom-carousel-content > .lenna-carousel-container:last-child {
				 margin-right: 0 !important;
				}
				
				#lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-others[type="bot"] > .lenna-custom-carousel + .lenna-message-container > .lenna-carousel-wrapper > .custom-carousel-content > .lenna-carousel-container:not(last-child) {
				 margin-right: 6px !important;
				}
				
				#lenna-webchat > div > #main-window > .lenna-footer-container > lenna-chat-footer > div:nth-child(3) > div > .lenna-chat-action {
				  display: none;
				}
				
				
				/* header chat */
				#lenna-webchat-bnil > div > .lenna-main-window > .lenna-chat-header {
					width: 100% !important;
				}


				/* time deliver */
				#lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-others > div:nth-child(2) > div:nth-child(2) > small {
				  color: #000 !important;
				  margin-left: 16px !important;
				}
				
				
				/* chat window */
				#lenna-webchat > div > .lenna-main-window {
					height: 80vh !important;
				}
				
				/* register page */
				#lenna-webchat-bnil > div > #main-window > .lenna-register-main {
					height: /*calc((100vh - 250px) - 180px)*/ 52.5vh !important;
					width: 100% !important;
					border-radius: 0 !important;
				}
				
				/* chat body */
				#lenna-webchat-bnil > div > #main-window > #chatBody {
					height: 67vh !important;
					border-radius: 0 !important;
					width: 100% !important;
				}
				
				/* carousel image */
				#lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-others[type="bot"] > .lenna-custom-carousel + .lenna-message-container > .custom-carousel-content > .lenna-carousel-container > .lenna-container-carousel-img > img {
					height: 70px !important
				}
				
				#lenna-webchat-bnil > div > #main-window > #banner-image-header {
					height: 10vh !important;
				}
				
				/* carousel title */
				#lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-others[type="bot"] > .lenna-custom-carousel + .lenna-message-container > .lenna-carousel-wrapper > .custom-carousel-content > .lenna-carousel-container > .lenna-card-body > p {
					text-align: center !important;
				}
				
				/* carousel width */
				#lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-others[type="bot"] > .lenna-custom-carousel + .lenna-message-container > .lenna-carousel-wrapper > .custom-carousel-content > .lenna-carousel-container {
					min-width: 170px !important;
				}
				
				#lenna-webchat-bnil > div > #main-window > .lenna-banner-image-register {
					border-top-left-radius: 8px;
					border-top-right-radius: 8px;
					height: 30vh !important;
				}
				
				#lenna-webchat-bnil > div > #main-window > .lenna-register-main > div:nth-child(2) > label {
					font-weight: normal !important;
				}
				
				#lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-others > div:nth-child(2) > div > .lenna-text-content > p > ul {
					padding-left: 20px;
				}
				
				#lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-others:last-child {
					margin-bottom: -30px !important;
				}
				
				#lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-others[type="bot"] > .lenna-custom-carousel + .lenna-message-container > .lenna-carousel-wrapper > div {
					background-color: transparent !important;
					margin: 0 !important;
					width: 100% !important;
					margin-bottom: -3px !important;
				}
				
				#lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-others[type="bot"] > .lenna-custom-carousel + .lenna-message-container > .lenna-carousel-wrapper {
					left: 30px !important;
					position: relative;
					border-radius: 8px;
					width: 83.5%;
				}
				#lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > div > div {
					top: -20px !important;
					left: 12px !important;
				}
				
				#lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-others[type="user_platform"] > div:nth-child(2) > div:not(:nth-child(3)) {
				  background-color: #f7941d !important;
				  left: -34px !important; 
				  top: 53px !important;
				  padding: 0 !important;
				  overflow: hidden !important;
				}
				
				#lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-others[type="user_platform"] {
					margin-bottom: 10px !important;
				}
				
				#lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-others[type="user_platform"] > div:nth-child(2) > div:nth-child(3) {
				  position: relative !important;
				  top: 55px !important;
				  background-color: transparent !important;
				  left: -36px !important;
				}
			
				#lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-others[type="user_platform"] > div:nth-child(2) > div:nth-child(3) > small {
					color: #000 !important;
					display: flex !important;
				}
				
				#lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-others[type="user_platform"] > div:nth-child(2) > div:nth-child(2) > div {
					background-color: transparent !important;
					padding: 10px !important;
				}
				
				#lenna-webchat-bnil > #bl-launcher > p  {
					display: none !important;
					opacity: 0 !important;
				}
				
				#lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-others[type="user_platform"] > div:nth-child(2) > div:nth-child(2) > div > div {
					line-break: strict !important;
				}
				
				#lenna-webchat > div > div img {
					max-width: 220px !important;
				}
	        </style>
	        
				<div class="icon__sticky-chat">
            <div id="MyLiveChatContainer"></div>
        </div> 
        
        <style>
				.icon__sticky-chat {
				  display: none;/*inline-block;*/
				  position: fixed;
				  bottom: 180px;
				  right: -20px;
				  text-align: center;
				  z-index: 5;
				}
				@media (max-width: 799px) {
					.icon__sticky-chat {bottom:110px;}
				}
				#MyLiveChatScriptButton{height:46px !important;}
				</style>

        <script type="text/javascript">
        $(document).ready(function() {
			var newurl = window.location.href;
			var arr = newurl.split('/')[7];
			
			var link1 = newurl.split('/')[4];
			var link2 = newurl.split('/')[5];
			var link3 = newurl.split('/')[6];
			var link4 = newurl.split('/')[7];
			var separator = "/";

			var llinkthankyoupage = link1 + separator + link2 + separator + link3 + separator + link4;
			
			var newvaluesumber = "";

			if(arr == "bnilife")
			{
				newvaluesumber = "Website BNI Life";
			}
			else if(arr == "iklan")
			{
				newvaluesumber = "Iklan";
			}
			else
			{
				newvaluesumber = arr;
			}

			$('#c_sumber').val(newvaluesumber);
			$('#linksumber').val(llinkthankyoupage);

            $(document).on('click', '#MyLiveChatScriptButton', function() {
            if (typeof("MyLiveChat")!="undefined") {
                if (!MyLiveChat.HasReadyAgents) {
                $('.mylivechat_offline_name').hide();
                $('.mylivechat_offline_email').hide();
                $('.mylivechat_offline_oauth').hide();
                $('.mylivechat_offline_enquiry').hide();
                $('.mylivechat_offline_submit').hide();
                }
            }
            })
        });
        </script>
        <script>
      	/* Chat Bot */
		
	    	var lennawebchat1 = document.createElement('script'); 
				lennawebchat1.src = "https://livechat.bni-life.co.id:444/webchat/lenna-init.js";
				var app1 = document.createElement('script');
				app1.src = "https://livechat.bni-life.co.id:444/webchat/app.js";
				document.head.prepend(lennawebchat1);
				document.head.prepend(app1);
				lennawebchat1.onload = function () {
					LennaWebchatInit('mbk5ez','penRe7')
				};
		
		/*
				var lennawebchat = document.createElement('script'); 
				lennawebchat.src = "https://platform.bni-life.co.id/webchat/lenna-init.js";
		    	var app = document.createElement('script');
		    	app.src = "https://platform.bni-life.co.id/webchat/app.js";
		    	/*lennawebchat.src = "https://app.lenna.ai/webchat/lenna-init.js";
		    	var app = document.createElement('script');
		    	app.src = "https://app.lenna.ai/webchat/app.js";
		    	document.head.prepend(lennawebchat);
		    	document.head.prepend(app);
		    	lennawebchat.onload = function () {
		    		LennaWebchatInit('rb2Gjd');
		    	};
			*/
			
		    	/* End Chat Bot */
		    	$(".closez").click(function(){
						$("#BoxLiveChat").hide();
						$(".livechat").show();
					});
		    	
					$(".ngobrol_billa").click(function(){
						$(".icon__sticky-chat").hide();
						$(".livechat").hide();
						$(".nav-billa").hide();
						$(".lenna-main-window").slideDown(500);
						$(".sc-launcher").hide();
						$(".sc-closed-icon").show();
						if($("#box-chat-overlay").length == 0) {
							$("#lenna-webchat").append("<div id='box-chat-overlay' style='width:100%;height:"+$(document).height()+"px;top:0;background:rgba(0,0,0,0.9);position:absolute;z-index:-1;'></div>");
							//$(".lenna-main-window").append("<div id='billa' class='desktop'><img src='"+logoz+"' width='100'></div>");
							$(".lenna-main-window").append("<div id='logo' class='desktop'><img src='"+logo_billa+"' width='70'><br>BNI Life Insurance Assistant</div>");
							$(".lenna-icon-mic").parent().attr("style","display:none;");
							$(".lenna-icon-send").parent().attr("style","display:none;");
							$(".lenna-text-input").attr("style","background:#fff !important;");
						} else $("#box-chat-overlay").attr("style","width:100%;height:"+$(document).height()+"px;top:0;background:rgba(0,0,0,0.9);position:absolute;z-index: -1;");
						$(".sc-closed-icon").click(function(){
							$(".lenna-main-window").hide();
							$("#box-chat-overlay").attr("style","background:none;");
							$(".header-navigation").attr("style","opacity:1 !important;");
							$("section").attr("style","opacity:1 !important;");
							$(".sc-launcher").show();
							$(".sc-closed-icon").hide();
							$(".icon__sticky-chat").show();
							$(".livechat").show();
							$(".nav-billa").show();
						});
					});
					function waitForElm(selector) {
						return new Promise(resolve => {
							if (document.querySelector(selector)) {
								return resolve(document.querySelector(selector));
							}

							const observer = new MutationObserver(mutations => {
								if (document.querySelector(selector)) {
									observer.disconnect();
									resolve(document.querySelector(selector));
								}
							});

							// If you get "parameter 1 is not of type 'Node'" error, see https://stackoverflow.com/a/77855838/492336
							observer.observe(document.body, {
								childList: true,
								subtree: true
							});
						});
					}
					
					waitForElm("#lenna-webchat-bnil > #bl-launcher > #main-window > #chatBody").then(function() {
						$('.lenna-banner-image-register').attr('style', 'display:none !important')
					})
				
				myChat = setInterval(chatxx, 1000);
					var logoz = "https://bni-life.co.id/assets/images/footer-logo.png";
					var logo_billa = "https://bni-life.co.id/assets/images/billa_chat_new.png";
					function chatxx() {
						$(".mylivechat_inline").show();
						$(".livechat").show();
						if($(".sc-launcher").length == 0) {
							//alert("S");
						} else {
							$("#MyLiveChatScriptButton").attr("src","https://bni-life.co.id/assets/images/livec1.png");
							$("#MyLiveChatScriptButton").attr("onmouseover","hover(this);");
							$("#MyLiveChatScriptButton").attr("onmouseout","unhover(this);");
							$(".icon__sticky-chat").show();
							$(".livechat").show();
							var isRegister = $('.lenna-register-main');
							console.log('LAUNE__', isRegister?.length)
							if (isRegister?.length) {
								console.log('BANNER')
								$('.lenna-banner-image-register').attr('style', 'display:block !important')
							} else {
								console.log('NO BANNER')
								$('.lenna-banner-image-register').attr('style', 'display:none !important')
							}
							if ($("#lenna-webchat-bnil").find("button[type='submit']")?.length) {
								$("#lenna-webchat-bnil").on('click', function() {
									
									if (localStorage.getItem('webchat_user_bnil')) {
										$('.lenna-banner-image-register').attr('style', 'display:none !important')
									} else {
										$('.lenna-banner-image-register').attr('style', 'display:block !important')
									}
								})
							}
							$(".sc-launcher").click(function(){
								console.log("clicskd !!!");
								//$(".mylivechat_inline").hide();
								$(".mylivechat_inline").show();
								$(".livechat").hide();
								$(".icon__sticky-chat").hide();
								//alert("SS");
								if($("#box-chat-overlay").length == 0) {
									$("#lenna-webchat").append("<div id='box-chat-overlay' style='width:100%;height:"+$(document).height()+"px;top:0;background:rgba(0,0,0,0.9);position:absolute;z-index:-1;'></div>");
									//$(".lenna-main-window").append("<div id='billa' class='desktop'><img src='"+logoz+"' width='100'></div>");
									$(".lenna-main-window").append("<div id='logo' class='desktop'><img src='"+logo_billa+"' width='70'><br>BNI Life Insurance Assistant</div>");
									$(".lenna-icon-mic").parent().attr("style","display:none;");
									$(".lenna-icon-send").parent().attr("style","display:none;");
									$(".lenna-text-input").attr("style","background:#fff !important;");
								} else $("#box-chat-overlay").attr("style","width:100%;height:"+$(document).height()+"px;top:0;background:rgba(0,0,0,0.9);position:absolute;z-index:-1");
								$(".header-navigation").attr("style","opacity:0 !important;");
								$("section").attr("style","opacity:0.5 !important;");
								$(".lenna-main-window")[0].slideDown(500);
							});
							$(".sc-closed-icon, .lenna-close-chat").click(function(){
								//alert("Sd");
								$("#box-chat-overlay").attr("style","background:none;");
								$(".header-navigation").attr("style","opacity:1 !important;");
								$("section").attr("style","opacity:1 !important;");
								$("#sectionhome").attr("style","opacity:1 !important; margin-top:5%;height:76%!important;");
								$(".mylivechat_inline").show();
								$(".livechat").show();
								$(".icon__sticky-chat").show();
							});
							clearInterval(myChat);
						}
					}
				function hover(element) {
				  element.setAttribute('src', '<?php echo base_url();?>assets/images/livec2.png');
				  $(".icon__sticky-chat").css("right","-5px");
				}
				
				function unhover(element) {
				  element.setAttribute('src', '<?php echo base_url();?>assets/images/livec1.png');
				  $(".icon__sticky-chat").css("right","-20px");
				}
				</script>
