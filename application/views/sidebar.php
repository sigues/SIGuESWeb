		<div id="sidebar">
			<!-- logo -->
			<a href="<?=base_url()?>"><img src="<?=base_url()?>img/logo.png" alt="Left template" id="logo" /></a>

                        <?php
                        $idusuario = $this->session->userdata("idusuario");
                            if($idusuario != null){
                                echo "<div>".anchor(base_url()."index.php/welcome/logout","Cerrar Sesión")."</div>";
                            }
                        ?>

			<!-- search -->
			<form  method="get" id="searchform" action="#">
				<div>
					<input type="text" value="Search..." name="s" id="s" onfocus="defaultInput(this)" onblur="clearInput(this)" />
					<input type="submit" id="searchsubmit" value=" " />
				</div>
			</form>
			<!-- ENDS search -->

			<!-- Navigation -->
			<ul id="nav" class="sf-menu sf-vertical">
				<li class="current-menu-item"><a href="index.html">HOME</a></li>
				<li><a href="features.html">FEATURES</a>
					<ul>
						<li><a href="features.html">Columns layout</a>
						<li><a href="features-typography.html">Typography</a>
						<li><a href="features-icons.html">General icons</a>
						<li><a href="features-social-icons.html">Social icons</a>
						<li><a href="features-accordion.html">Accordion boxes</a>
						<li><a href="features-toggle.html">Toggle boxes</a>
						<li><a href="features-tabs.html">Tabbed content</a>
					</ul>
				</li>
				<li><a href="skins.html">SKINS</a></li>
				<li><a href="gallery.html">GALLERY</a>
					<ul>
						<li><a href="gallery.html">Image gallery</a>
							<ul>
								<li><a href="gallery.html">Two columns layout</a></li>
								<li><a href="gallery-fourcols.html">Four columns layout</a></li>
							</ul>
						</li>
						<li><a href="gallery-video.html">Video gallery</a></li>
					</ul>
				</li>
				<li><a href="blog.html">BLOG</a>
					<ul>
						<li><a href="blog.html">Full blog</a></li>
						<li><a href="blog-compact.html">Compact blog</a></li>
					</ul>
				</li>
				<li><a href="portfolio.html">PORTFOLIO</a></li>
				<li><a href="contact.html">CONTACT</a></li>
				<li><a href="http://luiszuno.com/blog/downloads/left-template">DOWNLOAD NOW!</a></li>
			</ul>
			<!-- Navigation -->

			<!-- categories -->
			<ul class="cat-list">
				<li><h6>Categories</h6></li>
				<li><a href="#" title="View posts">Design (11)</a></li>
				<li><a href="#" title="View all posts">Web (6)</a></li>
				<li><a href="#" title="View all posts">Photo (3)</a></li>
				<li><a href="#" title="View all posts">Coding (16)</a></li>
				<li><a href="#" title="View all posts">Design (41)</a></li>
				<li><a href="#" title="View all posts">Web (6)</a></li>
				<li><a href="#" title="View all posts">Photo (5)</a></li>
				<li><a href="#" title="View all posts">Coding (23)</a></li>
			</ul>
			<!-- categories -->

			<!-- latest tweets -->
			<div class="tweet"><h6>Tweets</h6></div>
			<!-- ENDS latest tweets -->

			<!-- Social -->
			<ul class="social">
				<li><h6>Follow us</h6>
				<li><a href="http://www.facebook.com" class="facebook" title="Become a fan"></a></li>
				<li><a href="http://www.twitter.com" class="twitter" title="Follow our tweets"></a></li>
				<li><a href="http://www.dribbble.com" class="dribbble" title="View our work"></a></li>
				<li><a href="http://www.addthis.com" class="addthis" title="Tell everybody"></a></li>
				<li><a href="http://www.vimeo.com" class="vimeo" title="View our videos"></a></li>
				<li><a href="http://www.youtube.com" class="youtube" title="View our videos"></a></li>
			</ul>
			<!-- ENDS Social -->

		</div>
