<!DOCTYPE html><html lang="en"><head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge"> <title>Register</title> <link rel="stylesheet" href="css/wtl.css"> <style>@import url("https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400&display=swap");*{margin: 0; padding: 0; box-sizing: border-box;}.wt_reg_body{font-family: "Nunito Sans", sans-serif; height: 100vh; width: 100vw; display: flex; justify-content: center; align-items: center; position: relative; color: #777;}/* Top SVG */.wt_reg_sec_one{position: absolute; top: 10%; left: 10%; z-index: -1;}.wt_reg_sec_one svg{width: 100px;}/* Main Content */.wt_reg_sec_two{margin-top: -50px;}.wt_reg_form_wrapper{width: 370px; padding: 0 20px 0;}.wt_reg_sec_two h2{text-align: center; font-size: 30px; font-weight: 400; color: #c2cfce; margin-bottom: 20px;}.wt_reg_sec_two form input{height: 35px; display: block; width: 100%; border-radius: 7px; border: 1px solid #b2bebd; outline: none; margin-bottom: 12px; padding-left: 15px; color: #999; font-size: 15px;}.wt_reg_sec_two form input::placeholder{color: #b2bebd;}.wt_reg_sec_two form input:focus{color: #999;}.wt_reg_form_wrapper input[type="checkbox"]{margin-right: 5px; -webkit-box-shadow: inset 0px 0px 3px 1px rgb(210 210 210); -moz-box-shadow: inset 0px 0px 3px 1px rgb(210 210 210); box-shadow: inset 0px 0px 3px 1px rgb(210 210 210);}/* Register button *//* For using input type submit *//* .wt_reg_sec_two form input[type="submit"]{background: rgb(205,167,212); background: linear-gradient(351deg, rgba(205,167,212,1) 0%, rgba(165,77,226,1) 86%); color: rgb(243, 243, 243); cursor: pointer; outline: none; border: none; transition: .9s;}*/#wt_reg_btn{border-radius: 7px; background: rgb(205, 167, 212); background: linear-gradient( 351deg, rgba(205, 167, 212, 1) 0%, rgba(165, 77, 226, 1) 86% ); border: none; color: rgb(243, 243, 243); text-align: center; font-size: 16px; line-height: 35px; height: 35px; width: 100%; transition: 0.5s; cursor: pointer; margin-bottom: 12px;}#wt_reg_btn span{cursor: pointer; display: inline-block; position: relative; transition: 0.5s;}#wt_reg_btn span:after{content: "\00bb"; position: absolute; opacity: 0; top: 0; right: -5px; transition: 0.5s;}#wt_reg_btn:hover span{padding-right: 20px;}#wt_reg_btn:hover span:after{opacity: 1; right: 0;}/* Select option css */.wt_reg_sec_two form select{height: 35px; display: block; width: 100%; border-radius: 7px; border: 1px solid #b2bebd; outline: none; margin-bottom: 12px; padding-left: 15px; color: #b2bebd; font-size: 15px; cursor: pointer; /* Removes the default <select> styling */ -webkit-appearance: none; -moz-appearance: none; appearance: none; /* Positions background arrow image */ background: url(select-arrow.png); background-repeat: no-repeat; background-position: 97% center; background-size: 12px;}.wt_reg_sec_two p{font-weight: 300; font-size: 13px;}.wt_reg_sec_two p a{text-decoration: none; color: #5781e6;}/* Bottom SVG */.wt_reg_sec_three{position: absolute; bottom: 0; left: 0; right: 0; z-index: -1;}/* Responsive css */@media (max-width: 768px){.wt_reg_sec_one{top: 10%; left: 50%; transform: translateX(-50%); z-index: -1;}.wt_reg_sec_two{margin-top: 40px;}}</style></head><body> <div class="wt_reg_body"> <div class="wt_reg_sec_one"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 179 183"> <defs> <style>.cls-1{fill: url(#linear-gradient);}.cls-2{fill: url(#linear-gradient-2);}.cls-3{fill: url(#linear-gradient-3);}</style> <linearGradient id="linear-gradient" x1="137.39" y1="46.7" x2="91.23" y2="232.85" gradientUnits="userSpaceOnUse"> <stop offset="0" stop-color="#a052ff"/> <stop offset="1" stop-color="#fffdff"/> </linearGradient> <linearGradient id="linear-gradient-2" x1="212.84" y1="-65.04" x2="-53.31" y2="279.58" gradientUnits="userSpaceOnUse"> <stop offset="0" stop-color="#f73fff"/> <stop offset="1" stop-color="#fffdff"/> </linearGradient> <linearGradient id="linear-gradient-3" x1="5.51" y1="9.94" x2="80.89" y2="245.32" gradientUnits="userSpaceOnUse"> <stop offset="0" stop-color="#0062ff"/> <stop offset="1" stop-color="#fffdff"/> </linearGradient> </defs> <g id="Layer_2" data-name="Layer 2"> <g id="Layer_1-2" data-name="Layer 1"> <circle class="cls-1" cx="115" cy="137" r="46"/> <circle class="cls-2" cx="107" cy="72" r="72"/> <circle class="cls-3" cx="43" cy="127" r="43"/> </g> </g> </svg> </div><div class="wt_reg_sec_two"> <div class="wt_reg_form_wrapper"> <h2>Registration</h2> <form method="POST" action="{{ route('register')}}"> @csrf<input type="text" id="wt_reg_name" placeholder="Name" name="name" value="" required autocomplete="name"> <input type="email" id="wt_reg_email" placeholder="Email" name="email" value="" required autocomplete="email"> <input type="password" id="Wt_reg_password" placeholder="Password" name="password" required autocomplete="new-password"> <input id="password-confirm Wt_reg_password" placeholder="Confirm password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" > <button id="wt_reg_btn" type="submit"><span>Register </span></button> </form> <p><input type="checkbox" id="wt_reg_checkbox" name="checkbox"> I’ve read and aggreed with your <a href="#">Terms & Conditions*</a></p><p><a href="{{ route('login')}}">Click here</a> to login instedad</p></div></div><div class="wt_reg_sec_three"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920.17 445.49"> <defs> <style>.cls-1{fill: url(#linear-gradient);}.cls-2{fill: url(#linear-gradient-2);}.cls-3{fill: url(#linear-gradient-3);}.cls-4{fill: url(#linear-gradient-4);}.cls-5{fill: url(#linear-gradient-5);}.cls-6{fill: url(#linear-gradient-6);}.cls-7{fill: url(#linear-gradient-7);}.cls-8{fill: url(#linear-gradient-8);}</style> <linearGradient id="linear-gradient" x1="-0.19" y1="441.67" x2="0.46" y2="441.73" gradientUnits="userSpaceOnUse"> <stop offset="0" stop-color="#f73fff"/> <stop offset="1" stop-color="#fffdff"/> </linearGradient> <linearGradient id="linear-gradient-2" x1="1920.03" y1="444.14" x2="1920.26" y2="444.16" xlink:href="#linear-gradient"/> <linearGradient id="linear-gradient-3" x1="1.43" y1="441.17" x2="-1.79" y2="442.51" xlink:href="#linear-gradient"/> <linearGradient id="linear-gradient-4" x1="130.29" y1="342.07" x2="-46.93" y2="416.19" xlink:href="#linear-gradient"/> <linearGradient id="linear-gradient-5" x1="1920.6" y1="443.97" x2="1919.46" y2="444.44" xlink:href="#linear-gradient"/> <linearGradient id="linear-gradient-6" x1="-253.08" y1="316.4" x2="2471.32" y2="429.92" gradientUnits="userSpaceOnUse"> <stop offset="0" stop-color="#ffaff8"/> <stop offset="1" stop-color="#fffdff"/> </linearGradient> <linearGradient id="linear-gradient-7" x1="1711.92" y1="132.61" x2="245.48" y2="649.22" gradientUnits="userSpaceOnUse"> <stop offset="0" stop-color="#fff7c5"/> <stop offset="1" stop-color="#fffdff"/> </linearGradient> <linearGradient id="linear-gradient-8" x1="130.29" y1="342.07" x2="-46.93" y2="416.19" xlink:href="#linear-gradient-6"/> </defs> <g id="Layer_2" data-name="Layer 2"> <g id="Layer_1-2" data-name="Layer 1"> <path class="cls-1" d="M.15,437.92v7.57A49.05,49.05,0,0,1,.15,437.92Z"/> <path class="cls-2" d="M1920.15,445.49v-2.67C1920.18,443.71,1920.19,444.6,1920.15,445.49Z"/> <path class="cls-3" d="M.15,437.92v7.57A49.05,49.05,0,0,1,.15,437.92Z"/> <path class="cls-4" d="M123.66,315.73C87.06,336.2,4.08,386.18.15,437.92V361.77C31.43,336.73,76.55,323.28,123.66,315.73Z"/> <path class="cls-5" d="M1920.15,445.49v-2.67C1920.18,443.71,1920.19,444.6,1920.15,445.49Z"/> <path class="cls-6" d="M1920.15,442.82v2.67H.15v-7.57C4.08,386.18,87.06,336.2,123.66,315.73c17.43-2.79,35.12-4.78,52.49-6.24C408,290,542,366.74,718.15,392.49c355.73,52,433.44-169.86,811-116C1687.45,299.07,1917.15,372.79,1920.15,442.82Z"/> <path class="cls-7" d="M1920.15,7v435.8c-3-70-232.7-143.75-391-166.33-377.56-53.86-455.27,168-811,116C542,366.74,408,290,176.15,309.49c-17.37,1.46-35.06,3.45-52.49,6.24,3.67-2.05,6.88-3.81,9.49-5.24,157.61-86.36,305.71-27.53,491-5,328.73,40,609.15-54.44,792-116C1711.73,90,1829.6-30.51,1920.15,7Z"/> <path class="cls-8" d="M123.66,315.73C87.06,336.2,4.08,386.18.15,437.92V361.77C31.43,336.73,76.55,323.28,123.66,315.73Z"/> </g> </g> </svg> </div></div></body></html>