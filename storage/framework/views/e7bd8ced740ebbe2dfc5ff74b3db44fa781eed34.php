	<!-- send all users email -->
	<div id="sendmailModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
			  <h4 class="modal-title text-<?php echo e($text); ?>">This message will be sent to all your users.</h4>
			  <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
				  <form style="padding:3px;" role="form" method="post" action="<?php echo e(route('sendmailtoall')); ?>">
						 
				  <textarea class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" name="message" row="3" placeholder="Type Message here" required></textarea><br/>
						 
						 <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
						 <input type="submit" class="btn btn-<?php echo e($text); ?>" value="Send">
				 </form>
			</div>
		  </div>
		</div>
	  </div>
	  <!-- /send all users email Modal -->
			
			
			
			
		<!-- Withdrawal method Modal -->
		<div id="wmethodModal" class="modal fade" role="dialog">
			<div class="modal-dialog">

			  <!-- Modal content-->
			  <div class="modal-content">
				<div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
				  <h4 class="modal-title text-<?php echo e($text); ?>">Add new withdrawal method</h4>
				  <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
					  <form style="padding:3px;" role="form" method="post" action="<?php echo e(action('Admin\SettingsController@addwdmethod')); ?>">
							 <input style="padding:5px;" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" placeholder="Enter method name" type="text" name="name" required><br/>
							 <input style="padding:5px;" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" placeholder="Minimum amount $" type="text" name="minimum" required><br/>
							 <input style="padding:5px;" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" placeholder="Maximum amount $" type="text" name="maximum" required><br/>
							 <input style="padding:5px;" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" placeholder="Charges (Fixed amount $)" type="text" name="charges_fixed" required><br/>
							 <input style="padding:5px;" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" placeholder="Charges (Percentage %)" type="text" name="charges_percentage" required><br/>
							 <input style="padding:5px;" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" placeholder="Payout duration" type="text" name="duration" required><br/>
							 <select name="status" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>">
								 <option value="">Select action</option> 
								 <option value="enabled">Enable</option> 
								 <option value="disabled">Disable</option> 
							 </select><br/>
						   <input type="hidden" name="type" value="withdrawal">
							 <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
							 <input type="submit" class="btn btn-<?php echo e($text); ?>" value="Continue">
					 </form>
				</div>
			  </div>
			</div>
		  </div>
		  <!-- /withdrawal method Modal -->



				       			<!-- Plans Modal -->
			<div id="plansModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
			        <h4 class="modal-title text-<?php echo e($text); ?>">Add new plan / package</h4>
				  <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
			      </div>
			      <div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
              			<form style="padding:3px;" role="form" method="post" action="<?php echo e(route('addplan')); ?>">
							<h5 class="text-<?php echo e($text); ?>">Plan Name</h5> 	
							<input style="padding:5px;" class="form-control text-<?php echo e($text); ?> bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>" placeholder="Enter Plan name" type="text" name="name" required><br/>
								<h5 class="text-<?php echo e($text); ?>">Plan price</h5> 
								 <input style="padding:5px;" class="form-control text-<?php echo e($text); ?> bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>" placeholder="Enter Plan price" type="text" name="price" required><br/>
								 <h5 class="text-<?php echo e($text); ?>">Plan Minimum Price</h5> 			 
            					  <input style="padding:5px;" placeholder="Enter Plan minimum price" class="form-control text-<?php echo e($text); ?> bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>" type="text" name="min_price" required><br/>
            					  <h5 class="text-<?php echo e($text); ?>">Plan Maximum Price</h5> 			 
								  <input style="padding:5px;" class="form-control text-<?php echo e($text); ?> bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>" placeholder="Enter Plan maximum price" type="text" name="max_price" required><br/>
								
								  <h5 class="text-<?php echo e($text); ?>">Minimum return</h5> 
								<input style="padding:5px;" class="form-control text-<?php echo e($text); ?> bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>" placeholder="Enter minimum return" type="text" name="minr" required><br/>
								
								<h5 class="text-<?php echo e($text); ?>">Maximum return</h5> 
								<input style="padding:5px;" class="form-control text-<?php echo e($text); ?> bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>" placeholder="Enter maximum return" type="text" name="maxr" required><br/>
								<h5 class="text-<?php echo e($text); ?>">Gift Bonus</h5> 
								<input style="padding:5px;" class="form-control text-<?php echo e($text); ?> bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>" placeholder="Enter Additional Gift Bonus" type="text" name="gift" required><br/>	
								 <h5 class="text-<?php echo e($text); ?>">top up interval</h5> 	
                               <select class="form-control text-<?php echo e($text); ?> bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>" name="t_interval">
									<option>Monthly</option>
									<option>Weekly</option>
									<option>Daily</option>
									<option>Hourly</option>
								</select> <br>
								<h5 class="text-<?php echo e($text); ?>">top up type</h5> 
                               <select class="form-control text-<?php echo e($text); ?> bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>" name="t_type">
									<option>Percentage</option>
									<option>Fixed</option>
								</select> <br>
								<h5 class="text-<?php echo e($text); ?>">top up amount (in % or $ as specified above)</h5> 
								<input style="padding:5px;" class="form-control text-<?php echo e($text); ?> bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>" placeholder="top up amount" type="text" name="t_amount" required> <br>
								<h5 class="text-<?php echo e($text); ?>">Investment duration</h5> 
                               <select class="form-control text-<?php echo e($text); ?> bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>" name="expiration">
									<option>One week</option>
									<option>One month</option>
									<option>Three months</option>	
									<option>Six months</option>
									<option>One year</option>
								</select><br>
					   		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
					   		<input type="submit" class="btn btn-primary" value="Add Plan">
					   </form>
			      </div>
			    </div>
			  </div>
			</div>
			<!-- /plans Modal -->

			<!-- settings update Modal -->
			<div id="s_updModal" class="modal fade" role="dialog">
				<div class="modal-dialog">
  
				  <!-- Modal content-->
				  <div class="modal-content">
					<div class="modal-header bg-dark">
					  <h4 class="modal-title" style="text-align:center;">This settings page was last updated by</h4>
					  <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body bg-dark">
						  <h3><?php echo e($settings->updated_by); ?></h3>
						  
						  <h4 class="modal-title" style="text-align:center;">Date/Time</h4>
						  
						  <h3><?php echo e($settings->updated_at); ?></h3>
					</div>
				  </div>
				</div>
			  </div>
			  <!-- /settings update Modal -->

			  <!-- send all users email -->
	




			
		