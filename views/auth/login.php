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

        <form action="" class="">
            <h1 class="font-bold" style="font-size: 18px;">Forgot Password?</h1>
            <p class="text-sm">
                We get it, stuff happens. Just enter your email address <br> below and we'll send you a link to reset your password!
            </p>

            <div class="mt-10 border-b border-gray-400">
                <input type="email" name="email" id="email" class="p-3 border-none w-full bg-amber-50" placeholder="exampleemail@gmail.com">
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
                        }).then(function() {
                            window.location.href = '?i=1';
                        })
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
    })
</script>