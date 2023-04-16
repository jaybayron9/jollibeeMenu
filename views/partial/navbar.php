<nav class="w-full border-gray-200 px-2 md:px-10 py-2.5" style="background: #E4163D;">
    <div class="flex flex-wrap max-w-screen-xl mx-auto" style="padding: 8px 0px 13px;">
        <a href="./" class="flex items-center mr-10">
            <img src="Public/Assets/Storage/Defaults/logo.svg" class="h-13" alt="Jollibee Logo" />
            <?php if (isset($_SESSION['admin'])) { ?>
                <span class="ml-12 self-center whitespace-nowrap text-white hover:text-orange-400 font-bold font-sans" style="font-size: 15px;">Home</span>
            <?php } ?>
        </a>
        <a href="?i=profile" class="flex mr-10 items-center text-white hover:text-orange-400 font-bold font-sans" style="font-size: 15px;">
            Profile
        </a>
        <a <?= isset($_SESSION['admin']) ? 'href="#" id="log-out"' : 'href="?i=login"' ?> class="flex items-center text-white hover:text-orange-400 font-bold font-sans" style="font-size: 15px;">
            <?= isset($_SESSION['admin']) ? 'Log out' : '' ?>
        </a>
        <div class="ml-auto flex items-center md:order-2">
            <a href="#" id="refresh" title="Refresh" class="text-white mr-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                </svg>
            </a>
            <a href="#" id="view-orders" title="View ordered" class="hidden lg:mt-0 lg:col-span-5 lg:flex hover:cursor-pointer">
                <div class="p-2 z-[10]">
                    <span id="order-count" class="rounded-full bg-amber-400 px-2 py-1 -mr-6 font-semibold">
                        0
                    </span>
                </div>
                <img src="Public/Assets/Storage/Defaults/bag@3x.png" class="h-11" alt="Jollibee Logo" />
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 hover-to-view hover:cursor-pointer ml-1 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
            </svg>
        </div>
    </div>
</nav>

<script>
    $(document).ready(function() {
        $('#log-out').click(function() {
            swal({
                title: 'Are you sure?',
                text: 'You will be logged out from your account',
                icon: 'warning',
                buttons: true,
                dangerMode: true
            }).then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: '?r=logout',
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
        });

        $('.hover-to-view').hover(function() {
            $('#order-list').show();
        });

        $('#refresh').click(function() {
            $(this).addClass('animate-spin');
            setTimeout(function() {
                $(this).removeClass('animate-spin duration-150');
                window.location.reload();
            }, 300)
        })

        $('#view-orders').click(function() {
            $.ajax({
                url: '?r=check_orders',
                dataType: 'json',
                success: function(resp) {
                    if (resp.status == 'success') {
                        window.location.href = '?i=orders'
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
                url: '?r=order_count',
                success: function(data) {
                    $('#order-count').html(data);
                }
            })
        }, 1000)
    })
</script>