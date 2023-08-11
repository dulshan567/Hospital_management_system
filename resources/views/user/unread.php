<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

$test1 = DB::table('appoinments')

->where('name' ,Auth::user()->id)
->count();

echo $test1;

?>