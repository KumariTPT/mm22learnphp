<?php include __DIR__ . '/../partials/header.php'; ?>

<main class="container" style="text-align: center;">

    <h1 style="font-family: 'Courier New', monospace; color: #007bff;"><?= $post->title ?></h1>

    <div style="display: inline-block; text-align: left; border: 1px solid #ccc; padding: 15px; margin-top: 20px;">
        <p style="color: #222;"><?= $post->body ?></p>
    </div>

</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>