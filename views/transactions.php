<link rel="stylesheet" href="Public/Assets/css/table.css">

<section class="md:mx-16 mx-0 px-10 h-screen bg-amber-50">
    <div class="py-5">
        <form action="print-transaction.php" target="_blank" method="POST" class="flex mb-4">
            <div class="flex mr-2">
                <label for="start_date" class="block mt-1 font-light">From &nbsp;</label>
                <input type="date" id="start_date" name="start_date" class="border rounded px-4 shadow">
            </div>

            <div class="flex mr-3">
                <label for="end_date" class="block mt-1 font-light">To &nbsp;</label>
                <input type="date" id="end_date" name="end_date" class="border rounded px-4 p-1 shadow">
            </div>

            <div>
                <button type="button" id="search_button" class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-700 shadow">Search</button>
            </div>

            <div class="ml-auto">
                <button type="submit" id="print" class="bg-green-500 text-white px-4 py-1 rounded hover:bg-green-700 shadow">Print</button>
            </div>
        </form>
        <div class="p-5 bg-white overflow-y-auto" style="max-height: 520px;">
            <table id="historytbl" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th data-priority="1" class="text-xs"></th>
                        <th data-priority="2" class="text-xs"></th>
                        <th data-priority="3" class="text-xs">PURCHASE</th>
                        <th data-priority="4" class="text-xs"></th>
                        <th data-priority="5" class="text-xs"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach (Menu::show_transactions() as $row ) { ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['customer_name'] ?></td>
                        <td><?= $row['purchase'] ?></td>
                        <td><?= $row['price'] ?></td>
                        <td><?= date('Y-m-d', strtotime($row['date'])) ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        var table = $('#historytbl').DataTable({
            paging: true,
            responsive: true,
            "columns": [
                { title: 'ID' },
                { title: 'INV#' },
                { title: 'PURCHASE' },
                { title: 'PRICE' },
                { title: 'DATE' }
            ]
        })
        .columns.adjust()
        .responsive.recalc();

        $.fn.dataTable.ext.search.push(
            function(settings, data, dataIndex) {
                var minDate = $('#start_date').val();
                var maxDate = $('#end_date').val();
                var date = data[4]; // assuming the date is in the first column
                if (minDate === '' || maxDate === '') {
                    return true;
                }
                if (date >= minDate && date <= maxDate) {
                    return true;
                }
                return false;
            }
        );

        $('#search_button').on('click', function() {
            table.draw();
        });

        var today = new Date().toISOString().substr(0, 10);
        $('#start_date').val(today);
        $('#end_date').val(today);
        table.draw();
    });

    
</script>































































<!-- var table = $('#trans-tbl').dataTable({
            paging: true,
            responsive: true,
            "ajax": {
                "url": "?r=show_transactions",
                "dataSrc": ""
            },
            columnDefs: [
                { type: 'date', targets: 4 }],
            "columns": [
                { title: 'ID', "data": "id" },
                { title: 'INV#', "data": "customer_name" },
                { title: 'PURCHASE', "data": "purchase" },
                { title: 'PRICE', "data": "price" },
                { title: 'DATE', "data": "date" }
            ]
        }); -->