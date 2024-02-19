<?php
$sql = DB::select('select * from meat where type = ?',[$type]);
foreach($sql as $row){
echo "<option value = '$row->product' > $row->product </option>";
}
