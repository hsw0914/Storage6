<?php include('../layout/header.php');
if (!$isUser) {
    alert_back('꺼저');
}
$idx = req('idx');
if ($idx) {
    $bData = $db->exec('select * from board where idx = ? and m_idx = ?', [$idx, $_SESSION['idx']])->fetch();
}
?>
<form action="/controller/write.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idx" value="<?=v($bData['idx'])?>">
    <h2>Write</h2>
    <p>email : <input type="text" name="email" id="email" value="<?=$_SESSION['email']?>" readonly></p>
    <p>작성자 : <input type="text" name="name" id="name" value="<?=$_SESSION['name']?>" readonly></p>
    <p>카테고리 :
        <select name="category" id="category" required>
            <?php foreach ($categoryData as $idx => $data): ?>
                <option value="<?=$idx?>"<?=(int)v($bData['category']) === $idx ? ' selected' : ''?>><?=$data['name']?></option>
            <?php endforeach ?>
        </select>
    </p>
    <p>제목 : <input type="text" name="title" id="title" value="<?=e(v($bData['title']))?>" required></p>
    <p>내용 : <textarea name="content" id="content" cols="30" rows="10" required><?=e(v($bData['content']))?></textarea></p>
    <p>이미지 : <input type="file" name="image" id="image" accept="image/*"></p>
    <input type="submit" value="OK">
</form>
<?php include('../layout/footer.php'); ?>