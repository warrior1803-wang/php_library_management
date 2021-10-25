<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link href="style.css" rel="external nofollow" rel="stylesheet">

    <title>查询图书</title>

</head>

<body>
</br>
<h1 align="center">图书信息查询</h1>
<p align="center">&nbsp;</p>
<table width="1200" height="134" border="1" bordercolor="#FFFFFF" cellpadding="0" cellspacing="0" bgcolor="#9E7DB4" align="center">

    <form name="myform" method="post" action="">

        <tr>

            <td width="605"  height="51" bgcolor="#BBFFFF"><p align="center">请输入图书名称

                    <input name="txt_book" type="text" id="txt_book" size="25" >



                    <input type="submit" name="Submit" value="查询">

                </p></td>

        </tr>

    </form>

    <tr valign="top" bgcolor="#FFFFFF">

        <td height="81">

            <table width="100%" border="0" cellpadding="0" cellspacing="0">

                <tr>

                    <td height="79" align="right" valign="top"> <br>

                        <table width="1150" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#625D59">

                            <tr align="center" bgcolor="#ACFFFF">

                                <td width="46" height="20">编号</td>

                                <td width="167">图书名称</td>
                                <td width="167">作者</td>

                                <td width="90">入库时间</td>

                                <td width="70">图书类型</td>

                                <td width="78">图书价格</td>

                                <td width="114">图书数量</td>

                            </tr>

                            <?php

                            include("config.php");

                            $sql=mysqli::_query("select * from book");

                            $info=mysqli_fetch_object($sql);

                            if ($_POST[Submit]=="查询"){

                                $txt_book=$_POST[txt_book];

                                $sql=mysqli_query("select * from book where book_title like '%".trim($txt_book)."%'"); //如果选择的条件为"like",则进行模糊查询

                                $info=mysqli_fetch_object($sql);

                            }//如果检索的信息不存在，则输出相应的提示信息

                            if($info==false){

                                echo "<p align='center' style='color:#FF0000; font-size:12px'>对不起，您检索的图书信息不存在!</p>";

                            }

                            do{

                                ?>

                                <tr align="left" bgcolor="#FFFFFF">

                                    <td height="20" align="center"><?php echo $info->num; ?></td>

                                    <td > <?php echo $info->book_title; ?></td>

                                    <td align="center"><?php echo $info->author; ?></td>

                                    <td align="center"><?php echo $info->add_time; ?></td>

                                    <td align="center"> <?php echo $info->type; ?></td>

                                    <td align="center"> <?php echo $info->money; ?></td>

                                    <td> <?php echo $info->number; ?></td>

                                </tr>

                                <?php

                            }while($info=mysqli_fetch_object($sql));

                            ?>

                        </table>

                        <br>

                        找到相关记录 <?php $nums=mysql_num_rows($sql);echo $nums;?> 条    </td>

                </tr>
                <tr><td><a href="main.php">返回主页</a></td></tr>
            </table>

            <br></td>


    </tr>

</table>

</body>

</html>