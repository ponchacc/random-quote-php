<?php
require_once 'dataset.php';

$random_number = rand(0, (count(DATASETS) - 1));
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Random Qoutes in PHP</title>

    <link rel="stylesheet" href="./style.css" />
  </head>
  <body class="h-[90vh]">

  <main class="flex h-full items-center justify-center content-center">
    <div class="flex items-center justify-center content-center w-1/2 h-1/2 mx-auto box-border p-6 bg-slate-300">
          <div class="text-center box-border p-6">
              <blockquote>
                  <strong>
                      <?php echo DATASETS[$random_number]['qoute'] ?>
                  </strong>
                  <cite class="d-block mt-md-2">
                      <?php echo " - " . DATASETS[$random_number]['source'] ?>
                  </cite>
              </blockquote>
              <button onclick="window.location.reload()" class="mt-4 px-7 py-4 bg-red-600 text-white font-semibold rounded-lg hover:bg-green-900 transition-all">রিফ্রেশ করুন</button>
          </div>
        </div>
    </body>
  </main>

  <footer class="bg-slate-400 text-gray-800 h-[10vh] text-center box-border p-5">
    <span>সৌজন্যে: মোঃ ওমর ফারুক | পলাশ মাহমুদ</span>
  </footer>
  
</html>
