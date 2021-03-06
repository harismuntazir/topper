<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert new data - Topper</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background-color:rgb(231,231,231);">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="margin-top:48px;"><strong>Topper</strong></h1>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top:21px;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p style="color:rgb(46,42,247);"><strong id="msg"></strong></p>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top:21px;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p style="color:rgb(247,25,22);"><strong id="error-msg"></strong></p>
                </div>
            </div>
        </div>
    </div>
	<form action="save.php" method="POST">
    <div class="align-items-center align-content-center align-self-center" style="margin-top:25px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xl-6 align-self-center"><label class="col-form-label" style="font-size:22px;"><strong>Title/Name</strong></label></div>
                <div class="col-md-4 col-xl-6 align-self-center"><label class="col-form-label" style="font-size:22px;"><strong>From</strong></label></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6"><input class="d-block" type="text" name="name" required="" placeholder="how foreach loop work in kotlin" style="width:95%;margin-top:20px;"></div>
                <div class="col-md-6"><input class="d-block" type="text" name="related" required="" placeholder="php, javascript, html" style="margin-top:20px;width:95%;"></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin-top:20px;">
                    <h3 style="margin-bottom:0px;margin-top:20px;">Describe</h3>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"><textarea rows="8" name="desc" placeholder="put all the description and definition of your topic here" style="margin-top:24px;height:300px;"></textarea></div>
            </div>
        </div>
    </div>
    <div>
	<input type="hidden" name="operation" value="insert"/>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin-top:20px;"><input class="btn btn-primary" type="submit" value="Save" style="margin-top:5px;width:144px;height:50px;background-color:rgb(238,37,121);"/></div>
            </div>
        </div>
    </div>
	</form>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin:20px;"></div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>