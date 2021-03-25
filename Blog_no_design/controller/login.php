<?php

require ('../library/config.php');

$userInfo = $db->exec('select * from member where email = ? and password = ?', [
    req('email'),
    sha1(req('password'))
])->fetch();

if ($userInfo) {
    $_SESSION['idx'] = $userInfo['idx'];
    $_SESSION['email'] = $userInfo['email'];
    $_SESSION['name'] = $userInfo['name'];
    alert_move('로그인이 완료되었습니다');
} else {
    alert_back('아이디 혹은 비밀번호가 틀렸습니다!');
}