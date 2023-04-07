<script>
    $(document).ready(function() {
        var printDialogClosed = false;
        $('.product').click(function() {
            var str = $(this).data('row-data');
            var values = str.split(',');
            $.ajax({
                url: 'index.php?r=receipt',
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
    })
</script>