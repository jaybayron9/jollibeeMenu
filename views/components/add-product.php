<div id="addProductModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <form id="addProductForm" class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Add Product
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="addProductModal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <div id="alert" class="hidden flex p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">Product successfully added.
                    </div>
                </div>
                <div>
                    <label for="category" class="font-semibold"></label>
                    <select name="category" id="category" class="block py-2.5 px-2 w-full text-sm text-gray-800 bg-transparent border-0 border-b-2 border-gray-500 appearance-none focus:outline-none focus:ring-0 focus:border-gray-500 peer" required>
                        <option value='' selected hidden>Choose a category</option>
                        <?php foreach (Menu::get('menu') as $item) { ?>
                            <option value="<?= $item['category'] ?>"><?= $item['category'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div>
                    <label for="description" class="font-semibold"></label>
                    <input type="text" name="description" id="description" placeholder="Description" maxlength="50" class="block py-2.5 px-2 w-full text-sm text-gray-800 bg-transparent border-0 border-b-2 border-gray-500 appearance-none focus:outline-none focus:ring-0 focus:border-gray-500 peer" required>
                </div>
                <div>
                    <label for="price" class="font-semibold"></label>
                    <input type="text" name="price" id="price" placeholder="Price" maxlength="11" class="myInput block py-2.5 px-2 w-full text-sm text-gray-800 bg-transparent border-0 border-b-2 border-gray-500 appearance-none focus:outline-none focus:ring-0 focus:border-gray-500 peer" required>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b ">
                <button data-modal-hide="addProductModal" type="button" class="ml-auto text-gray-100 bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-100 focus:z-10">Cancel</button>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Save</button>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#addProductModal').submit(function(e) {
            e.preventDefault();
            
            $.ajax({
                url: 'index.php?r=add_product',
                type: 'POST',
                data: {
                    category: $('#category').val(),
                    description: $('#description').val(),
                    price: $('#price').val(),
                },
                dataType: 'json',
                success: function(resp) {
                    if (resp.status == 'success') {
                        $('#description, #price').val('');
                        $('#category').val('');

                        $('#alert').removeClass('hidden').slideDown();
                        setTimeout(function() {
                            $('#alert').slideUp();
                        }, 2000);
                    }
                }
            })
        });

        $('.myInput').on('keydown keyup', function(event) {
            var input = $(this);
            var value = input.val();

            value = value.replace(/[^0-9\.]/g, '');

            var decimalCount = (value.match(/\./g) || []).length;
            if (decimalCount > 1) {
                value = value.replace(/\.+$/, '');
            }

            input.val(value);
        });
    });
</script>