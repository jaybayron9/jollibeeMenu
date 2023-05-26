<link rel="stylesheet" href="Public/Assets/css/table.css">

<?php 
if (!Auth::confirmAuth()) {
    require(view('components/password'));
} else {
?>

<section class="md:mx-16 mx-0 px-10 h-screen bg-amber-50">
    <div class="py-5">
        <form action="print-transaction.php" target="_blank" method="POST" class="flex mb-4">
            <div class="flex mr-2">
                <label for="start_date" class="block mt-1 font-light">&nbsp;</label>
                <input type="date" id="start_date" name="start_date" title="Start date" class="border rounded px-4 py-0 shadow">
            </div>

            <div class="flex mr-3">
                <label for="end_date" class="block mt-1 font-light">&nbsp;</label>
                <input type="date" id="end_date" name="end_date" title="End date" class="border rounded px-4 py-1 shadow">
            </div>

            <div>
                <button type="button" id="search_button" title="Sort date" class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-700 shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </button>
            </div>

            <div class="ml-auto">
                <button type="submit" id="print" class="flex bg-green-500 text-white px-2 py-1 rounded hover:bg-green-700 shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                    </svg>
                    Print
                </button>
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
                        <td><span class="text-green-400">₱</span> <?= $row['price'] ?></td>
                        <td class="whitespace-nowrap"><?= date('Y-m-d', strtotime($row['date'])) ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php } ?>

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