<section class="md:mx-16 mx-0 px-10 h-screen bg-amber-50">
    <form id="profile-form" class="pt-10">
        <h1 class="font-bold" style="font-size: 18px;">PROFILE SETTINGS</h1>

        <?php foreach (Auth::profileInfo() as $admin) { ?>
            <div class="mt-10 border-b border-gray-400">
                <input type="text" name="name" id="name" maxlength="40" value="<?= $admin['name'] ?>" class="p-3 border-none w-full bg-amber-50" placeholder="Username">
            </div>
            <div class="mt-10 border-b border-gray-400">
                <input type="text" name="username" id="username" maxlength="40" value="<?= $admin['username'] ?>" class="p-3 border-none w-full bg-amber-50" placeholder="username">
            </div>
            <div class="mt-10 border-b border-gray-400">
                <input type="email" name="email" id="email" value="<?= $admin['email'] ?>" class="p-3 border-none w-full bg-amber-50" placeholder="Email">
            </div>
            <div class="mt-10 border-b border-gray-400">
                <label for="Change Password" class="text-sm text-red-500">Leave blank if you don't want to change your password</label>
                <input type="password" name="password" id="password" class="p-3 border-none w-full bg-amber-50" placeholder="************">
            </div>
            <!-- <div class="mt-10 border-b border-gray-400">
                <label for="Question" class="text-sm text-red-500">Recovery Question</label>
                <select name="question" class="p-3 border-none w-full bg-amber-50">
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div> -->
        <?php } ?>
        <div class="bg-orange-500 rounded-full hover:bg-orange-400" style="margin-top: 85px;">
            <button type="submit" class="w-full p-2 font-medium text-white">Submit</button>
        </div>
    </form>
</section>

<script>
    $(document).ready(function() {
        $('#profile-form').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: 'index.php?r=save_profile',
                data: new $(this).serialize(),
                type: 'POST',
                dataType: 'json',
                success: function(data) {
                    if (data.status == 'success') {
                        swal({
                            text: data.msg,
                            icon: data.status,
                            buttons: false,
                            timer: 1500
                        });
                    } else {
                        swal({
                            text: data.msg,
                            icon: data.status,
                            buttons: false,
                            timer: 1500
                        })
                    }
                }
            })
        });
    })
</script>