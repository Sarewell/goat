<!-- header -->
<?php
$title = "Liste de nos GOAT";
$bg = "bg-rose-500";
include('partials/_header.php');
//query for get all students
$item = get('goat');
?>
<!-- body -->
<main>
    <div class="card  text-center flex-shrink-0 w-full max-w-sm bg-base-200 shadow-xl m-auto mt-20">
        <figure><img src="<?=$item['url_img'] ?>"alt= "movie" /></figure>
        <div class="card-body">
            <p class=""><?= $item['first_name'] ,$item['last_name']?></p>
            <p class="">nationalité: <?= $item['nationality']?></p>
            <p class="">compagnie: <?= $item['company_name']?></p> 
            <p class="">description: <?= $item['description']?><p>
                <div class="mt-10 text-center">
                <a class="btn btn-info ">modifier</a>
                <a  href="delete.php?id=<?=$item['id']?>"class="btn btn-active btn-error">supprimer</a>
                </div>

    </div>
    </div>                   
</main>
<!-- footer -->
<?php
include('partials/_footer.php')
?>