<section class="md:mx-16 mx-0 px-10 h-screen bg-amber-50">
    <div class="col-span-3 ml-4">
        <div class="flex">
            <a href="?i=1" class="py-3 flex hover:text-blue-500 text-2xl font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mt-1">
                    <path fill-rule="evenodd" d="M11.03 3.97a.75.75 0 010 1.06l-6.22 6.22H21a.75.75 0 010 1.5H4.81l6.22 6.22a.75.75 0 11-1.06 1.06l-7.5-7.5a.75.75 0 010-1.06l7.5-7.5a.75.75 0 011.06 0z" clip-rule="evenodd" />
                </svg> Back
            </a>
            <div class="ml-auto py-3">
                <a href="#" id="cancel-orders" class=" flex text-red-500 hover:text-red-400 text-2xl font-bold">
                    Cancel
                </a>
            </div>
        </div>
        <p class="bg-white py-2 pl-4 mb-4 font-bold text-2xl text-center uppercase">
            Total : <span class="text-green-500">₱</span> <span class="font-medium"><?= number_format(Menu::total_order(), 2) ?></span>
        </p>
        <div class="overflow-y-auto" style="max-height: 520px;">
            <div class="grid grid-cols-4 gap-x-4 mx-10">
                <?php foreach (Menu::list_orders() as $row) { ?>
                    <div class="item items-center justify-center rounded shadow-sm bg-rose-600 mb-4">
                        <div data-row-data="<?= $row['id'] ?>" class="remove-order ml-auto text-amber-200 hover:cursor-pointer hover:text-amber-400 text-center font-semibold">
                            Remove
                        </div>
                        <img src="Public/Assets/Storage/Uploads/pic1.png" alt="Bonnie Avatar" class="bg-white">
                        <p class="des font-semibold text-white px-4 pt-2">
                            <?= $row['purchase'] ?>
                        </p>
                        <p class="price font-light pb-4 text-white pt-1 pl-4 rounded-b">
                            ₱ <?= $row['price'] ?>
                        </p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        function checkList() {
            $.ajax({
                url: 'index.php?r=check_orders',
                dataType: 'json',
                success: function(resp) {
                    if (resp.status == 'warning') {
                        window.location.href = 'index.php?i=1'
                    }
                }
            });
        }

        $('.remove-order').click(function() {
            var id = $(this).data('row-data');
            $.ajax({
                url: 'index.php?r=remove_order',
                type: 'POST',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(data) {
                    if (data.status == 'success') {
                        checkList();
                        location.reload();
                    } else {
                        swal({
                            title: "Error",
                            text: data.msg,
                            icon: data.status,
                            button: "Ok",
                        });
                    }
                }
            })
        });

        $('#cancel-orders').click(function() {
            swal({
                title: "Are you sure?",
                text: "Once cancelled, you will not be able to recover this order!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: 'index.php?r=cancel_orders',
                        type: 'POST',
                        dataType: 'json',
                        success: function(data) {
                            if (data.status == 'success') {
                                swal({
                                    title: "Success",
                                    text: data.msg,
                                    icon: data.status,
                                    buttons: false,
                                    time: 2000,
                                })
                                setTimeout(function() {
                                    window.location.href = '?i=1';
                                }, 2100)
                            } else {
                                swal({
                                    title: "Error",
                                    text: data.msg,
                                    icon: data.status,
                                    button: "Ok",
                                });
                            }
                        }
                    })
                } else {
                    swal("Order is safe!");
                }
            })
        });
    })
</script>