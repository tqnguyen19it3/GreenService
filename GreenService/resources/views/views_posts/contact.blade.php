@extends('views_posts.posts_all')
@section('home_posts_content')
	<div class="lien-he">
		<div class="bottom-lien-he">
			<div class="map-lien-he">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122985.16876267988!2d108.42849748764493!3d15.576332972377985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd9fc4c976a28cd06!2zS2jhu5FpIHBo4buRIE3hu7kgVGjhuqFjaCBC4bqvYw!5e0!3m2!1sen!2s!4v1608637397224!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
			<div class="left-lien-he">
				<div class="top-llh">
					<p style="font-weight: bold">Liên hệ</p>
				</div>
				<div class="bottom-llh">
					<form>
						<fieldset>
							<p class="first-form form-half">
								<label>
									Tên
								</label>
								<input type="text" name="">
							</p>
							<p class="last-form form-half">
								<label>
									Email
								</label>
								<input type="text" name="">
							</p>
							<p class="first-form form-half">
								<label>
									Số điện thoại
								</label>
								<input type="text" name="">
							</p>
							<p class="last-form form-half">
								<label>
									Tiêu đề
								</label>
								<input type="text" name="">
							</p>
							<p class="first-form form-full">
								<label style="font-weight: bold; font-size: 19px;">
									Lời nhắn
								</label>
								<textarea></textarea>
							</p>
							<input type="submit" name="" value="Gửi" class="subm-form">
						</fieldset>
					</form>
				</div>
			</div>
			<div class="right-lien-he">
				<div class="top-rlh">
					<p style="font-weight: bold">Liên hệ khác</p>
				</div>
				<p id="ctlh">Nếu bạn có thắc mắc hoặc yêu cầu đặc biệt, chỉ cần viết thư cho chúng tôi. Chúng tôi mong được phục vụ bạn!</p>
				<ul>
					<li>
						<h4><i class="fas fa-map-marker-alt"></i>  Trụ sở chính</h4>
						<p>+ Tổ 3, Khối phố Mỹ Thạch Bắc, phường Tân Thạnh, thành phố Tam Kỳ, tỉnh Quảng Nam</p>
					</li>
					<li>
						<h4><i class="fas fa-envelope"></i>  Địa chỉ thư điện tử</h4>
						<p>+ khanhhuy@gmail.com</p>
					</li>
					<li>
						<h4><i class="fas fa-phone"></i>  Điện thoại</h4>
						<p>+ 0917 00 54 93 - 0912 09 03 13</p>
					</li>
					<li>
						<h4><i class="fas fa-credit-card"></i>  Thông tin giao dịch</h4>
						<p>+ Tên tài khoản: Công ty TNHH Dịch vụ vệ sinh và Chăm sóc Khánh Huy</p>
						<p>+ Tài khoản số: 7747057 tại ngân hàng ACB chi nhánh Quảng Nam</p>			
					</li>
				</ul>
			</div>
		</div>
	</div>
@endsection