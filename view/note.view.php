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
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="text" name="articleid" value="<?= $note['articleid'] ?>" hidden>
                            <button type="submit" name="delete" class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">Cancella</button>
                        </form>
                        <a href="/note/edit?articleid=<?= $note['articleid']?>" class="bg-transparent hover:bg-sky-500 text-sky-700 font-semibold hover:text-white py-2 px-8 ml-5 border border-sky-500 hover:border-transparent rounded">Edit</a>
                    </div>

                </main>
            </div>


<?php require "partials/footer.php"; ?>