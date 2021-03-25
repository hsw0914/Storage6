<?php
    require('../library/config.php');

    // 카테고리 가져오기
    $categoryData = [];
    foreach ($db->exec('
        select c.*, (select count(b.idx) from board b where b.category = c.idx) as board_cnt
        from category c
        order by c.idx
    ') as $data) {
        $categoryData[$data['idx']] = $data;
    }

    // 전체 글 갯수 가져오기
    $boardCnt = (int)$db->exec('select count(*) from board')->fetchColumn();

    // 회원이 작성한 글갯수
    if ($isUser) {
        $userBoardCnt = (int)$db->exec('select count(*) from board where m_idx = ?', [$_SESSION['idx']])->fetchColumn();
    }

    // 글쓴놈만 가져오기
    $userWriteData = $db->exec('select count(b.idx) as board_cnt, m.name, m.idx, m.email
        from member m inner join board b on b.m_idx = m.idx
        group by b.m_idx
    ')->fetchAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Blog</title>
</head>
<body>
    <h1>Our Blog</h1>
    <?php if ($isUser): ?>
    <div>
        <h2>Hi</h2>
        <p>작성 글갯수 : <?=$userBoardCnt?>개</p>
        <a href="/controller/logout.php">로그아웃</a>
    </div>
    <?php else: ?>
    <form action="/controller/login.php" method="post">
        <h2>login</h2>
        <p>email: <input type="text" name="email"></p>
        <p>pw: <input type="password" name="password"></p>
        <p><input type="submit" value="login"> / <a href="/view/join.php">회원가입</a></p>
    </form>
    <?php endif ?>
    <div>
        <h2>Authors</h2>
        <ul>
            <?php foreach ($userWriteData as $data): ?>
                <li><a href="/view/index.php?author=<?=$data['idx']?>"><?=$data['name']?></a> (<?=$data['board_cnt']?>)</li>
            <?php endforeach ?>
        </ul>
    </div>
    <div>
        <h2>Category</h2>
        <ul>
            <li><a href="/view/index.php">전체 글 보기</a> (<?=$boardCnt?>)</li>
            <?php foreach ($categoryData as $idx => $data): ?>
            <li><a href="/view/index.php?category=<?=$idx?>"><?=$data['name']?></a> (<?=$data['board_cnt']?>)</li>
            <?php endforeach ?>
        </ul>
    </div>
    <div>
        <h2>Search</h2>
        <form action="/view/index.php" method="get">
            <p>Keyword : <input type="search" name="search" id="search" value="<?=e(req('search'))?>"></p>
            <input type="submit" value="Search">
        </form>
    </div>
