<section class="md:mx-16 mx-0 px-10 h-screen bg-amber-50">
    <div class="grid grid-cols-2 gap-32 px-20 py-10">
        <form id="sign-in" action="" class="pr-20">
            <h1 class="font-bold" style="font-size: 18px;">SIGN IN</h1>
            <p class="text-sm">Sign in with your username or email and password</p>

            <div class="mt-10 border-b border-gray-400">
                <input type="text" name="username" id="username" maxlength="40" class="p-3 border-none w-full bg-amber-50" placeholder="Username">
            </div>
            <div class="mt-5 border-b border-gray-400">
                <input type="password" name="password" id="password" maxlength="40" class="p-3 border-none w-full bg-amber-50" placeholder="*********">
            </div>

            <div class="bg-orange-500 mt-10 rounded-full hover:bg-orange-400">
                <button type="submit" class="w-full p-2 font-medium text-white">SIGN IN</button>
            </div>
        </form>

        <form id="forgot-form" action="" class="">
            <h1 class="font-bold" style="font-size: 18px;">Forgot Password?</h1>
            <p class="text-sm">
                We get it, stuff happens. Just enter your answer below to the hint and you can change your password!
            </p>

            <div class="mt-10 border-b border-gray-400">
                <p><?= Auth::hint(); ?></p>
                <input type="text" name="answer" id="answer" maxlength="40" class="p-3 border-none w-full bg-amber-50" placeholder="Answer here" autocomplete="off">
            </div>

            <div class="bg-orange-500 rounded-full hover:bg-orange-400" style="margin-top: 85px;">
                <button type="submit" class="w-full p-2 font-medium text-white">SEND</button>
            </div>
        </form>

        <form id="change-password" action="" class="hidden">
            <h1 class="font-bold" style="font-size: 18px;">Change your password</h1>

            <div class="mt-10 border-b border-gray-400">
                <input type="password" name="newpassword" id="newpassword" maxlength="40" class="p-3 border-none w-full bg-amber-50" placeholder="**********">
            </div>
            <div class="mt-5 border-b border-gray-400">
                <input type="password" name="retypepassword" id="retypepassword" maxlength="40" class="p-3 border-none w-full bg-amber-50" placeholder="*********">
            </div>

            <div class="bg-orange-500 rounded-full hover:bg-orange-400" style="margin-top: 85px;">
                <button type="submit" class="w-full p-2 font-medium text-white">SEND</button>
            </div>
        </form>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('#sign-in').submit(function(e){
            e.preventDefault();
            var username = $('#username').val();
            var password = $('#password').val();
            $.ajax({
                url: 'index.php?r=login',
                type: 'POST',
                data: {
                    username: username,
                    password: password
                },
                dataType: 'json',
                success: function(data) {
                    if (data.status == 'success') {
                        swal({
                            text: data.msg,
                            icon: data.status,
                            buttons: false,
                            timer: 1500
                        }).then(() => { window.location.href = ''; })
                    } else {
                        swal({
                            text: data.msg,
                            icon: data.status,
                            button: 'OK'
                        })
                    }
                }
            })
        })

        $('#forgot-form').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: 'index.php?r=ver_que',
                type: 'POST',
                data: new $(this).serialize(),
                dataType: 'json',
                success: function(resp) {
                    if (resp.status == 'success') {
                        $('#change-password').removeClass('hidden');
                        $('#forgot-form').addClass('hidden');
                    } else {
                        swal({
                            text: resp.msg,
                            icon: resp.status,
                            button: 'OK'
                        })
                    }
                }
            });
        });

        $('#change-password').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: 'index.php?r=change_pass',
                type: 'POST',
                data: new $(this).serialize(),
                dataType: 'json',
                success: function(resp) {
                    if (resp.status == 'success') {
                        swal({
                            text: resp.msg,
                            icon: resp.status,
                            buttons: false,
                            timer: 3000
                        }).then(() => { window.location.reload() });
                    } else {
                        swal({
                            text: resp.msg,
                            icon: resp.status,
                            button: 'OK'
                        })
                    }
                }
            });
        });
    });
</script>