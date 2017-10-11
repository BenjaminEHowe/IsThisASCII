<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Is This ASCII?</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Is This ASCII?</h1>
                    <p>This is a simple tool designed to help students check if a file is a plain text file encoded using ASCII or not.</p>
                    <?php
                    if(!empty($_FILES["fileToUpload"]["tmp_name"])) { // if a file was successfully uploaded, check it
                        $mime = finfo_file(finfo_open(FILEINFO_MIME), $_FILES["fileToUpload"]["tmp_name"]);
                        if($mime == "text/plain; charset=us-ascii") {
                            echo('<div class="alert alert-success"><strong>Yes!</strong> The file uploaded was a plain text file encoded using ASCII.</div>');
                        } else {
                            echo('<div class="alert alert-danger"><strong>No!</strong> The file uploaded was ' . $mime . '.</div>');
                        }
                    }
                    ?>
                    <form action="/" method="post" enctype="multipart/form-data" style="margin-bottom:10px;">
                        <input type="file" name="fileToUpload" id="fileToUpload" style="margin: 0 auto 5px;">
                        <input type="submit" value="Upload" name="submit">
                    </form>
                    <p><em>Please note, while every attempt has been made to ensure the accuracy and completeness of this tool, the author accepts no responsiblilty for any errors or ommisions. Users of this tool accept that they are solely responsible for ensuring work is submitted in the correct format.</em></p>
                    <p>Created by <a href="https://www.bh96.uk/">Benjamin Howe</a> to help students correctly submit work for <a href="https://www.reading.ac.uk/computer-science/dcs-bio-pat-parslow.aspx">Pat Parslow's</a> <a href="https://www.reading.ac.uk/modules/document.aspx?modP=CS3SL16&modYR=1617">SLEASE</a> module at the <a href="https://www.reading.ac.uk/">University of Reading</a>. Source available on <a href="https://github.com/BenjaminEHowe/IsThisASCII">GitHub</a>.</p>
                </div>
            </div>
        </div>
    </body>
</html>