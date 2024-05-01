@extends('frontend.layouts.app')
@section('title')
    Üyelik Koşulları - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
@endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('front/assets/css/other-page.css') }}">
    @endpush
    <div class="tp-breadcrumb__area p-relative fix tp-breadcrumb-height"
         data-background="{{ asset('assets/img/pages/so-banner.jpg') }}"
         style="background-image: url(&quot;{{ asset('assets/img/pages/so-banner.jpg') }}&quot;);">
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
                            <span>Üyelik Koşulları</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Üyelik Koşulları</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-mission-2__area tp-mission-2__space p-relative fix z-index">
        <div class="tp-mission-2__plr">
            <div class="container-fluid g-0">
                <div class="col-md-12">
                    <div class="row">
                        <div id="menuContent">
                            <p><strong>Dernek Üyeleri, Üye Olma, Üyelikten Çıkma ve Çıkarılma:</strong>&nbsp;</p>
                            <p><strong>Üyelik asil ve onursal olmak üzere iki şekilde olur.</strong>&nbsp;</p>
                            <p><strong>Asil Üye:</strong>&nbsp;Gerçek ve tüzel kişiler bu Derneğe üye olma başvuru hakkına sahiptir. Kulak Burun Boğaz Uzman hekimleri ve Kulak Burun Boğaz Uzmanlık Öğrencileri(asistanlar) kişinin başvurusu ve Derneğin Yönetim Kurulu kararı ile asil üyeliğe kabul edilirler. Asil üyeler yıllık aidat ödemekle yükümlüdürler.&nbsp;</p>
                            <p><strong>Onursal Üye:</strong>&nbsp;Yurt içinde ve dışında Derneğe karşı yakın ilgi gösterenler ve destek olanlar, çalışmalarıyla Kulak Burun Boğaz ve Baş Boyun Cerrahisi alanında yüksek başarılar sağlamış, bu bilim dalının gelişmesine katkıda bulunmuş kişiler ve uzun yıllar mesleğe hizmet etmiş üyeler onursal üye olabilirler. Yönetim Kurulunca seçilirler. Asil üye olmayan onursal üyelerin oy hakkı yoktur. Onursal üyelerden aidat alınmaz, fakat Derneğin kongre dahil her türlü çalışmasına katılım ücreti ödemeden katılabilirler. Türk vatandaşı olmayan onursal üyelerde ikamet şartı aranmaz.&nbsp;</p>
                            <p><strong>Üyelikten çıkma ve çıkarılma;</strong></p>
                            <p>Her üye yazılı dilekçe ile Dernekten istifa edebilir. Üyelikten ayrılma üyenin Derneğe olan birikmiş borçlarının yükümlülüğünü sona erdirmez.&nbsp;</p>
                            <p>Hekimlik etik ve kuralları ile Dernek Tüzük ve Yönetmelikleri hükümlerine uymayan, Dernek amaç ve çalışma konularına aykırı davranan veya temyiz kudretini kaybedenler Onur ve Etik Kurulunun önerisi ve Yönetim Kurulu kararıyla üyelikten çıkarılır.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
