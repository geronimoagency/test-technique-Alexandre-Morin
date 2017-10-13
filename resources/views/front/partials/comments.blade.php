<div class="modal fade" id="comments" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="{{ url('imgs/close.svg') }}" alt="close"></span></button>
                <div class="row">
                    <div class="col-md-4">
                        <img src="" alt="" class="img-responsive center-block tn">
                    </div>
                    <div class="col-md-8">
                        <h3></h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <h4>Commentaires (<span></span>)</h4>
                    <form action="" method="post" class="form-horizontal" id="commentsForm">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="content" class="col-sm-1 control-label"><img src="{{ url('imgs/user.svg') }}" alt=""></label>
                            <div class="col-sm-11">
                                <input type="text" class="form-control input-lg" id="content" name="content" placeholder="Laissez votre commentaire ici...">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="text-right">
                                <button type="submit" class="btn btn-send">Send</button>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
                <div class="row">
                    <article>
                        <h5></h5>
                        <p class="date"></p>
                        <p></p>
                    </article>
                </div>
            </div>
            <button class="btn btn-load btn-block">Load more</button>
        </div>
    </div>
</div>