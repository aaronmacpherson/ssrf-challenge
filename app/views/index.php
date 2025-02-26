<?php $title = 'Server-Side Request Forgery Challenge'; ?>
<?php include 'includes/header.php'; ?>

<body class="">
    <main class="m-2">
        <h1 class="text-3xl font-bold text-center"><?= $title ?></h1>
        <form id="fetch-url" method="POST">
            <input class="border-2 rounded p-1" type="text" name="url" placeholder="Insert URL" />
            <input class="text-white bg-blue-700 hover:bg-opacity-80 p-1 cursor-pointer rounded" type="submit" value="Submit" />
        </form>
        <div class="w-1/2 p-2 mt-2 <?= $urlResponse != "" ? "flex" : "hidden" ?> <?= $urlResponse == "Content Loaded" ? "text-green-700 bg-green-100 border border-green-700" : "text-red-500 bg-red-100 border border-red-500 p-2" ?>">
            <?= $urlResponse == "" ? "" : htmlspecialchars($urlResponse) ?>
        </div>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>

</html>
