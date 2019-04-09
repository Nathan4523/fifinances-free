@extends('layouts.base') @section('content')
<section class="content" id="calender-section">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div id='calendar'></div>
                    {{-- <iframe src="https://calendar.google.com/calendar/embed?title=Agenda&amp;showTitle=0&amp;showPrint=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;hl=pt_BR&amp;bgcolor=%23ffffff&amp;src=camposnicolas45%40gmail.com&amp;color=%231B887A&amp;src=pt.brazilian%23holiday%40group.v.calendar.google.com&amp;color=%2329527A&amp;ctz=America%2FSao_Paulo"
                        style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe> --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection