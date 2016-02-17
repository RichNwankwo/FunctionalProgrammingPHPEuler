<?php
use function Functional\average;
use function Functional\difference;
use function Functional\map;
use function Functional\every;
use function Functional\invoke;
use function Functional\maximum;
use function Functional\minimum;
use function Functional\partition;
use function Functional\product;
use function Functional\ratio;
use function Functional\reduce_left;
use function Functional\some;
use function Functional\select;
use function Functional\reject;
use function Functional\partial_left;
use function Functional\partial_right;
use function Functional\partial_any;
use function Functional\partial_method;
use function Functional\sum;
use function Functional\with;
use function Functional\invoke_if;
use function Functional\pick;
use function Functional\indexes_of;
use function Functional\retry;
use function Functional\sequence_exponential;
use function Functional\capture;
use function Functional\memoize;
use function Functional\zip;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('problem1', function(){
    $isDivisibleBy3or5 = function ($v) {
        return ($v % 3 == 0 || $v % 5 == 0);
    };
    $addReduce = function ($value, $index, $collection, $reduction) {
        return $reduction + $value;
    };
    $numbers = reduce_left(select(range(3,999), $isDivisibleBy3or5), $addReduce);
    return $numbers;
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
