<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php if (count($flash) > 0) { ?>
            <div class="alert alert-<?php echo $flash["flash"] ?>">
                <?php echo $flash["message"] ?>
            </div>
        <?php } ?>
        <form action="" method="GET">
            <div class="form-group clearfix">
            </div>
            <div class="form-group clearfix">
                <label class="col-xs-3">Date from</label>
                <div class="col-xs-9">
                    <input type="date" class="form-control" name="date_from" value="<?php echo @$request->query->get("date_from") ?>" required>
                </div>
            </div>
            <div class="form-group clearfix">
                <label class="col-xs-3">Date to</label>
                <div class="col-xs-9">
                    <input type="date" class="form-control" name="date_to" value="<?php echo @$request->query->get("date_to") ?>" required>
                </div>
            </div>
            <div class="form-group clearfix">
                <label class="col-xs-3">Amount</label>
                <div class="col-xs-9">
                    <input type="number" class="form-control" name="amount" value="<?php echo @$request->query->get("amount") ?>" required>
                </div>
            </div>
            <div class="form-group clearfix">
                <div class="col-xs-9 col-xs-offset-3">
                    <button class="btn btn-success" type="submit">Check</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>