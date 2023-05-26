<section class="flex justify-center md:mx-16 mx-0 px-10 h-screen bg-amber-50">
    <form class="m-auto text-center">
        <label for="password" class="font-semibold">Password</label>
        <input id="password" type="password" class="w-full text-center rounded-full text-2xl" placeholder="**********" maxlength="25" autocomplete="">
        <span id="alertMessage" class="hidden text-red-500"></span>
    </form>
</section>

<script>
    $(document).ready(function() {
        $('#password').on('keyup input',function() {
            var password = $('#password').val();

            $.ajax({
                url: 'index.php?r=password_auth',
                type: 'POST',
                data: {
                    password: password
                },
                dataType: 'json',
                success: function(resp) {
                    if (resp.status == 'success') {
                        location.reload();
                    }
                    $('#alertMessage').removeClass('hidden').html(resp.msg);
                }
            });
        });
    });
</script>