<h4>ROC Details</h4>
@if(($asset->AssetGroup)==0)
{{-- Show NonGroup ROC --}}
{{-- <ul class="list-group">
    <li class="list-group-item"><b>Charge ID:</b> {{ $asset->nongroup->ROC->chargeID }}</li>
    <li class="list-group-item"><b>Date of Completion:</b> {{ $asset->nongroup->ROC->dateOfComp }}</li>
    <li class="list-group-item"><b>Remarks:</b> {{ $asset->nongroup->ROC->remarks}}</li>
</ul> --}}
@else
{{-- Show Group ROC --}}
{{-- <ul class="list-group">
    <li class="list-group-item"><b>Charge ID:</b> {{ $g->ROC->chargeID }}</li>
    <li class="list-group-item"><b>Date of Completion:</b> {{ $g->ROC->dateOfComp }}</li>
    <li class="list-group-item"><b>Remarks:</b> {{ $g->ROC->remarks}}</li>
</ul> --}}
@endif
