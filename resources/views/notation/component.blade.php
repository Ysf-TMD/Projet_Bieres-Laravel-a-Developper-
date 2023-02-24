<h3 class="text-center">Note moyenne : {{$note/20}}/5 ({{$avis}} avis)</h3>
<div class="star-ratings-sprite"><span style="width:{{$note}}%" class="star-ratings-
sprite-rating"></span></div>
<hr style="border:3px solid #f1f1f1">
<div class="row">
    <div class="col-1">
        5 <i class="fas fa-star"></i>
    </div>
    <div class="col-6">
        <div class="progress progress-line-primary">
            <div class="progress-bar progress-bar-primary" role="progressbar"
                 aria-valuenow="{{$avisParNote[5]/$avis*100}}" aria-valuemin="0" aria-valuemax="100"
                 style="width: {{$avisParNote[5]/$avis*100}}%;">
                <span class="sr-only">{{$avisParNote[5]/$avis*100}}% avis</span>
            </div>
        </div>
    </div>
    <div class="col-3">
        {{$avisParNote[5]}} avis
    </div>
</div>
<div class="row">
    <div class="col-1">
        4 <i class="fas fa-star"></i>
    </div>
    <div class="col-6">
        <div class="progress progress-line-success">
            <div class="progress-bar progress-bar-success" role="progressbar"
                 aria-valuenow="{{$avisParNote[4]/$avis*100}}"
                 aria-valuemin="0" aria-valuemax="100" style="width: {{$avisParNote[
4]/$avis*100}}%;">
                <span class="sr-only">{{$avisParNote[4]/$avis*100}}% avis</span>
            </div>
        </div>
    </div>
    <div class="col-3">
        {{$avisParNote[4]}} avis
    </div>
</div>
<div class="row">
    <div class="col-1">
        3 <i class="fas fa-star"></i>
    </div>
    <div class="col-6">
        <div class="progress progress-line-info">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{$avisParNote[3]/$avis*100}}"
                 aria-valuemin="0" aria-valuemax="100" style="width: {{$avisParNote[
3]/$avis*100}}%;">
                <span class="sr-only">{{$avisParNote[3]/$avis*100}}% avis</span>
            </div>
        </div>
    </div>
    <div class="col-3">
        {{$avisParNote[3]}} avis
    </div>
</div>
<div class="row">
    <div class="col-1">
        2 <i class="fas fa-star"></i>
    </div>
    <div class="col-6">
        <div class="progress progress-line-success">
            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="{{$avisParNote[2]/$avis*100}}"
                 aria-valuemin="0" aria-valuemax="100" style="width: {{$avisParNote[
2]/$avis*100}}%;">
                <span class="sr-only">{{$avisParNote[2]/$avis*100}}% avis</span>
            </div>
        </div>
    </div>
    <div class="col-3">
        {{$avisParNote[2]}} avis
    </div>
</div>
<div class="row">
    <div class="col-1">
        1 <i class="fas fa-star"></i>
    </div>
    <div class="col-6">
        <div class="progress progress-line-warning">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="{{$avisParNote[1]/$avis*100}}"
                 aria-valuemin="0" aria-valuemax="100" style="width: {{$avisParNote[
1]/$avis*100}}%;">
                <span class="sr-only">{{$avisParNote[1]/$avis*100}}% avis</span>
            </div>
        </div>
    </div>
    <div class="col-3">
        {{$avisParNote[1]}} avis
    </div>
</div>
<div class="row">
    <div class="col-1">
        0 <i class="fas fa-star"></i>
    </div>
    <div class="col-6">
        <div class="progress progress-line-danger">
            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{$avisParNote[0]/$avis*100}}"
                 aria-valuemin="0" aria-valuemax="100" style="width: {{$avisParNote[
0]/$avis*100}}%;">
                <span class="sr-only">{{$avisParNote[0]/$avis*100}}% avis</span>
            </div>
        </div>
    </div>
    <div class="col-3">
        {{$avisParNote[0]}} avis
    </div>
</div>
<hr style="border:3px solid #f1f1f1">
