<div id="hotel-content-info" class="stylebox">
			
					<h2>Tiket24 &amp; Special Packages</h2>
					<hr />
					<br />
					<div id="hotel-content-description" >
						<link href="/common/style/packages.css" rel="stylesheet" type="text/css">
						<div class="attraction_list" >
						<?php 
							if(!empty($text)) {
								foreach($text as $row)
								{ 
									$photo = $row->gambar;
									if($photo == ''){
										$photo = $this->config->base_url().'asset/uploads/coming-soon.jpg';
									}
						?>
							<div class="sub2" >
								<a href="<?php echo $this->config->base_url(); ?>index.php/attractions/detail/<?php echo $row->packages_id; ?>"><img src="<?php echo $photo; ?>"><span><?php echo $row->nama; ?></span></a></div>
						<?php	} 
						} else { ?> 
								<center><?php  echo "<h1> EMPTY DATA! </h1>"; ?></center> 
						<?php }?>
						</div>
						<div style="clear:both"></div>
					</div>	
</div>
<h2>&nbsp;</h2>
