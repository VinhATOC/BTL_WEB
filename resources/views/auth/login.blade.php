<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{csrf_token()}}" />
	<title></title>
	<link rel="stylesheet" href="/public/css/login.css">
	<link href="/webarch/webarch/HTML/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	 <link href="/webarch/webarch/HTML/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet"
          type="text/css"/>
</head>
<body>

	<!-- Header -->

	<div class="navbar navbar-inverse">

		<!-- Navbar-Header -->

		<div class="navbar-header">
			<a href=""><img class="img-circle" src="/storage/app/public/images/coltech.jpg" alt="" style="width: 70px; height: 70px; margin-top: 0px; margin-left: 15px;"></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>
		<ul class="nav navbar-nav navbar-left" >
			<h3 style="color:#ffffff">TRƯỜNG ĐẠI HỌC CÔNG NGHỆ </h3>
		</ul>

		<!-- Navbar-header right -->

		<ul class="nav navbar-nav navbar-right" style="margin-top: 10px;" >
				<li>
					<a href="#">
						<i class="icon-display4"></i> <span class="visible-xs-inline-block position-right  right"> Go to website</span>
					</a>
				</li>

				<li>
					<a href="#">
						<i class="icon-user-tie"></i> <span class="visible-xs-inline-block position-right"> Contact admin</span>
					</a>
				</li>

				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-cog3"></i>
						<span class="visible-xs-inline-block position-right"> Options</span>
					</a>
				</li>
			</ul>
	</div>

	<div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <!-- <img id="profile-img" class="profile-img-card" src="/storage/app/public/images/coltech.jpg" /> -->
            <form id="auth_login" method="post" class="form-signin">

            	<div class="text-center">
					<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
					<h4 class="content-group" style="font-size: 17px;">Login to your account <br/> 
					<small class="display-block">Enter your credentials below</small></h4>
				</div>



                <span id="reauth-email" class="reauth-email"></span>
                <p class="text-success">{{$errors->first('reset_password')}}</p>
                <p class="text-error">
					{{$errors->first('username')}}
				</p>
				<label for="username" style="font-size: 17px;">Username:</label>
				<input id="username" class="form-control" name="username" placeholder="Your Username" value="{{ old('username') }}">

                <p class="text-error">
					{{$errors->first('password')}}
				</p>
				<label for="password" style="font-size: 17px;">Password:</label>
				<input type="password" id="password" class="form-control" name="password" placeholder="Your Password" value="">
				@if($check_captcha == true)
				<div class="form-group">
					<img style="margin-top: -10px; width: 80%; border: 1px solid gray" id="login_captcha" src="{{ Captcha::src() }}">
					<i class="fa fa-refresh fa-2x" style="padding: 10px;cursor: pointer; margin: 20px 0 0 5px;" aria-hidden="true" id="re_login_captcha"></i>
					<p></p>
					<p id="captcha_null" class="text-error">
						{{$errors->first('captcha')}}
					</p>
					<!-- <input id="text_captcha" type="text" class="form-control" name="captcha" placeholder="Nhập mã bảo vệ"> -->
				</div>
			@endif
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" value="1"> Remember me
                    </label>
                </div>
                <input name="_token" value="{{csrf_token()}}" hidden>
                <button id="dauth_login" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Login</button>
            </form><!-- /form -->
            <a href="/dat-lai-mat-khau" class="forgot-password">
                Forgot Password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
<script src="/public/js/lib/jquery-3.1.0.min.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="/public/js/my_jquery.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>

    
