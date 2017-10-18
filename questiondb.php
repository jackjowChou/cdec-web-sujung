<?php
/**
 * Created by PhpStorm.
 * User: SJ
 * Date: 2017/10/15
 * Time: 下午 03:03
 */


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>題庫</title>
</head>

<style>
    .conternt_center {
        text-align: center;
        width: 80%;
        position: absolute;
        background-color: #b0e0e6;
        left: 1%;
    }



    .conternt_left {
        background-color: cornflowerblue;
        position: relative;
        text-align: left;
        height: 100%;
        width: 100px;
        float: left;
        position: absolute;
        border-right-width: 3px;
        border-right-style: solid;
        border-right-color: green;
    }
    .center{margin: 0 auto;
    }
</style>


<body>
<form name="form" method="post" action="questionadd_finish.php" class="conternt_center">
    <div class="conternt_left">
        <ul>
            <li class="li_1">類別一</li>
            <li class="li_2">類別二</li>
            <li class="li_3">類別三</li>
            <li class="li_4">類別四</li>
            <li class="li_5">類別五</li>
            <li class="li_6">類別六</li>
            <li class="li_7">類別七</li>
            <li class="li_8">類別八</li>
            <li class="li_9">類別九</li>
            <li class="li_10">類別十</li>
        </ul>
    </div>

    <div style="float:right; border: 3px solid green;" >

        <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
            <tr>
                <td width="40%" align="center"></td>
                <td width="20%" align="center"></td>
                <td width="40%" align="left"></td>
            </tr>
            <tr>
                <td align="center">題目：<input name="question" type="text" id="question" style="padding:20px;"/></td>
                <td align="left"></td>
                <td align="center">題目類別：</td>
                
            </tr>
            <tr>
                <td align="center">選項A：<input name="A" type="text" id="A"/></td>
                <td align="left"></td>
            </tr>
            <tr>
                <td align="center">選項B：<input name="B" type="text" id="B"/></td>
                <td align="left"></td>
            </tr>
            <tr>
                <td align="center">選項C：<input name="C" type="text" id="C"/></td>
                <td align="left"></td>
            </tr>
            <tr>
                <td align="center">選項D：<input name="D" type="text" id="D"/></td>
                <td align="left"></td>
            </tr>


            <tr>
                <td align="center"></td>
                <td align="center"><input type="submit" name="button" value="新增"/></td>
                <td align="center"></td>
        </table>

    </div>
</form>

</body>
</html>