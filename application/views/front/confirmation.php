            <!--start-single-heading-banner-->
            <div class="single-banner-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="single-ban-top-content">
                                <p>Confirmation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end-single-heading-banner-->
            <!--start-single-heading-->
            <div class="signle-heading">
                <div class="container">
                    <div class="row">
                        <!--start-shop-head -->
                        <div class="col-lg-12">
                            <div class="shop-head-menu">
                                <ul>
                                    <li><i class="fa fa-home"></i><a class="shop-home" href="<?php echo base_url(); ?>"><span>Home</span></a><span><i class="fa fa-angle-right"></i></span></li>
                                    <li class="shop-pro">Confirmation</li>
                                </ul>
                            </div>
                        </div>
                        <!--end-shop-head-->
                    </div>
                </div>
            </div>
            <!--end-single-heading-->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div style="padding:25px;margin:25px;">
						<?php if($this->session->flashdata('SUCCESSMSG')) 
						{ ?>
                        <div role="alert" class="alert alert-success">
                                <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                                <strong>Well done!</strong>
                                <?php echo $this->session->flashdata('SUCCESSMSG'); ?>
                        </div>
						<?php } ?>
						</div>
					</div>
					<div class="col-md-12 text-center">
						<a href="<?php echo base_url(); ?>" class="btn btn-success" style="margin:25px 0px;">Back To Home</a>
					</div>
				</div>
			</div>
				