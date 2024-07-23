<style>
.link_pro{position:absolute;width:100%;text-align:center;bottom:0px;padding:30px 0px 10px;
	background:linear-gradient(0deg, rgba(0, 0, 0, 0.8) 25%, rgba(0, 0, 0, 0.01) 100%);}
.link_pro a{color:#fff !important;}
</style>
        <?php
        $img = base_url().'uploads/product/';
        $imgz = base_url().'uploads/product/';
				$img2 = base_url().'uploads/img/';
        if($id_kat==1) {$id_hero = 16;$cat="individu";}
        else if($id_kat==2) {$id_hero = 17;$cat="kumpulan";}
        else if($id_kat==3) {$id_hero = 18;$cat="syariah";}
        ?>
				<section class="section-top desktop">
        	<div class="bg-top-perlindungan" style="background-image:url('<?php echo base_url()."uploads/".GetHero($id_hero);?>');background-size:100% 100%;background-repeat:no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="csr text-center">                    	
                      <div class="judul"><?php echo $bhs[48];?></div>
                      <div class="info">&nbsp;</div>
                    </div>
                </div>
            </div>
          </div>
        </section>
        <section class="section-top mobile">
        	<div class="col-xs-12 new_hero">
        		<div class="judul"><?php echo $bhs[48];?></div>
			    </div>
			    <div class="bg-top-managemen">
        		<img src="<?php echo base_url()."uploads/".GetHeroMobile($id_hero);?>" width="100%">
          </div>
          <!--<div class="col-xs-12">
	          <div class="text-center" style="margin-top:20px;">
		          <div class="judul jdl_mobile"><?php echo $bhs[48];?></div>
			      </div>
			    </div>-->
        </section>
        <!-- Welcome Two End -->

        <section class="you-can-help perlindungan">
        	<div class="container">
              <div class="row">
                  <div class="col-xl-12 col-lg-12">
                      <div class="you-can-help__left">
	                      	<div class="tab text-center marbot10">
	                      		<?php 
	                      		if(getLang()) $opt_perlin=array("individu"=> "Individual", "kumpulan"=> "Group", "syariah"=> "Sharia");
	                      		else $opt_perlin=array("individu"=> "Individu", "kumpulan"=> "Group", "syariah"=> "Syariah");
                        		echo form_dropdown("perlindungan",$opt_perlin,$cat, "class='protect form-controls mobile dropdown_mobile'");
                        		?>
                        		<div class="desktop">
	                        		<a href="<?php echo lang_url('perlindungan/individu');?>" alt="<?php echo lang_url('perlindungan/individu');?>" class="linktab lin1 <?php echo $id_kat==1 ? "aktif":"";?>" rel="1"><?php echo getLang() ? "Individual" : "Individu";?></a>
	                        		<a href="<?php echo lang_url('perlindungan/kumpulan');?>" alt="<?php echo lang_url('perlindungan/kumpulan');?>" class="linktab lin2 <?php echo $id_kat==2 ? "aktif":"";?>" rel="2"><?php echo getLang() ? "Group" : "Group";?></a>
	                        		<a href="<?php echo lang_url('perlindungan/syariah');?>" alt="<?php echo lang_url('perlindungan/syariah');?>" class="linktab lin3 <?php echo $id_kat==3 ? "aktif":"";?>" rel="3"><?php echo getLang() ? "Sharia" : "Syariah";?></a>
	                        	</div>
                        	</div>
                          <div class="row">
                          	<!--Desktop-->
                  					<div class="col-md-4 desktop">
                  						<?php
                  						if($id_kat==2) $q = GetAll("product_cat",array("id_parent"=> "where/".$id_kat, "id"=> "order/desc", "is_publish"=> "where/1"));
                  						else $q = GetAll("product_cat",array("id_parent"=> "where/".$id_kat, "id"=> "order/asc", "is_publish"=> "where/1"));
                  						foreach($q->result_array() as $k=> $r) {
                  							?>
	                  						<div class="row csrz rsc<?php echo $r['id'];?> <?php echo $r['id']==$flag ? "aktif":"";?>" rel="<?php echo $r['id'];?>" title="<?php echo $r['title'.getLang()];?>">
								                	<div class="col-md-9 col-xs-9">
								                		<div class="title_csr"><?php echo $r['title'.getLang()];?></div>
								                	</div>
								                </div>
								              <?php }
								              ?>
                  					</div>
                  					<!--Mobile-->
                  					<div class="col-md-12 mobile" style="border-bottom:1px solid #DBDBDB;">
                  						<?php
                  						if($id_kat==2) $q = GetAll("product_cat",array("id_parent"=> "where/".$id_kat, "id"=> "order/desc", "is_publish"=> "where/1", "limit"=> "0/3"));
                  						else $q = GetAll("product_cat",array("id_parent"=> "where/".$id_kat, "id"=> "order/asc", "is_publish"=> "where/1", "limit"=> "0/3"));
                  						foreach($q->result_array() as $k=> $r) {
                  							?>
	                  						<div style="padding:8px 16px 0px 2px !important;white-space:nowrap;border:none !important;" class="text-center col-xs-4 float-left csrz rsc<?php echo $r['id'];?> <?php echo $r['id']==$flag ? "aktif":"";?>" rel="<?php echo $r['id'];?>" title="<?php echo $r['title'.getLang()];?>">
								                	<div class="title_csr" style="font-size:14px;"><?php echo $r['title'.getLang()];?></div>
								                </div>
								              <?php }
								              ?>
								              <?php
                  						if($id_kat==2) $q = GetAll("product_cat",array("id_parent"=> "where/".$id_kat, "id"=> "order/desc", "is_publish"=> "where/1", "limit"=> "3/2"));
                  						else $q = GetAll("product_cat",array("id_parent"=> "where/".$id_kat, "id"=> "order/asc", "is_publish"=> "where/1", "limit"=> "3/2"));
                  						if($q->num_rows() > 0) echo "<div class='col-xs-2'>&nbsp;</div>";
                  						foreach($q->result_array() as $k=> $r) {
                  							?>
	                  						<div style="padding:8px 16px 0px 2px !important;white-space:nowrap;border:none !important;" class="text-center col-xs-4 float-left csrz rsc<?php echo $r['id'];?> <?php echo $r['id']==$flag ? "aktif":"";?>" rel="<?php echo $r['id'];?>" title="<?php echo $r['title'.getLang()];?>">
								                	<div class="title_csr" style="font-size:14px;"><?php echo $r['title'.getLang()];?></div>
								                </div>
								              <?php }
								              if($q->num_rows() > 0) echo "<div class='col-xs-2'>&nbsp;</div>";
								              ?>
                  					</div>
                  					<?php
                						if($id_kat==2) $q = GetAll("product_cat",array("id_parent"=> "where/".$id_kat, "id"=> "order/desc", "is_publish"=> "where/1"));
                						else $q = GetAll("product_cat",array("id_parent"=> "where/".$id_kat, "id"=> "order/asc", "is_publish"=> "where/1"));
                						foreach($q->result_array() as $k=> $r) {
                							?>
	                  					<div class="col-md-8 csr-kanan perlin perlindung<?php echo $r['id'];?>" <?php echo $r['id']==$flag ? "" : "style='display:none;'";?>>
	                  						<h1 class="title-perlindungan desktop"><?php echo $r['title'.getLang()];?></h1>
	                  						<h1 class="title-perlindungan text-center mobile" style="color:#006885;"><?php echo $r['title'.getLang()];?></h1>
					                    	<div class="produk_info desktop">
					                    		<?php echo $r['description'.getLang()];?>
					                    	</div>
											<div class="produk_info desktop">
					                    		<h3><?php echo getLang() ? "Product" : "Produk:" ?></h3>
					                    	</div>
								                <div class="row perlindungz">
								                    <div class="col-xl-12 col-xs-12">
								                        <div class="popular-causes__carousel owl-theme owl-carousel">
								                        	<?php
								                        	$qq = GetAll("product",array("id_category"=> "like/-".$r['id']."-", "nourut"=> "order/asc", "is_publish"=> "where/1", "is_delete"=> "where/0"));
								                        	foreach($qq->result_array() as $rr) {
								                        		if(file_exists("./uploads/img/".$rr['image'])) $img=$img2;
								                        		else $img=$imgz;
								                        		?>
								                            <div class="popular-causes__sinlged">
								                                <div class="popular-causes__imgd box-carousel">
								                                		<!--Desktop-->
								                                		<div class="desktop">
									                                		<div class="ov">
									                                			<a style="color:#fff;" href="<?php echo lang_url('perlindungan/'.strtolower(url_title($r['title'])).'/'.$rr['slug'.getLang()].'/bnilife');?>">
										                                			<img src="<?php echo $img.$rr['image'];?>" style="min-height:160px;object-fit:cover;">
										                                		</a>
									                                		</div>
									                                    <div class="label-perlindungan">
									                                       <a href="<?php echo lang_url('perlindungan/'.strtolower(url_title($r['title'])).'/'.$rr['slug'.getLang()].'/bnilife');?>">
									                                       	<?php echo $rr['title'.getLang()];?>
									                                       </a>
									                                    </div>
									                                  </div>
									                                  <!--Mobile-->
									                                  <div class="mobile">
									                                  	<div class="ov">
									                                			<a style="color:#fff;" href="<?php echo lang_url('perlindungan/'.strtolower(url_title($r['title'])).'/'.$rr['slug'.getLang()].'/bnilife');?>">
										                                			<img src="<?php echo $img.$rr['image_mobile'];?>" style="height:250px;object-fit:cover;">
										                                		</a>
										                                		<div class="link_pro">
											                                		<a href="<?php echo lang_url('perlindungan/'.strtolower(url_title($r['title'])).'/'.$rr['slug'.getLang()].'/bnilife');?>">
										                                       	<?php echo $rr['title'.getLang()];?>
										                                       </a>
										                                    </div>
									                                		</div>
									                                  </div>
								                                </div>
								                            </div>
								                          <?php }
								                          ?>
								                        </div>
								                    </div>
								                </div>
								                <div class="produk_info mobile padbot10" style="padding-top:55px;">
					                    		<?php echo $r['description'.getLang()];?>
					                    	</div>
				                    	</div>
				                    	<?php }
				                    ?>
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
                      <div class="judul">
                      	<?php echo getLang() ? "What You Are Looking For Is Not There?" : "Yang Kamu Cari Tidak Ada?";?>
                      	<br>
                      	<?php echo getLang() ? "Let's Chat with Bella" : "Tanyakan Langsung Ke Bella.";?>
                      </div>
                      <a class="btn-color ngobrol_billa"><?php echo getLang() ? "Chat with Bella" : "Tanya Bella";?></a>
                    </div>
                </div>
            </div>
        </section>
        
        <script>
        $(document).ready(function(){	
        	$(".csrz").click(function(){
        		var rel=$(this).attr("rel");
        		$(".csrz").removeClass("aktif");
        		$(".rsc"+rel).addClass("aktif");
        		$(".perlin").hide();
        		$(".perlindung"+rel).fadeIn(300);
        	});
        	
        	$(".linklayanan").click(function(){
						$(".linklayanan").removeClass("aktif");
						$(this).addClass("aktif");
						var rel=$(this).attr("rel");
						$(".perlindungz").fadeOut();
						$(".perlindung"+rel).fadeIn(800);
					});
				});
				</script>
				<!-- Chat bot -->
        <style>
	        	.brand-one{background:#f15a22;}
	        	.footer-widget__explore-list li{padding-bottom:12px !important;line-height:22px;}
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
	        	#lenna-webchat, #chatBody,.lenna-register-main{background:rgb(0, 104, 133, 0) !important;scrollbar-width: none;}
	        	#lenna-webchat #logo{position:absolute;margin:14px;color:#fff;}
	        	#lenna-webchat #billa{position:absolute;right:0;margin:14px;text-align:right;color:#fff;}
	        	.lenna-message-footer small,.lenna-message-footer.lenna-self small[data-v-eb5a4950]{color:#fff !important;}
	        	.lenna-message-footer.lenna-self div[data-v-eb5a4950]{display:none;}
	        	.lenna-message-head{display:none !important;}
	        	.sc-closed-icon{z-index:100;background:#006885 !important;}
	        	.lenna-footer-container, .lenna-text-input, .lenna-bg-white{background:#fff !important;}
	        	/*.lenna-chat-action{display:none;}*/
	        	#lenna-webchat {
						  scrollbar-width: thin;          /* #f7941e "auto" or "thin" */
						  scrollbar-color: #006885 #006885;   /* scroll thumb and track */ 
						  scrollbar-color: transparent;   /* scroll thumb and track */ 
						}
						.lenna-message.lenna-d-flex.lenna-flex-wrap.lenna-self{display:block !important;}
						.lenna-quickbutton-wrapper{width:40% !important;margin-left:32px !important;}
						@media (max-width: 799px) {
							.lenna-main-window[data-v-19f454fc]{width:83% !important;margin:auto !important;margin-bottom:0px !important;margin-right:0px !important;bottom:0px !important;height:85% !important;}
							/*.lenna-others .lenna-message-content{max-width:80% !important;}*/
							#lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-others[type="bot"] > .lenna-custom-carousel + .lenna-message-container > .lenna-carousel-wrapper > div {
								width: 100% !important;
							}
							#lenna-webchat-bnil > div > #main-window > .lenna-banner-image-register {
								border-radius: 0 !important;
							}
							#lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-others[type="user_platform"] > div:nth-child(2) > div > div > span {
								line-height: 100px !important;
							}
							#lenna-webchat-bnil > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-others[type="bot"] > .lenna-custom-carousel + .lenna-message-container > .lenna-carousel-wrapper {max-width: 80% !important}
							#lenna-webchat, #chatBody,.lenna-register-main{background:#006885 !important;height:40vh !important;border-radius:10px 10px 0px 0px !important;}
							.lenna-chat-header,.lenna-register-main,.lenna-credit,.lenna-chat-body,.lenna-footer-container{width:100% !important;margin:auto;position:unset !important;}
							.lenna-chat-footer{width:100% !important;}
							#lenna-webchat, .sc-closed-icon{transform:unset;border-radius: 50px !important;width: 30px !important;height: 30px !important;right:1px !important;bottom:78vh !important;padding:0px !important;}
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
						#lenna-webchat, .sc-closed-icon.custom-open-icon.open-image.close-color{bottom:10px !important;}
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
	  	        #lenna-webchat > div > #main-window > div:nth-child(3) > div:nth-child(3) > span > div > .lenna-others > .lenna-message-content{width:400px !important;max-width:400px !important;}
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
	     
        
        <!--Add the following script at the bottom of the web page (before </body></html>)-->
        <script type="text/javascript">function add_chatinline(){var hccid=13065097;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);} 
        /*add_chatinline();*/ </script>
        <script type="text/javascript">function add_chatbutton(){var hccid=13065097;var nt=document.createElement("script");nt.async=true;nt.src="https://www.mylivechat.com/chatbutton.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
        add_chatbutton();</script>

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

			var lennawebchat = document.createElement('script'); 
			lennawebchat.src = "https://platform.bni-life.co.id/webchat/lenna-init.js";
			var app = document.createElement('script');
			app.src = "https://platform.bni-life.co.id/webchat/app.js";
			/*lennawebchat.src = "https://app.lenna.ai/webchat/lenna-init.js";
			var app = document.createElement('script');
			app.src = "https://app.lenna.ai/webchat/app.js";*/
			document.head.prepend(lennawebchat);
			document.head.prepend(app);
			lennawebchat.onload = function () {
				LennaWebchatInit('rb2Gjd');
			};
		    	
		    var temp_ingin_awal=1;
				$(document).ready(function(){
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
					$(".protect").change(function(){
						var rel=$(this).val();
						window.location="<?php echo lang_url('perlindungan/"+rel+"');?>";
					});
				});
				
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