<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $db_host = 'database.50478ed7.34dc7ccb73b74b0780f6845f60b5fb55.mysql.managed-service.kr-central-1.kakaokic.com'; // 데이터베이스 호스트
    $db_username = 'admin'; // 데이터베이스 사용자 이름
    $db_password = 'admin1234'; // 데이터베이스 비밀번호
    $db_name = 'myweb'; // 데이터베이스 이름

    // 데이터베이스 연결
    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

    // 연결 확인
    if ($conn->connect_error) {
        die("데이터베이스 연결 실패: " . $conn->connect_error);
    }

    // 사용자 이름 가져오기
    $sql = "SELECT username FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo $row["username"] . "<br>";
}
    } else {
        echo "유저 이름이 없습니다.";
    }

    $conn->close();
}
?>