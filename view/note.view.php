<?php require "partials/head.php"; ?>

            <div class="min-h-full">

                <?php require "partials/nav.php"; ?>

                <?php require "partials/banner.php"; ?>

                <main>
                    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
  
                                <p><?= $note['articolo'] ?></p>

                    </div>

                    <div class="flex justify-center">
                        <form action="" method="post">
                            <input type="text" name="articleid" value="<?= $note['articleid'] ?>" hidden>
                            <button type="submit" name="delete" class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">Cancella</button>
                        </form>
                    </div>

                </main>
            </div>


<?php require "partials/footer.php"; ?>