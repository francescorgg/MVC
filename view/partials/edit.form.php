<form class="mt-20" method="post">
            <div class="m-5">
                <?= (isset($errors['comment']) ? '<div class="animate-bounce text-red-600">'.$errors['comment'].'</div>' : '') ?>
           </div>
   <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
       <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
           <label for="comment" class="sr-only">Your comment</label>
           <textarea id="comment" name="comment" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write a comment..."><?= $note['articolo'] ?></textarea>
       </div>
       <div class="px-3 py-2 border-t dark:border-gray-600">
           <button type="submit" class="py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
               Post comment
           </button>
           <a href="/note?articleid=<?= $_GET['articleid']?>" class="inline-flex items-start py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">Annulla</a>
       </div>
   </div>
</form>