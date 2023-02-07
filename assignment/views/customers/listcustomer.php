<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <button><a href="?url=add-customer">thêm</a></button>
    <table border="1">
        <tr>
            <td>id</td>
            <td>tên khách hàng</td>
            <td>sđt</td>
        </tr>
        <?php foreach ($customers as $key=>$value) { ?>
        <tr>
            <td><?php echo $value['id']; ?></td>
            <td><?php echo $value['ten_kh']; ?></td>
            <td><?php echo $value['sdt']; ?></td>
            <td><a href="?url=remove-customer&id=<?php echo $value['id']; ?>">xóa</a></td>
            <td><a href="?url=edit-customer&id=<?php echo $value['id']; ?>">sửa</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
