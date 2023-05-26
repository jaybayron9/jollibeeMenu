<div id="order-list" class="absolute hidden shadow bg-transparent bg-blue-300/[.50] rounded-md p-2 inline-block w-80 right-0 mr-2 mt-20 z-50">
    <div class="flex">
        <div id="close-order-list" class="hover:cursor-pointer text-gray-700 hover:text-gray-500 font-bold">
            Close
        </div>
        <p class="text-medium font-semibold ml-auto">Total : <span class="text-green-600">₱ </span><span id="total-from-order-list" class="font-normal"></span></p>
    </div>
    <div id="orders" class="grid grid-cols-3 p-2 space-y-2 overflow-y-auto" style="max-height: 500px;">
        <!-- Orders goes here -->
    </div>
    <button class="toPrint w-full text-center bg-red-500 p-2 mt-4 rounded-full text-2xl font-bold text-white hover:bg-red-400">
            Print Receipt
    </button>   
</div>

<script>
    $(document).ready(function() {
        setInterval(function() {
            $.ajax({
                url: '?r=show_orders',
                type: 'POST',
                success: function(data) {
                    $('#orders').html(data);
                }
            });
        }, 1000);

        setInterval(function() {
            $.ajax({
                url: '?r=total',
                success: function (resp) {
                    if (isNaN(resp)) {
                        $('#total-from-order-list').html('0.00');
                    } else {
                        $('#total-from-order-list').html(parseFloat(resp).toFixed(2));
                    }
                }
            });
        }, 1000);

        $('#close-order-list').click(function() {
            $('#order-list').fadeToggle();
        });

        $('.toPrint').click(function() {
            swal({
                title: 'Are you sure?',
                text: 'Can you confirm if these are all the orders you would like to place?',
                icon: 'warning',
                buttons: ["No", "Yes"],
            }).then(function(willPrint) {
                if (willPrint) {
                    swal({
                        title: 'Printing...',
                        text: 'Please wait while we print the receipt.',
                        icon: 'info',
                        button: false,
                        timer: 2000,
                    }).then(()=>{
                        $("body").append("<iframe src='receipt.php' style='display: none;' ></iframe>");
                        var iframeElement = document.querySelector("iframe");
                        iframeElement.contentWindow.print();
                        
                        setInterval(() => {
                            return swal({
                                title: "Transaction Complete!",
                                text: "Thank you for shopping with us!",
                                icon: "success",
                                button: "OK",
                            }).then(() => {
                                window.location.href = '?i=1';
                            });
                        }, 5000);
                    });
                }
            })
        });
    })
</script>