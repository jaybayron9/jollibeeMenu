<section class="md:mx-16 mx-0 px-10 h-screen bg-amber-50">
    <div class="grid grid-cols-4">
        <?php require(view('components/menu-tabs')) ?>
        <div class="col-span-3 ml-4 h-full overflow-y-auto">
            <?php
            $categoryName = Menu::$conn->query("SELECT * FROM menu WHERE id = '{$_GET['i']}'");
            if ($categoryName->num_rows > 0) {
                while ($row = $categoryName->fetch_assoc()) {
            ?>
                <div class="mt-10">
                    <p class="bg-white py-2 pl-4 font-semibold text-2xl">
                        <?= $row['category'] ?>
                    </p>
                </div>

                <div class="grid grid-cols-3 gap-x-4 mb-4 mt-8">
                    <?php
                    $desc = explode(", ", $row['description']);
                    $description = array_filter($desc);

                    $pri  = array_map('intval', explode(", ", $row['price']));
                    $price = array_filter($pri);

                    for ($i = 0; $i < count($description); $i++) {
                    ?>
                        <div class="item items-center justify-center rounded shadow-2xl bg-rose-600 hover:bg-rose-500">
                            <div class="flex">
                                <div class="ml-auto mr-10 text-amber-400">
                                    <svg class="w-7 h-7 absolute mt-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                            <img src="Public/Assets/Storage/Uploads/pic1.png" alt="Bonnie Avatar" class="bg-white">
                            <div data-row-data="<?= $description[$i] . ',' . $price[$i] ?>" class="product hover:cursor-pointer add">
                                <p class="des font-semibold text-white px-4 pt-2">
                                    <?= $description[$i] ?>
                                </p>
                                <p class="price font-light pb-4 text-white pt-1 pl-4 rounded-b">
                                    Starts at ₱ <?= $price[$i] ?>
                                </p>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('#lose-order-list').on('click', function() { 
            $('#order-list').fadeOut();
        })

        $('#order-list').hover(function() {
            $(this).show();
        })

        $('.add').click(function(){
            var data = $(this).data('row-data');
            var data = data.split(',');

            var product = data[0];
            var price = data[1];

            $.ajax({
                url: 'index.php?r=insert_order',
                method: 'POST',
                data: {
                    product: product,
                    price: price
                },
                dataType: 'json',
                success: function(data){
                    if (data.status == 'success') {
                        $('#order-list').fadeIn();
                        setTimeout(function(){
                            var container = $('#orders');
                            container.scrollTop(container[0].scrollHeight);
                            setTimeout(function(){
                                $('#order-list').fadeOut()
                            }, 1200);
                        }, 1500);
                    } else {
                        swal({
                            title: "Error",
                            text: "Something went wrong!",
                            icon: "error",
                            button: "Ok",
                        })
                    }
                },
                error: function(data){
                    swal({
                        title: "Error",
                        text: "Something went wrong!",
                        icon: "error",
                        button: "Ok",
                    })
                }
            })
        })
    });
</script>