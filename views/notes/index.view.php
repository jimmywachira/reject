<?php 
require base_path('views/partials/head.php');
require base_path('views/partials/nav.php');
require base_path('views/partials/banner.php'); 
?>

<main>
    <div class="card p-2 m-2 shadow">

        <img class="full rounded-t" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">

        <div>
            <ul class="p-2 border m-2">
                <?php foreach($notes as $note): ?>
                    <a href="/note?id=<?= $note['id']; ?>" class="text-blue-600">
                        <li class="p-2 border m-2">
                            <?= htmlspecialchars($note['title']); ?>
                        </li>
                    </a>
                    <li class="text-black-600"><?= htmlspecialchars($note['body']); ?> </li>
                <?php endforeach ;?>
            </ul>
        </div>

        <div class="px-4 py-3 text-right sm:px-6">
            <a href="/notes/create"
                title="opens this post"
                class="inline-flex justify-center rounded border border-transparent bg-blue-600 py-2 px-4 text-white shadow-sm hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                create note
            </a>
        </div>
    </div>  
</main>

<?php require "../views/partials/footer.php";?>