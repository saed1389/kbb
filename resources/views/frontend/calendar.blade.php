@extends('frontend.layouts.app')
@section('title')
    Etkinlik Takvimi - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
@endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('front/assets/css/other-page.css') }}" >
    @endpush
    <div class="tp-breadcrumb__area p-relative fix tp-breadcrumb-height" data-background="{{ asset('assets/img/pages/so-banner.jpg') }}" style="background-image: url(&quot;{{ asset('assets/img/pages/so-banner.jpg') }}&quot;);">
        <div class="tp-breadcrumb__shape-1 z-index-5">
            <img src="{{ asset('front/assets/img/breadcrumb/breadcrumb-shape-1.png') }}" alt="">
        </div>
        <div class="tp-breadcrumb__shape-2 z-index-5">
            <img src="{{ asset('front/assets/img/breadcrumb/breadcrumb-shape-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-breadcrumb__content z-index-5">
                        <div class="tp-breadcrumb__list">
                            <span><a href="/">Anasayfa</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span>Etkinlik Takvimi</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Etkinlik Takvimi</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-about__area tp-about__space">
        <div class="container">
            <div class="row align-items-xl-start align-items-center">
                <div class="col-xl-12 col-lg-12 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".7s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.7s; animation-name: tpfadeRight;">
                    <div class="tp-about__right-side tp-about__right-box">
                        <div class="tp-about__content">
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.11/index.global.js" integrity="sha512-f9WyGYcRzTKXCWy0pxm+qRi/yK2s4MpPEvAZMMYmHUKBERiDJ5uKVjn2Q142bpfkQ/+dE3CH5P9J3Z87kxdnNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    locale: "tr",
                    initialView: 'dayGridMonth',
                    headerToolbar: {
                        left: 'prevYear,prev,next,nextYear today',
                        center: 'title',
                        right: 'dayGridMonth,dayGridWeek,dayGridDay'
                    },
                    events: function(info, successCallback, failureCallback) {
                        var start = info.startStr;
                        var end = info.endStr;

                        $.ajax({
                            url: "{{ route('calenderEvents') }}",
                            method: 'GET',
                            data: {
                                start: start,
                                end: end
                            },
                            success: function(response) {
                                successCallback(response.events);
                            },
                            error: function(xhr, status, error) {
                                failureCallback(error);
                            }
                        });
                    },
                    eventClick: function(info) {
                        info.jsEvent.preventDefault(); // prevent browser's default click action

                        if (info.event.url === null) {
                            window.open(info.event.url, '_blank'); // open the event's URL in a new tab
                        } else {
                            alert('Bu etkinliğin URL\'si yok'); // handle cases where there is no URL
                        }
                    }
                });

                calendar.setOption('locale', 'tr');
                calendar.render();
            });
        </script>
    @endpush
@endsection
