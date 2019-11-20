<div class="col-md-6">
@include('home.shared')
    <div class="card">
        <div class="card-header">
            <div class="row">

                <div class="col-md-1">
                    <img class="img-circle" src="{{asset('img/user-default.png')}}"/>
                </div>

                <div class="col-md-6" style="margin-left: 10px">

                    <p style="font-size: 14px;margin: 0px;font-weight: 600">@UserName</p>

                    <p style="font-size: 14px">Full name</p>
                </div>

            </div>
        </div>

        <div class="card-body">
            ....
        </div>

        <div class="card-footer">
            <button class="btn btn-outline-success"><i class="far fa-thumbs-up"></i>
            </button>
            <br/>
            <div style="padding-top: 15px;"></div>
            <button class="btn btn-primary">Compartilhar</button>
        </div>
    </div>
</div>
