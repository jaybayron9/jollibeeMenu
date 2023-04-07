<nav class="w-full border-gray-200 px-2 md:px-10 py-2.5" style="background: #E4163D;">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto" style="padding: 8px 0px 13px;">
        <a href="./" class="flex items-center">
            <img src="Public/Assets/Storage/Defaults/logo.svg" class="h-13" alt="Jollibee Logo" />
            <?php if (isset($_SESSION['admin'])) { ?>
                <span class="ml-12 self-center whitespace-nowrap text-white hover:text-orange-400 font-bold font-sans" style="font-size: 15px;">Home</span>
            <?php } ?>
        </a>
        <div class="flex items-center md:order-2">
            <a <?= isset($_SESSION['admin']) ? 'href="#" id="log-out"' : 'href="?i=login"' ?>  class="mr-5 text-white hover:text-orange-400 font-bold font-sans" style="font-size: 15px;">
                <?= isset($_SESSION['admin']) ? 'Log out' : '' ?>
            </a>
            <a href="#" id="view-orders" title="View ordered" class="hidden lg:mt-0 lg:col-span-5 lg:flex hover:cursor-pointer">
                <div class="p-2 z-[10]">
                    <span id="order-count" class="rounded-full bg-amber-400 px-2 py-1 -mr-6 font-semibold">
                    0
                    </span>
                </div>
                <img src="Public/Assets/Storage/Defaults/bag@3x.png" class="h-11" alt="Jollibee Logo" />
            </a>
        </div>
    </div>
</nav>

<script>
    $(document).ready(function() {
        $('#log-out').click(function(){
            swal({
                title: 'Are you sure?',
                text: 'You will be logged out from your account',
                icon: 'warning',
                buttons: true,
                dangerMode: true
            }).then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: 'index.php?r=logout',
                        dataType: 'json',
                        success: function(data) {
                            if (data.status == 'success') {
                                swal({
                                    text: data.msg, 
                                    icon: data.status,
                                    buttons: false,
                                    timer: 1500
                                }).then(function() {
                                    window.location.reload();
                                })
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
                }
            })
        })

        $('#view-orders').click(function() {
            $.ajax({
                url: 'index.php?r=check_orders',
                dataType: 'json',
                success: function(resp) {
                    if (resp.status == 'success') {
                        window.location.href = 'index.php?i=orders'
                    } else {
                        swal({
                            text: resp.msg,
                            icon: resp.status,
                            buttons: false,
                            timer: 1500
                        })
                    }
                }
            })
        })

        setInterval(function() {
            $.ajax({
                url: 'index.php?r=order_count',
                success: function(data) {
                    $('#order-count').html(data)
                }
            })
        }, 500)    
    })
</script>