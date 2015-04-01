<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Laravel PHP Framework</title>
        
        <!-- required libraries -->
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.5/css/jquery.dataTables.css">
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="//cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js"></script>
        <!-- required libraries -->
        
    </head>
    <body>
        <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID Button</th>
                    <th>#</th>
                    <th>Name</th>
                </tr>
            </thead>

            <tfoot>
                <tr>
                    <th>ID Button</th>
                    <th>#</th>
                    <th>Name</th>
                </tr>
            </tfoot>
        </table>
        
        <footer>
            <a href="http://opba.com.br">Opba.com.br</a>
        </footer>
        
        <script type="text/javascript">
            $(document).ready(function() {
                $('#example').dataTable( {
                    "processing": true,
                    "serverSide": true,
                    "ajax": "serverProcessingController",
                    "aoColumns": [
                        { "mData": null,
                          "mRender": function(edata){
                            return '<input type="button"  value="'+edata[0]+'" />';
                          }
                        },
                        { "mData": 0 },
                        { "mData": 1 }
                        
                    ]
                } );
            } );
        </script>
        
    </body>
</html>
