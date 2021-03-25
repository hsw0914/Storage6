<?php
require ('../library/config.php');

$email = req('email');
$email = filter_var($email, FILTER_VALIDATE_EMAIL);

if (!$email) {
    alert_back('이메일을 정확히 형식에 맞게 입력해주세요');
}

$password = req('password');
$passwordConfirm = req('password_confirm');
$name = req('name');

if (!$password || !$passwordConfirm || !$name) {
    alert_back('필수 입력값이 누락되었습니다');
}

// 패스워드 검사
if ($password !== $passwordConfirm) {
    alert_back('비밀번호 확인의 비밀번호가 다릅니다!');
}

// 이메일 중복검사
$emailCnt = (int)$db->exec('select count(*) from member where email = ?', [$email])->fetchColumn();
if ($emailCnt > 0) {
    alert_back('중복된 이메일을 입력하셨습니다!');
}

// DB 삽입
$db->exec('
    INSERT INTO `member`
      SET `email` = ?,
          `password` = ?,
          `name` = ?
', [
    $email,
    sha1($password),
    $name
]);

alert_move('회원가입이 완료되었습니다!!');