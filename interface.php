<?php
interface salary{
    public function salary();
}
class principal implements salary {
    public function salary(){
        echo "principal salary:2000000";
    }
}
class hod implements salary {
    public function salary(){
        echo "hod salary:100000";
    }
}
class faculty implements salary {
    public function salary(){
        echo "faculty salary:100000";
    }
}
class peon implements salary {
    public function salary(){
        echo "peon salary:10000";
    }
}
$a=new faculty();
$b=new hod();
$c=new principal();
$d=new peon();
$emp =array($a,$b,$c,$d);
foreach($a as $emp){
    $emp->salary;
}
?>