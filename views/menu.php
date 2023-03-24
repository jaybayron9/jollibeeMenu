<section class="md:mx-16 mx-0 px-10 h-screen bg-amber-50">

    <div class="grid grid-cols-4">
        <div class="h-screen py-10" style="width: 260px;">
            <div class="h-full overflow-y-auto overflow-x-hidden bg-gray-50 shadow-md">
                <ul class="space-y-0 font-sans">
                    <li class="<?= Menu::checkCategory($_GET['i'], 1) ? "border-l-4 border-red-400" : "" ?>">
                        <a href="?i=1" class="<?= Menu::checkCategory($_GET['i'], 1) ? "text-red-500" : " " ?> flex items-center p-5 text-xl  font-bold hover:bg-gray-100 hover:text-red-500">
                            <span class="flex-1 ml-3 whitespace-nowrap">Best Sellers</span>
                            <span class="inline-flex items-center justify-center px-2 ml-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li class="<?= Menu::checkCategory($_GET['i'], 2) ? "border-l-4 border-red-400" : "" ?>">
                        <a href="?i=2" class="<?= Menu::checkCategory($_GET['i'], 2) ? "text-red-500" : " " ?> flex items-center p-5 text-xl  font-bold hover:bg-gray-100 hover:text-red-500">
                            <span class="flex-1 ml-3 whitespace-nowrap">New Products</span>
                            <span class="inline-flex items-center justify-center px-2 ml-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li class="<?= Menu::checkCategory($_GET['i'], 3) ? "border-l-4 border-red-400" : "" ?>">
                        <a href="?i=3" class="<?= Menu::checkCategory($_GET['i'], 3) ? "text-red-500" : " " ?> flex items-center p-5 text-xl  font-bold hover:bg-gray-100 hover:text-red-500">
                            <span class="flex-1 ml-3 whitespace-nowrap">Family Meals</span>
                            <span class="inline-flex items-center justify-center px-2 ml-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li class="<?= Menu::checkCategory($_GET['i'], 4) ? "border-l-4 border-red-400" : "" ?>">
                        <a href="?i=4" class="<?= Menu::checkCategory($_GET['i'], 4) ? "text-red-500" : " " ?> flex items-center p-5 text-xl  font-bold hover:bg-gray-100 hover:text-red-500">
                            <span class="flex-1 ml-3 whitespace-nowrap">Breakfast</span>
                            <span class="inline-flex items-center justify-center px-2 ml-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li class="<?= Menu::checkCategory($_GET['i'], 5) ? "border-l-4 border-red-400" : "" ?>">
                        <a href="?i=5" class="<?= Menu::checkCategory($_GET['i'], 5) ? "text-red-500" : " " ?> flex items-center p-5 text-xl  font-bold hover:bg-gray-100 hover:text-red-500">
                            <span class="flex-1 ml-3 whitespace-nowrap">Chickenjoy</span>
                            <span class="inline-flex items-center justify-center px-2 ml-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li class="<?= Menu::checkCategory($_GET['i'], 6) ? "border-l-4 border-red-400" : "" ?>">
                        <a href="?i=6" class="<?= Menu::checkCategory($_GET['i'], 6) ? "text-red-500" : " " ?> flex items-center p-5 text-xl  font-bold hover:bg-gray-100 hover:text-red-500">
                            <span class="flex-1 ml-3 whitespace-nowrap">Burgers</span>
                            <span class="inline-flex items-center justify-center px-2 ml-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li class="<?= Menu::checkCategory($_GET['i'], 7) ? "border-l-4 border-red-400" : "" ?>">
                        <a href="?i=7" class="<?= Menu::checkCategory($_GET['i'], 7) ? "text-red-500" : " " ?> flex items-center p-5 text-xl  font-bold hover:bg-gray-100 hover:text-red-500">
                            <span class="flex-1 ml-3 whitespace-nowrap">Jolly Spaghetti</span>
                            <span class="inline-flex items-center justify-center px-2 ml-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li class="<?= Menu::checkCategory($_GET['i'], 8) ? "border-l-4 border-red-400" : "" ?>">
                        <a href="?i=8" class="<?= Menu::checkCategory($_GET['i'], 8) ? "text-red-500" : " " ?> flex items-center p-5 text-xl  font-bold hover:bg-gray-100 hover:text-red-500">
                            <span class="flex-1 ml-3 whitespace-nowrap">Burger Steak</span>
                            <span class="inline-flex items-center justify-center px-2 ml-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li class="<?= Menu::checkCategory($_GET['i'], 9) ? "border-l-4 border-red-400" : "" ?>">
                        <a href="?i=9" class="<?= Menu::checkCategory($_GET['i'], 9) ? "text-red-500" : " " ?> flex items-center p-5 text-xl  font-bold hover:bg-gray-100 hover:text-red-500">
                            <span class="flex-1 ml-3 whitespace-nowrap">Super Meals</span>
                            <span class="inline-flex items-center justify-center px-2 ml-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li class="<?= Menu::checkCategory($_GET['i'], 10) ? "border-l-4 border-red-400" : "" ?>">
                        <a href="?i=10" class="<?= Menu::checkCategory($_GET['i'], 10) ? "text-red-500" : " " ?> flex items-center p-5 text-xl  font-bold hover:bg-gray-100 hover:text-red-500">
                            <span class="flex-1 ml-3 whitespace-nowrap">Chicken Sandwich</span>
                            <span class="inline-flex items-center justify-center px-2 ml-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li class="<?= Menu::checkCategory($_GET['i'], 11) ? "border-l-4 border-red-400" : "" ?>">
                        <a href="?i=11" class="<?= Menu::checkCategory($_GET['i'], 11) ? "text-red-500" : " " ?> flex items-center p-5 text-xl  font-bold hover:bg-gray-100 hover:text-red-500">
                            <span class="flex-1 ml-3 whitespace-nowrap">Jolly Hotdog & Pies</span>
                            <span class="inline-flex items-center justify-center px-2 ml-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
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
                                <div data-row-data="<?= $description[$i] . ',' . $price[$i] ?>" class="product hover:cursor-pointer">
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
        var printDialogClosed = false;
        $('.product').click(function() {
            var str = $(this).data('row-data');
            var values = str.split(',');

            console.log(values);
            console.log(values[0]);
            console.log(values[1]);

            $.ajax({
                url: 'index.php?a=receipt',
                type: 'POST',
                data: {
                    values: values,
                },
                dataType: 'json',
                success: function(data) {
                    if (data.status == 'success') {
                        var iframe = "<iframe src='receipt.php' style='display: none;' ></iframe>";
                        $("body").append(iframe);
                        var iframeElement = document.querySelector("iframe");
                        iframeElement.contentWindow.print();
                        setTimeout(checkPrintDialogClosed, 3000);

                    } else {
                        alert(data.msg);
                        console.log(data.msg);
                    }
                }
            });
        })

        window.onbeforeprint = function() {
            printDialogClosed = false;
        }

        window.onafterprint = function() {
            printDialogClosed = true;
        }

        function checkPrintDialogClosed() {
            if (!printDialogClosed) {
                alert("Click okay or press enter to continue.");
                location.reload();
            }
        }
    });
</script>