<!DOCTYPE html>
<html>
  <head>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

    <link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
    <script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
  
    <script src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>
    
     <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
     <link href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css" rel="stylesheet" type="text/css" />
     

    <meta charset=utf-8 />
    <title>DataTables - JS Bin</title>
    <style>
        body {
            font: 90%/1.45em "Helvetica Neue", HelveticaNeue, Verdana, Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #fff;
            }


    </style>
  </head>
  <body>
    <div class="container">

    <table cellpadding="3" cellspacing="0" border="0" style="width: 67%; margin: 0 auto 2em auto;">
        <!-- <thead>
            <tr>
                <th>Target</th>
                <th>Search text</th>
                <th>Treat as regex</th>
                <th>Use smart search</th>
            </tr>
        </thead> -->
        <tbody>

         
        
            <tr style="display: inline-block;">
                <td><input type="text" class="global_filter" placeholder="Global search" id="global_filter"></td>
                
            </tr>

            <tr id="filter_col1" data-column="0" style="display: inline-block;">
                <td><input type="text" placeholder="Type" class="column_filter" id="col0_filter"></td>
                
            </tr>

            <tr id="filter_col1" data-column="1" style="display: inline-block;">
                <td><input type="text" placeholder="U id" class="column_filter" id="col1_filter"></td>
                
            </tr>

            <tr id="filter_col1" data-column="2" style="display: inline-block;">
                <td><input type="text" placeholder="Name " class="column_filter" id="col2_filter"></td>
                
            </tr>
            <tr id="filter_col1" data-column="3" style="display: inline-block;">
                <td><input type="text" placeholder="Number " class="column_filter" id="col3_filter"></td>
                
            </tr>

            <tr id="filter_col1" data-column="4" style="display: inline-block;">
                <td><input type="text" placeholder="Source" class="column_filter" id="col4_filter"></td>
                
            </tr>
            <tr id="filter_col1" data-column="5" style="display: inline-block;">
                <td><input type="text" placeholder="Status" class="column_filter" id="col5_filter"></td>
                
            </tr>
            <tr id="filter_col1" data-column="6" style="display: inline-block;">
                <td><input type="text" placeholder="Response" class="column_filter" id="col6_filter"></td>
                
            </tr>

            <tr id="filter_col1" data-column="7" style="display: inline-block;">
                <td><input type="text" placeholder="Owner" class="column_filter" id="col7_filter"></td>
                
            </tr>
            <tr id="filter_col1" data-column="8" style="display: inline-block;">
                <td><input type="text" placeholder="Past Owner" class="column_filter" id="col8_filter"></td>
                
            </tr>
            
          
         
    



       <!-- mine end -->
           
        </tbody>
    </table>

    <table border="0" cellspacing="5" cellpadding="5">
        <tbody><tr>
            <td>Start date:</td>
            <td><input type="text" id="min2" name="min2"></td>
        </tr>
        <tr>
            <td>End date:</td>
            <td><input type="text" id="max2" name="max2"></td>
        </tr>
    </tbody></table>
    
    <table border="0" cellspacing="5" cellpadding="5">
        <tbody><tr>
            <td>Start date:</td>
            <td><input type="text" id="min3" name="min3"></td>
        </tr>
        <tr>
            <td>End date:</td>
            <td><input type="text" id="max3" name="max3"></td>
        </tr>
    </tbody></table>
    

    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Type</th>
                <th>U Id</th>
                <th>Name</th>
                <th>Number</th>
                <th>Source</th>
                <th>Status</th>
                <th>Response</th>
                <th>Owner</th>
                <th>Past Owner</th>
                <th>Modified On</th>
                <th>Created On</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                 <td>$320,800</td>
                 <td>2011-04-25</td>
                 <td>2011-04-25</td>
                 <td>2011-04-25</td>
                 <td>Tokyo</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>$170,750</td>
                <td>2011-07-25</td>
                <td>2011-07-25</td>
                <td>2011-07-25</td>
                <td>Tokyo</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>$86,000</td>
                <td>2009-01-12</td>
                <td>2009-01-12</td>
                <td>2009-01-12</td>
                <td>Tokyo</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                
                <td>$433,060</td>
                <td>2012-03-29</td>
                <td>2012-03-29</td>
                <td>2012-03-29</td>
                <td>Tokyo</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
               
                <td>$162,700</td>
                <td>2008-11-28</td>
                <td>2008-11-28</td>
                <td>2008-11-28</td>
                <td>Tokyo</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
               
                <td>$372,000</td>
                <td>2012-12-02</td>
                <td>2012-12-02</td>
                <td>2012-12-02</td>
                <td>Tokyo</td>

            </tr>
             
        </tbody>
        <tfoot>
            <tr>
                <th>Type</th>
                <th>U Id</th>
                <th>Name</th>
                <th>Number</th>
                <th>Source</th>
                <th>Status</th>
                <th>Response</th>
                <th>Owner</th>
                <th>Past Owner</th>
                <th>Modified On</th>
                <th>Created On</th>
                <th>Actions</th>
            </tr>
        </tfoot>
    </table>
    </div>
  </body>
  <script>
var minDate, maxDate,minDate2, maxDate2;
 
 // Custom filtering function which will search data in column four between two values
 $.fn.dataTable.ext.search.push(
     function( settings, data, dataIndex ) {
         var min = minDate.val();
         var min2 = minDate2.val();
         var max = maxDate.val();
         var max2 = maxDate2.val();
         var date = new Date( data[9] );
         var date2 = new Date( data[10] );
  
         if (
             ( min === null && max === null ) ||
             ( min === null && date <= max ) ||
             ( min <= date   && max === null ) ||
             ( min <= date   && date <= max )
         )
         if (
             ( min2 === null && max2 === null ) ||
             ( min2 === null && date2 <= max ) ||
             ( min2 <= date   && max2 === null ) ||
             ( min2 <= date   && date2 <= max )
         ) {
             return true;
         }
         return false;
     }
 );
  
 $(document).ready(function() {
     // Create date inputs
     minDate = new DateTime($('#min2'), {
         format: 'MMMM Do YYYY'
     });
     minDate2 = new DateTime($('#min3'), {
         format: 'MMMM Do YYYY'
     });
     maxDate = new DateTime($('#max2'), {
         format: 'MMMM Do YYYY'
     });
     maxDate2 = new DateTime($('#max3'), {
         format: 'MMMM Do YYYY'
     });
  
     // DataTables initialisation
     var table = $('#example').DataTable();
  
     // Refilter the table
     $('#min2, #max2').on('change', function () {
         table.draw();
     });
     $('#min3, #max3').on('change', function () {
         table.draw();
     });
 });



      function filterGlobal() {
    $('#example')
        .DataTable()
        .search($('#global_filter').val(), $('#global_regex').prop('checked'), $('#global_smart').prop('checked'))
        .draw();
}
 
function filterColumn(i) {
    $('#example')
        .DataTable()
        .column(i)
        .search(
            $('#col' + i + '_filter').val(),
            $('#col' + i + '_regex').prop('checked'),
            $('#col' + i + '_smart').prop('checked')
        )
        .draw();
}
 
$(document).ready(function () {
    $('#example').DataTable();
 
    $('input.global_filter').on('keyup click', function () {
        filterGlobal();
    });
 
    $('input.column_filter').on('keyup click', function () {
        filterColumn($(this).parents('tr').attr('data-column'));
    });
});




  </script>
</html>
