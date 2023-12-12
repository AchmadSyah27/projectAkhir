<strong>Database Connected: </strong>
<?php
    try{
        \DB::connection()->getPDO();
        echo \DB::connection()->getDatabaseName();
        } catch (\Exception $e){
            echo 'None';
        }
?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/nusacodes/projectAkhir/projectAkhir/resources/views/DBConnection.blade.php ENDPATH**/ ?>