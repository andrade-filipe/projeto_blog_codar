<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="">
        </div>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti impedit consequatur deleniti dolore temporibus, blanditiis asperiores voluptates quae adipisci nostrum repellendus! Obcaecati maiores ullam tenetur labore fugiat nulla fuga veritatis!
            Vel recusandae sint error doloribus! Ex, porro omnis. Minima accusantium voluptatem vitae, facilis magnam at repellendus impedit placeat, recusandae ullam, nesciunt earum natus unde optio obcaecati. Ipsam vero iure praesentium.
            Laboriosam vitae asperiores sapiente? Vitae dolores quam placeat ut adipisci perferendis enim odio ratione laboriosam. Cupiditate saepe, quia, pariatur quibusdam magni facilis vel incidunt corporis modi eius illo mollitia consequatur?
            Quas explicabo totam quae vero quod eos. Voluptatibus repudiandae suscipit ex dolorem, tempore asperiores ipsum atque quo id a veniam consequatur obcaecati qui vitae libero magni nesciunt soluta? Aperiam, dolores.
            A deserunt cum culpa iure magnam harum, commodi fuga temporibus ipsam amet necessitatibus neque in vel ea officiis animi distinctio enim! Itaque atque quidem tempora pariatur quia, ipsam ducimus minus!
        </p>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti impedit consequatur deleniti dolore temporibus, blanditiis asperiores voluptates quae adipisci nostrum repellendus! Obcaecati maiores ullam tenetur labore fugiat nulla fuga veritatis!
            Vel recusandae sint error doloribus! Ex, porro omnis. Minima accusantium voluptatem vitae, facilis magnam at repellendus impedit placeat, recusandae ullam, nesciunt earum natus unde optio obcaecati. Ipsam vero iure praesentium.
            Laboriosam vitae asperiores sapiente? Vitae dolores quam placeat ut adipisci perferendis enim odio ratione laboriosam. Cupiditate saepe, quia, pariatur quibusdam magni facilis vel incidunt corporis modi eius illo mollitia consequatur?
            Quas explicabo totam quae vero quod eos. Voluptatibus repudiandae suscipit ex dolorem, tempore asperiores ipsum atque quo id a veniam consequatur obcaecati qui vitae libero magni nesciunt soluta? Aperiam, dolores.
            A deserunt cum culpa iure magnam harum, commodi fuga temporibus ipsam amet necessitatibus neque in vel ea officiis animi distinctio enim! Itaque atque quidem tempora pariatur quia, ipsam ducimus minus!
        </p>
    </div>
    <aside class="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag) : ?>
                <li><a href="#"> <?= $tag ?> </a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category) : ?>
                <li><a href="#"> <?= $category ?> </a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>

<?php
include_once("templates/footer.php");
?>