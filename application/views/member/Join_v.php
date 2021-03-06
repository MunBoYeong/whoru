<!-- 1. $BODY ======================================================================================
        
        Body

        Classes:
        * 'theme-{THEME NAME}'
        * 'right-to-left'     - Sets text direction to right-to-left
-->
<body class="theme-purple-hills page-signup">
    <!-- Page background -->
    <div id="page-signup-bg">
        <!-- Background overlay -->
        <div class="overlay"></div>
        <!-- Replace this with your bg image -->
        <img style="" src="/whoru/Images/signin-bg-1.jpg" alt="">
    </div>
    <!-- / Page background -->

    <!-- Container -->
    <div class="signup-container">
        <!-- Header -->
        <div class="signup-header">
            <a href="/whoru/" class="logo">
                <img src="/whoru/Images/logo-big.png" alt="" style="margin-top: -5px;">&nbsp;
                Q. I. H.
            </a> <!-- / .logo -->
            <div class="slogan">
                당신이! 호서인이라면! 반드시!
            </div> <!-- / .slogan -->
        </div>
        <!-- / Header -->

        <!-- Form -->
        <div class="signup-form">
            <?php
                //이메일 에러체크
                if(form_error('email')){
                    $error_email = form_error('email');
                }
                else{
                    $error_email = form_error('email_check');
                }
                
                //아이디 에러체크
                if(form_error('userid')){
                    $error_userid = form_error('userid');
                }
                else{
                    $error_userid = form_error('userid_check');
                }
            ?>
            <form action="" method="POST" id="signup-form_id">

                <div class="signup-text">
                    <span>회원가입</span>
                </div>
                
                <div class="form-group w-icon <?php if($error_userid == TRUE) echo 'has-error'; ?>">
                    <input name="userid" class="form-control input-lg" placeholder="아이디" type="text" value="<?php echo set_value("userid")?>" required>
                    <span class="fa fa-user signup-form-icon"></span>
                    <p class="help-block"><?php if($error_userid == TRUE) echo $error_userid;?></p>
                </div>                

                <div class="form-group w-icon <?php if(form_error('passwd') == TRUE) echo 'has-error'; ?>">
                    <input name="passwd" class="form-control input-lg" placeholder="패스워드" type="password" required>
                    <span class="fa fa-lock signup-form-icon"></span>
                    <p class="help-block"><?php if(form_error('passwd') == TRUE) echo form_error('passwd');?></p>
                </div>                

                <div class="form-group w-icon <?php if(form_error('passwd_chk') == TRUE) echo 'has-error'; ?>">
                    <input name="passwd_chk" class="form-control input-lg" placeholder="패스워드 확인" type="password" required>
                    <span class="fa fa-lock signup-form-icon"></span>
                    <p class="help-block"><?php if(form_error('passwd_chk') == TRUE) echo form_error('passwd_chk');?></p>
                </div>                

                <div class="form-group w-icon <?php if(form_error('name') == TRUE) echo 'has-error'; ?>">
                    <input name="name" class="form-control input-lg" placeholder="이름" type="text" value="<?php echo set_value("name")?>" required>
                    <span class="fa fa-user signup-form-icon"></span>
                    <p class="help-block"><?php if(form_error('name') == TRUE) echo form_error('name');?></p>
                </div>                
                
                <div class="form-group w-icon <?php if($error_email == TRUE) echo 'has-error'; ?>"> <!-- 이메일 -->
                    <input name="email" class="form-control input-lg" placeholder="이메일" type="text" value="<?php echo set_value("email")?>" required>
                    <span class="fa fa-envelope signup-form-icon"></span>
                    <p class="help-block"><?php if($error_email == TRUE) echo $error_email;?></p>
                </div>                

                <div class="form-group w-icon <?php if(form_error('dept') == TRUE) echo 'has-error'; ?>">
                    <input name="dept" class="form-control input-lg" placeholder="학과" type="text" value="<?php echo set_value("dept")?>" required>
                    <span class="fa fa-university signup-form-icon"></span>
                    <p class="help-block"><?php if(form_error('dept') == TRUE) echo form_error('dept');?></p>
                </div>                

                <div class="form-group <?php if(form_error('confirm') == TRUE) echo 'has-error'; ?>" style="margin-top: 20px;margin-bottom: 20px;">
                    <label class="checkbox-inline">
                        <input name="confirm" class="px" type="checkbox" >
                        <span class="lbl"><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">약관 동의</a></span>
                    </label>
                    <p class="help-block"><?php if(form_error('confirm') == TRUE) echo form_error('confirm');?></p>
                </div>

                <div class="form-actions">
                    <input value="확인" class="signup-btn bg-primary" type="submit">
                </div>
            </form>
            <!-- / Form -->
        </div>
        <!-- Right side -->
    </div>
    <div class="have-account">
        이미 가입하셨습니까? <a href="/whoru/user/Login">로그인</a>
    </div>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">약관 동의</h4>
                </div>
                <div class="modal-body">
                    약관 동의 하셨습니다~~~~~~ㅋㅋㅋ
                </div>
            </div>
        </div>
    </div>
    <script src="/whoru/Static/bootstrap/js/bootstrap.min.js"></script>
    <script src="/whoru/Static/js/pixel-admin.min.js"></script>
    <script type="text/javascript">
        // Resize BG
        init.push(function() {
            var $ph = $('#page-signup-bg'),
                    $img = $ph.find('> img');

            $(window).on('resize', function() {
                $img.attr('style', '');
                if ($img.height() < $ph.height()) {
                    $img.css({
                        height: '100%',
                        width: 'auto'
                    });
                }
            });
        });

        window.PixelAdmin.start(init);
    </script>