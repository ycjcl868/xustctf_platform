<?php 
header("Content-type: text/html; charset=utf-8");
error_reporting(0);
$quesId = $_POST['quesId'];
$ans = $_POST['ans'];

switch ($quesId) {
    case '1':
    	if($ans === 'C')
        	echo "XUSTCTF{c4ca4238a0b923820dcc509a6f75849b}";
        else
        	echo "答案错误";
        break;
    case '2':
    	if($ans === 'C')
        	echo "XUSTCTF{c81e728d9d4c2f636f067f89cc14862c}";
        else
        	echo "答案错误";
        break;
    case '3':
    	if($ans === 'B')
        	echo "XUSTCTF{eccbc87e4b5ce2fe28308fd9f2a7baf3}";
        else
        	echo "答案错误";
        break;
    case '4':
    	if($ans === 'C')
        	echo "XUSTCTF{a87ff679a2f3e71d9181a67b7542122c}";
        else
        	echo "答案错误";
        break;
    case '5':
    	if($ans === 'C')
        	echo "XUSTCTF{e4da3b7fbbce2345d7772b0674a318d5}";
        else
        	echo "答案错误";
        break;
    case '6':
    	if($ans === 'A')
        	echo "XUSTCTF{1679091c5a880faf6fb5e6087eb1b2dc}";
        else
        	echo "答案错误";
        break;
    case '7':
    	if($ans === 'C')
        	echo "XUSTCTF{8f14e45fceea167a5a36dedd4bea2543}";
        else
        	echo "答案错误";
        break;
    case '8':
    	if($ans === 'A')
        	echo "XUSTCTF{c9f0f895fb98ab9159f51fd0297e236d}";
        else
        	echo "答案错误";
        break;
    case '9':
    	if($ans === 'A')
        	echo "XUSTCTF{45c48cce2e2d7fbdea1afc51c7c6ad26}";
        else
        	echo "答案错误";
        break;
    case '10':
    	if($ans === 'C')
        	echo "XUSTCTF{d3d9446802a44259755d38e6d163e820}";
        else
        	echo "答案错误";
        break;
}

 ?>