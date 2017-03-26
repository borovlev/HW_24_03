<h1>Books</h1>

<style type="text/css">
    .book-item {
        width: 100px;
        height: 200px;
        float: left;
        border: 1px solid black;
        margin: 0 0 5px 5px;
        padding:10px;
    }
    
    .book-item div {
        height: 50px;
        font-weight: bold;
        
    }
</style>

<form action="/index.php">
    <input type="hidden" name="page" value="books"/>
    Sort by:
    <select name='sort'>
        <!-- Добавил тернарный оператор для запоминания выбора -->
        <option <?php echo ($sortField == "price") ? "Selected" : " " ;?>  value="price">Price</option>
        <option <?php echo ($sortField == "title") ? "Selected" : " " ;?>  value="title">Title</option>
    </select>

    Order:
    <select name='order'>
        <!-- Добавил тернарный оператор для запоминания выбора  -->
        <option  <?php echo ($sortOrder == "asc") ? "Selected" : " " ;?> value="asc">ASC</option>
        <option  <?php echo ($sortOrder == "desc") ? "Selected" : " " ;?> value="desc">DESC</option>
    </select>

    <button>Go</button>
</form>

<div class='books'>
    <?php foreach ($books as $key => $book) : ?>
        <div class='book-item'>
            <div><?=$book['title']?></div>
            <hr>
            <?=$book['price']?>
            <br>
            <br>
            <a href="/index.php?page=book_item&amp;id=<?=$book['id']?>">Details</a>

        </div>
    <?php endforeach ?>
</div>
<br clear='both'>
