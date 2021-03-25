<?php include('../layout/header.php');

// 검색 조건
$whereCategory = req('category');
$whereAuthor = req('author');
$whereSearch = req('search');

// 페이징 조건
$page = (int)req('page', 1);
$limit = 5;
$pageLimit = 5;
$startLimit = ($page - 1) * $limit;

// 검색 실행
$whereData = ['1'];
$execData = [];
$queryData = [];
if ($whereCategory) {
    $whereData []= '`category` = :category';
    $queryData['category'] = $execData['category'] = $whereCategory;
}
if ($whereAuthor) {
    $whereData []= '`m_idx` = :author';
    $queryData['author'] = $execData['author'] = $whereAuthor;
}
if ($whereSearch) {
    $whereData []= '`title` LIKE :search OR `content` LIKE :search';
    $queryData['search'] = $whereSearch;
    $execData['search'] = '%'.$whereSearch.'%';
}

// 총 게시물 갯수
$whereStr = implode(') AND (', $whereData);
$totalBoardCnt = (int)$db->exec('select count(*) from board where ('.$whereStr.')', $execData)->fetchColumn();

// 페이징 실행
$totalPage = (int)ceil($totalBoardCnt / $limit);

$startPage = $page;
$lastPage = $totalPage;
$startPage -= 2;
if ($startPage < 1) {
    $startPage = 1;
} else if ($startPage + $pageLimit - 1 > $totalPage) {
    $startPage = $totalPage - $pageLimit + 1;
}
$lastPage = $startPage + $pageLimit - 1;
if ($lastPage > $totalPage) {
    $lastPage = $totalPage;
}

// 게시물 데이터
$boardData = $db->exec('
    SELECT b.*,
            (select count(c.idx) from comment c where c.b_idx = b.idx) as comment_cnt
    FROM board b
    WHERE ('.$whereStr.')
    ORDER BY `idx` DESC
    LIMIT '.$startLimit.', '.$limit.'
', $execData)->fetchAll();
$searchQuery = http_build_query(array_map('e', $queryData));
?>
<div>
    <h2>List</h2>
    <?php if ($isUser): ?>
        <p>
            <a href="/view/write.php">글쓰기</a>
        </p>
    <?php endif ?>
    <table border="1" style="width:100%">
        <thead>
        <tr>
            <th>번호</th>
            <th>이미지</th>
            <th>제목</th>
            <th>내용</th>
            <th>카테고리</th>
            <th>작성일</th>
            <th>댓글수</th>
            <th>-</th>
        </tr>
        </thead>
        <tbody>
            <?php if ($totalBoardCnt === 0) : ?>
            <tr>
                <td colspan="7">게시물이 없습니다</td>
            </tr>
            <?php else: ?>
            <?php foreach ($boardData as $data): ?>
            <tr>
                <td><?=$data['idx']?></td>
                <td>
                    <?php if ($data['image']): ?>
                        <img src="/uploaded/<?=$data['image']?>" alt="" style="max-width: 200px;max-height: 200px;">
                    <?php endif ?>
                </td>
                <td><a href="/view/detail.php?idx=<?=$data['idx']?>"><?=e($data['title'])?></a></td>
                <td><?=e(cut_str($data['content'], 300))?></td>
                <td><?=$categoryData[$data['category']]['name']?></td>
                <td><?=$data['date']?></td>
                <td><?=$data['comment_cnt']?></td>
                <td>
                    <?php if ($data['m_idx'] === v($_SESSION['idx'])): ?>
                        <a href="/view/write.php?idx=<?=$data['idx']?>">수정</a> /
                        <a href="/controller/delete.php?idx=<?=$data['idx']?>" onclick="return confirm('정말로 삭제하시겠습니까?');">삭제</a> /
                    <?php endif ?>
                    <a href="/view/detail.php?idx=<?=$data['idx']?>">더보기</a>
                </td>
            </tr>
            <?php endforeach ?>
            <?php endif ?>
        </tbody>
    </table>
    <footer>
        <?php if ($page === 1): ?>
            <span><</span>
        <?php else : ?>
            <span><a href="?page=<?=$page-1?>&<?=$searchQuery?>"><</a></span>
        <?php endif ?>
        <?php for ($i = $startPage; $i <= $lastPage; $i ++): ?>
            <?php if ($i === $page): ?>
                <strong style="background-color: #000000;color: #ffffff;"><?=$i?></strong>
                <?php else: ?>
            <span><a href="?page=<?=$i?>&<?=$searchQuery?>"><?=$i?></a></span>
                <?php endif ?>
        <?php endfor ?>
        <?php if ($page === $totalPage): ?>
            <span>></span>
        <?php else : ?>
            <span><a href="?page=<?=$page+1?>&<?=$searchQuery?>">></a></span>
        <?php endif ?>
    </footer>
</div>
<?php include('../layout/footer.php'); ?>