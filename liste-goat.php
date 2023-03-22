<!-- header -->
<?php
$title = "Liste de nos GOAT";
$bg = "bg-rose-500";
include('partials/_header.php');

//query for get all students
$goats =getALL('goat','id');
?>

<main>
<div class="overflow-x-auto">
  <table class="table table-zebra w-full">
    <!-- head -->
    <thead>
      <tr>
        <th>id</th>
        <th>Nom</th>
        <th>nationalité</th>
        <th>Entreprise</th>
        <th>voir</th>
      </tr>
    </thead>
    <tbody>
       <?php
      foreach($goats as $item){ ?>

      <!-- row 1 -->
      <tr>
        <th><?= $item['id'] ?></th>
        <td><?= $item['first_name']." ".$item['last_name'] ?></td>
        <td><?= $item['nationality'] ?></td>
        <td><?= $item['company_name'] ?></td>
        <td> <a href="show-goat.php?id=<?=$item['id']?>&name=<?=$item['first_name']?>">
          <i class="fa-solid fa-eye text-sky-300"></i>
          </a></td>
      </tr>
      <?php
      } ?>
    </tbody>
  </table>
</div>
</main>
<!-- footer -->
<?php
include('partials/_footer.php')
?>