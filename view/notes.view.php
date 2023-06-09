<?php require "partials/head.php"; ?>

            <div class="min-h-full">

                <?php require "partials/nav.php"; ?>

                <?php require "partials/banner.php"; ?>

                <main>
                    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                        <h2 class="mb-5">Your notes:</h2>

                            <?php foreach ($notes as $note) : ?>
                                
                                <li class="mb-5 hover:underline hover:text-blue-600"><a href="/note?articleid=<?= $note['articleid'] ?>"><?= $note['articolo'] ?></a></li>

                            <?php endforeach; ?>

                        <?php require "partials/form.php"; ?>
                    </div>
                </main>
            </div>


<?php require "partials/footer.php"; ?>