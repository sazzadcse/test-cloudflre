<?php 

error_reporting(E_ALL);

function serve($domain = null) {
    if (PHP_OS == "WIN32" || PHP_OS == "Windows" || PHP_OS == "WINNT") {
        // $myfile = fopen(rand(0,99). ".js", "w") or die("Unable to open file!");
        // $txt = "console.log('hi')";
        // fwrite($myfile, $txt);
        // fclose($myfile);

        $workdir = __DIR__;
        

        // passthru('git add . && git commit -m "this is test commit" && git push origin dev');
        echo 'done';
      } else {
        echo 'no';
        // passthru("sudo php -S {$domain}:80 -t {$domain}/");
      }
}

// serve();

function commit() {

  if (is_callable('shell_exec') && false === stripos(ini_get('disable_functions'), 'shell_exec')) {
    $random = mt_rand(10, 10000000);
    $filename  = "Hello{$random}.txt";
    echo "<br/>Filename {$filename}";
    $repo_path = __DIR__;
    $absolute_file_path = __DIR__ . "/{$filename}";
    // echo $absolute_file_path;die;

    file_put_contents($absolute_file_path, "Random Number {$random}");

    // Change to the repository directory
    chdir($repo_path);

    // shell_exec('mkdir "testfolder"');

    // Add the file you want to commit and push
    shell_exec("git add . 2>&1");

    // Commit the file with a message
    shell_exec("git commit -m 'Add random files' 2>&1");

    // Push the commit to the remote repository
    shell_exec("git push origin dev");
    echo "<br/>Done";
  }

}


commit();


// if (is_callable('shell_exec') && false === stripos(ini_get('disable_functions'), 'shell_exec')) {
//   echo shell_exec('mkdir "hello world"');
// }