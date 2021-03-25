<?php include('../layout/header.php');
$viewData = $db->exec('select * from board where idx = ?', [req('idx')])->fetch();
$commentData = $db->exec('select * from comment where b_idx = ?', [req('idx')])->fetchAll();
?>
<div style="width:600px">
    <h2>View</h2>
    <p>Title : <?=e($viewData['title'])?></p>
    <p>Content :
    <?php if ($viewData['image']): ?>
        <p><img src="/uploaded/<?=$viewData['image']?>" alt="" style="max-width: 100%;"></p>
    <?php endif ?>
        <?=e($viewData['content'])?></p>
    <p>Category : <?=$categoryData[$viewData['category']]['name']?></p>
    <p>Author : <?=$viewData['name']?></p>
    <p>Date : <?=$viewData['date']?></p>
    <p>Comment Count : <?=count($commentData)?></p>

    <footer>
        <a href="/view/index.php">목록으로</a>
        <?php if ($isUser && $viewData['m_idx'] === $_SESSION['idx']): ?>
        / <a href="/view/write.php?idx=<?=$viewData['idx']?>">수정</a>
        / <a href="/controller/delete.php?idx=<?=$viewData['idx']?>" onclick="return confirm('정말로 삭제하시겠습니까?')">삭제</a>
        <?php endif ?>
    </footer>

</div>
    <hr>
<?php if ($isUser): ?>
    <form action="/controller/comment_write.php" method="post">
        <input type="hidden" name="b_idx" value="<?=$viewData['idx']?>">
        <h2>Comment Form</h2>
        <p>작성자 : <input type="text" name="name" id="name" value="<?=$_SESSION['name']?>"></p>
        <p>이메일 : <input type="text" name="email" id="email" value="<?=$_SESSION['email']?>"></p>
        <p>내용 : <input type="text" name="content" id="content"></p>
        <input type="submit" value="OK">
    </form>
    <?php endif ?>
    <hr>
<section>
    <h2>Comment List</h2>
    <ul>
        <?php if (count($commentData) === 0): ?>
            <li>No Data</li>
        <?php else: ?>
            <?php foreach($commentData as $data): ?>
            <li>
                <p>Author : <?=e($data['name'])?></p>
                <p>Email : <?=e($data['email'])?></p>
                <p>Date : <?=e($data['date'])?></p>
                <p>Content : <?=e($data['content'])?></p>
                <?php if ($isUser && $data['m_idx'] === $_SESSION['idx']): ?>
                    <a href="/controller/comment_delete.php?idx=<?=$data['idx']?>" onclick="return confirm('정말로 삭제하시겠습니까?')">삭제</a>
                    <?php endif ?>
            </li>
            <?php endforeach ?>
        <?php endif ?>
    </ul>
</section>
<?php include('../layout/footer.php'); ?>