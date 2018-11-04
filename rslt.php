<!DOCTYPE HTML>
    <html>
        <head>
        <link rel="icon" href="favico.ico">
            <meta charset="utf-8">
            <title>مشروع القاموس</title>
            <style>
                 body {margin:0;padding:0;}
                .header {background:#2B60DE;color:#fff;font-size:40px;font-family:Old Antic;text-align:center;padding:20px 0}
                .menu {background:#DDD;color:#676767;text-align:center;font-size:25px;font-family:Old Antic}
                ul {list-style:none;padding:0;margin:0}
                ul li {display:inline-block;padding:10px}
                .content {text-align:right;font-family:Akhbar MT;font-size:40px;font-style:bold}
                .input{text-align:center;}
                .enwordtextbox{width:500px;height:25px;}
                .tbtn{height:30px;}
                span {text-align:CENTER;font-family:Arial;font-size:20px;font-style:bold}
                .footer {background:#2B60DE;color:#FFF;font-size:20px;font-family:Comic Sans MS;text-align:center}
                .roya {font-family:Old Antic;font-size:25px}
                .table{text-align: center;}
            </style>
        </head>
        <body>
            <div class="header">
                مشروع القاموس
            </div>
            <div class="menu">
                <ul>

                    <li>
                        <a href="delete.php">حذف المصطلح</a>
                    </li>
                    <li>
                      <a href="edit.php">تعديل مصطلح</a>  
                    </li>
                    <li>
                      <a href="add.php">إضافة مصطلح</a>  
                    </li>
                    <li>
                      <a href="index.php">الرئيسية</a>  
                    </li>
                </ul>
            </div>
            <div class="content">
               <span><h1>تم ترجمة الكلمة بنجاح</h1></span> 
               <?php
                    include("cdb.php");
                    $enword = $_POST['enword'];
                    $stmt = $db->prepare("SELECT * FROM words where enword='$enword'");
                    $stmt->execute();
                    $rslt = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
            </div>
            <div class="table">
            <table width="600" border="1" align=center>
            <tr>
                <th>معرف الكلمة</th><th>الكلمة باللغة الإنجليزية</th><th>الكلمة باللغة العربية</th>
            </tr>
            <?php
                echo "<tr>";
                echo "<td>$rslt[id]</td>";
                echo "<td>$rslt[enword]</td>";
                echo "<td>$rslt[arword]</td>";
                echo "</tr>";
            ?>
        </table>
        </div>
        <br>
            <div class="footer">
                هذا المشروع بواسطة كيرلس وليد راضي - 01062704413
            </div>
        </body>
    </html>
	