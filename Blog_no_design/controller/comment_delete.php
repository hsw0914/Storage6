<?php

require('../library/config.php');

if ($db->exec('delete from comment where idx = ? and m_idx = ?', [req('idx'), v($_SESSION['idx'])])) {
    alert_move('삭제가 완료되었습니다!');
}
