<div class="contact" id="contact">
	<div class="container">
		<div class="contact-main">
			<div class="contact-top">
				<h3>Contact</h3>
				<p>Speak freely or To the point of small proposals.</p>
			</div>
			<div class="contact-bottom">
                <form id="contact_form" method="post" action="/index.php/fitness/contact">
				<div class="col-md-6 contact-left">
					<input type="text" id="contact_name" name="name" placeholder="Name" required="">
					<input type="email" id="contact_email" name="email" placeholder="Email" required="" style="display: inline-block;background: none;border: 1px solid #A3A1A1;width: 100%;outline: none;font-size: 0.95em;color: #747577;font-weight: 400;padding: 13px 15px 13px 15px;margin: 0em 0em 1.5em 0em;">
					<input type="text" id="contact_mobile" name="mobile" placeholder="Phone" required="">
				</div>
				<div class="col-md-6 contact-right">
					<textarea placeholder="Message" id="contact_message" name="message" required=""></textarea>
					<input type="button" id="contact_button" value="提交" style="font-size: 1em;color: #000;background: none;padding: 0.5em 1em 0.5em 1em;display: block;border: 3px double #f8565d;margin: 0.5em 0em 0em 0em;outline: none;">
                </div>
				<div class="clearfix"></div>
                </form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
    $(function(){
        $('#contact_button').on('click',function(){
            var name = $('#contact_name').val();
            if(name == ''){
                alert('请填写姓名');
                $('#contact_name').focus();
                return false;
            }
            var email = $('#contact_email').val();
            if(email == ''){
                alert('请填写email');
                $('#contact_email').focus();
                return false;
            }
            var mobile = $('#contact_mobile').val();
            if(mobile == ''){
                alert('请填写手机号');
                $('#contact_mobile').focus();
                return false;
            }
            var message = $('#contact_message').val();
            if(message == ''){
                alert('请填写message');
                $('#contact_message').focus();
                return false;
            }
            
            //对电子邮件的验证
            var email_reg = /^[A-Za-z0-9]+([-_.][A-Za-zd]+)*@([A-Za-zd]+[-.])+[A-Za-zd]{2,5}$/;
            if(!email_reg.test(email))
            {
                alert('请输入有效的E_mail！');
                $('#contact_email').focus();
                return false;
            }
            
            // 手机号码验证
            var mobile_re = /^1\d{10}$/
            if (!mobile_re.test(mobile)) {
                alert('请填写有效的手机号码');
                $('#contact_mobile').focus();
                return false;
            }

            // ajax start
            $.ajax({
                type: "post",
                url: SiteUrlFront + "/index.php/fitness/contact",
                data: {
                    name: name,
                    email: email,
                    mobile: mobile,
                    message: message,
                },
                dataType: "json",
                success: function(e) {
                    if(e.return && e.flag > 0){
                        alert('提交成功');
                        window.location.href = SiteUrlFront;
                        return true;
                    }else{
                        alert('提交失败');
                        return false;
                    }
                }
            })
            // ajax end
        })
    })
</script>