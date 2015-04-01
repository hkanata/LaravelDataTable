<?php

use Opba\Datatable\Ssp;

class HomeController extends BaseController {
    /*
    * Datatable Adapted version to Laravel
    * @author Leonardo Musashi Miyamoto
    * hkanata@gmail.com / falecom@opba.com.br
    * opba.com.br 
    * Thanks
    */

    public function showWelcome() {
        return View::make('index');
    }

    public function serverProcessingController() {

        $Ssp = new Ssp;
        
        //Table name
        $table = 'usuario';

        // Table's primary key
        $primaryKey = 'id';

        // Array of database columns which should be read and sent back to DataTables.
        // The `db` parameter represents the column name in the database, while the `dt`
        // parameter represents the DataTables column identifier. In this case simple
        // indexes
        $columns = array(
            array('db' => 'id', 'dt' => 0),
            array('db' => 'nome', 'dt' => 1),
        );

        //PDO connect from Laravel
        $pdo = DB::connection()->getPdo();
        echo json_encode(
            $Ssp::simple(Input::get(), $table, $primaryKey, $columns, $pdo)
        );
    }

}
