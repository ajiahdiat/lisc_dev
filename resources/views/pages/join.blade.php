@extends('layouts.default')
@section('content')
	<!-- join -->
	<div class="great-support-container section-container section-container-gray-bg text">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 great-support section-description wow fadeIn">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-8 great-support-box wow fadeInLeft">
					<div class="great-support-box-text great-support-box-text-left">
						<h2>Join Us!</h2>
						<div class="contact-form">
							<form role="form" action="assets/contact.php" method="post">
								<div class="col-sm-6">
									<h4>Child's Information</h4>
									<div class="form-group">
										<label class="control-label">Name</label>
										<input name="childn" placeholder="Child's Name" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label">Age</label>
										<input type="number" name="age" min=1 placeholder="1" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label">Desired Program</label>
										<select class="form-control" name="program">
											<option value="1">Play Group</option>
											<option value="2">Kindergarten</option>
											<option value="3">Daycare</option>
										</select>
									</div>
								</div>
								<div class="col-sm-6">
									<h4>Parent's Information</h4>
									<div class="form-group">
										<label class="control-label">Name</label>
										<input name="parentn" placeholder="Parent's Name" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label">Address</label>
										<input name="address" placeholder="Address" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label">City</label>
										<input name="city" placeholder="City" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label">Mobile Phone</label>
										<input name="mobile" placeholder="081234567890" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label">Email</label>
										<input type="email" name="email" placeholder="your.email@example.com" class="form-control">
									</div>
								</div>
								<p>*We will follow up Candidate that submitted through this form.</p>
								<a type="submit" class="btn btn-link-1">Submit</a>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-4 great-support-box great-support-box-phone wow fadeInUp">
					<img src="assets/img/hand-sign.png">
				</div>
			</div>
		</div>
	</div>
@stop