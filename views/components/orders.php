<div id="order-list" class="absolute hidden inline-block w-80 right-0 mr-2 mt-14 z-50">
    <div id="close-order-list" class="hover:cursor-pointer text-white font-bold">
        Close
    </div>
    <div id="orders" class="grid grid-cols-3 p-2 space-y-2 overflow-y-auto" style="max-height: 500px;">
        <!-- Orders goes here -->
    </div>
    <button class="w-full text-center bg-red-500 p-2 mt-4 rounded-full text-2xl font-bold text-white hover:bg-red-400">
            Print Receipt
    </button>   
</div>

<script>
    $(document).ready(function() {
        setInterval(function() {
            $.ajax({
                url: 'index.php?r=show_orders',
                type: 'POST',
                success: function(data) {
                    $('#orders').html(data);
                }
            })
        }, 1000);
    })
</script>