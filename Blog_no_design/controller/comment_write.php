<?php

require('../library/config.php');

$db->exec('insert into comment SET 
  `m_idx` = ?,
  `email` = ?,
  `name` = ?,
  `b_idx` = ?,
  `content` = ?
', [
    $_SESSION['idx'],
    req('email'),
    req('name'),
    req('b_idx'),
    req('content')
]);

alert_move('댓글 작성이 완료되었습니다', '/view/detail.php?idx='.req('b_idx'));