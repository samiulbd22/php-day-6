
<?php include 'header.php'?>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">String word count</div>
                        <div class="card-body">
                            <form action="action.php" method="POST">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Your string</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="string" value="<?php echo isset($result['string']) ? $result['string']:''; ?>"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Total Word</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="total_word" value="<?php echo isset($result['word']) ? $result['word']:''; ?>"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">total character</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="total_character" value="<?php echo isset($result['character'])? $result['character']:''; ?>"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" name="btn" value="Submit"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php'?>
