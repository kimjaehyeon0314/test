<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <script type="text/javascript">
        function showUserList() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById("userList").innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET", "get_user_list.php", true);
            xhr.send();
        }
    </script>
</head>
<body>

    <?php
    $ip_address = $_SERVER['REMOTE_ADDR'];
    echo "<h2>당신의 IP 주소는: " . $ip_address . "</h2>";

    $HOST_NAME = ($_ENV['HOSTNAME']) ? $_ENV['HOSTNAME'] : php_uname('n');
    echo "<h2>호스트명: " . $HOST_NAME . "</h2>";
    ?>
    <h2>유저 목록</h2>
    <button onclick="showUserList()">유저 이름 가져오기</button>
    <div id="userList"></div>
</body>
</html>