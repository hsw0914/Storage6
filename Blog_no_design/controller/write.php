<?php
require('../library/config.php');

// 이미지 업로드
$image = v($_FILES['image']);
$imageFilename = '';
if (is_uploaded_file($image['tmp_name'])) {
    $exe = pathinfo($image['name'], PATHINFO_EXTENSION);
    if (strpos($image['type'], 'image') !== false) {
        $imageFilename = uniqid().'.'.$exe;
        move_uploaded_file($image['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/uploaded/'.$imageFilename);
    } else {
        alert_back('이미지 형식을 업로드해주세요');
    }
}

$idx = req('idx');
$requiredData = ['title', 'content', 'category'];
$whereData = [];
$setData = [];
$SQL = '';
if ($idx) {
    // 글수정
    $setData = [
        'title' => req('title'),
        'content' => req('content'),
        'category' => req('category'),
        'image' => $imageFilename,
    ];
    $SQL = 'update board set %s where `idx` = :idx';
    $whereData['idx'] = $idx;
    $message = '글 수정이 완료되었습니다';
} else {
    // 글등록
    $setData = [
        'title' => req('title'),
        'content' => req('content'),
        'category' => req('category'),
        'image' => $imageFilename,
        'email' => $_SESSION['email'],
        'name' => $_SESSION['name'],
        'm_idx' => $_SESSION['idx'],
    ];
    $SQL = 'insert into board set %s';
    $message = '글 작성이 완료되었습니다';
}
$setData = array_filter($setData, function ($v) {
    return trim($v) !== '';
});
$setDataKey = array_keys($setData);

// 필수값 누락 검사
if (count(array_intersect($setDataKey, $requiredData)) < count($requiredData)) {
    alert_back('누락값이 있습니다');
}

$db->exec(sprintf($SQL, implode(', ', array_map(function ($v) {
    return '`'.$v.'` = :'.$v;
}, $setDataKey))), array_merge($setData, $whereData));
alert_move($message);