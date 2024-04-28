@extends('frontend.layouts.app')
@section('title')
    Linkler - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span> <a href="{{ route('bilgi-merkezi') }}">Bilgi Merkezi</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span>Linkler</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Linkler</h3>
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
                        <div class="col-md-6">
                            <ol class="alternating-colors">
                                <li class="li-item">
                                    <strong class="strong">KBB Anabilim Dalları</strong>
                                    <ul class="under-list">
                                        <li><p><a href="https://www.akdeniz.edu.tr/" target="_blank">Akdeniz Üniversitesi K.B.B. ve Bas-Boyun Cerrahisi Anabilim Dali</a></p></li>
                                        <li><p><a href="https://www.ankara.edu.tr/" target="_blank">Ankara Üniversitesi Kulak Burun Bogaz ve Bas-Boyun Cerrahisi Anabilim Dali</a></p></li>
                                        <li><p><a href="https://www.kentkbb.com/" target="_blank">Baskent Üniversitesi Kulak Burun Bogaz ve Bas-Boyun Cerrahisi Anabilim Dali</a></p></li>
                                        <li><p><a href="https://med.ege.edu.tr/" target="_blank">Ege Üniversitesi Kulak Burun Bogaz ve Bas-Boyun Cerrahisi Anabilim Dali</a></p></li>
                                        <li><p><a href="https://kbb.hacettepe.edu.tr/" target="_blank">Hacettepe Üniversitesi Kulak Burun Bogaz ve Bas-Boyun Cerrahisi Anabilim Dali</a></p></li>
                                        <li><p><a href="https://www.inonu.edu.tr/tip" target="_blank">Inönü Üniversitesi Turgut Özal Tip Merkezi K.B.B. ve Bas-Boyun Cerrahisi ABD</a></p></li>
                                        <li><p><a href="https://www.pau.edu.tr/" target="_blank">Pamukkale Üniversitesi K.B.B. ve Bas-Boyun Cerrahisi Anabilim Dali</a></p></li>
                                        <li><p><a href="https://kbb.uludag.edu.tr/" target="_blank">Uludag Üniversitesi Tip Fakültesi K.B.B. Anabilim Dali</a></p></li>
                                    </ul>
                                </li>
                                <li class="li-item">
                                    <strong class="strong">Ulusal KBB linkleri</strong>
                                    <ul class="under-list">
                                        <li><p><a href="https://www.tkbbv.org.tr/" target="_blank">Türk Kulak Burun Bogaz Bas ve Boyun Cerrahisi Vakfi</a></p></li>
                                        <li><p><a href="https://bursakbb.org/" target="_blank">Bursa Kulak Burun Bogaz ve Bas Boyun Cerrahisi Hekimleri Dernegi</a></p></li>
                                        <li><p><a href="https://kanalkbb.com/" target="_blank">KBB Forum</a></p></li>
                                    </ul>
                                </li>
                                <li class="li-item">
                                    <strong class="strong">Uluslararası KBB Toplulukları</strong>
                                    <ul class="under-list">
                                        <li><p><a href="https://www.entnet.org/" target="_blank">American Academy of Otolaryngology & Head and Neck Surgery</a></p></li>
                                        <li><p><a href="https://www.eaono.org/" target="_blank">European Academy of Otology & Neurotology</a></p></li>
                                        <li><p><a href="https://www.ifosworld.org/" target="_blank">IFOS (International Federation of Oto-Rhino-Laryngological Societies)</a></p></li>
                                        <li><p><a href="https://www.politzersociety.org/" target="_blank">Politzer Society</a></p></li>
                                        <li><p><a href="https://alahns.org/" target="_blank">American Laryngological Association</a></p></li>
                                        <li><p><a href="https://www.ifosworld.org/" target="_blank">IFOS</a></p></li>
                                    </ul>
                                </li>
                                <li class="li-item">
                                    <strong class="strong">Medikal Linkler</strong>
                                    <ul class="under-list">
                                        <li><p><a href="https://www.saglik.gov.tr/" target="_blank">T.C. SAĞLIK BAKANLIĞI</a></p></li>
                                        <li><p><a href="https://www.istanbulsaglik.gov.tr/" target="_blank">İSTANBUL SAĞLIK MÜD.</a></p></li>
                                        <li><p><a href="https://www.ttb.org.tr/" target="_blank">TTB</a></p></li>
                                        <li><p><a href="https://www.istabip.org.tr/" target="_blank">İSTANBUL TABİP ODASI</a></p></li>
                                        <li><p><a href="https://www.ato.org.tr/" target="_blank">ANKARA TABİP ODASI</a></p></li>
                                    </ul>
                                </li>
                                <li class="li-item">
                                    <strong class="strong">Yararlı linkler</strong>
                                    <ul class="under-list">
                                        <li><p><a href="https://www.tbmm.gov.tr/" target="_blank">TBMM</a></p></li>
                                        <li><p><a href="https://www.tubitak.gov.tr/" target="_blank">TÜBİTAK</a></p></li>
                                        <li><p><a href="https://www.yerelrehber.com/tr" target="_blank">TÜRK DİL KURUMU</a></p></li>
                                        <li><p><a href="https://www.nvi.gov.tr/" target="_blank">TC KİMLİK NO. SORGULAMA</a></p></li>
                                        <li><p><a href="https://www.ncbi.nlm.nih.gov/" target="_blank">PUBMED</a></p></li>
                                        <li><p><a href="https://www.resmigazete.gov.tr/" target="_blank">RESMİ GAZETE</a></p></li>
                                        <li><p><a href="https://www.yok.gov.tr/" target="_blank">YÜKSEK ÖĞRETİM KURULU</a></p></li>
                                        <li><p><a href="https://www.ceorlhns.org/" target="_blank">CONFEDERATION OF EUROPEAN ORL-HNS</a></p></li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-6">
                            <ol class="alternating-colors">
                                <li class="li-item">
                                    <strong class="strong">Dergiler</strong>
                                    <ul class="under-list">
                                        <li><p><a href="https://harcourthealth.com/" target="_blank">American Journal of Otolaryngology</a></p></li>
                                        <li><p><a href="https://journals.sagepub.com/home/AOR" target="_blank">Annals of Otology, Rhinology and Laryngology</a></p></li>
                                        <li><p><a href="https://jamanetwork.com/" target="_blank">Archives of Otolaryngology-Head and Neck Surgery</a></p></li>
                                        <li><p><a href="https://journals.sagepub.com/home/ear" target="_blank">Ear Nose Throat Journal</a></p></li>
                                        <li><p><a href="https://www.elsevier.com/" target="_blank">International Journal of Pediatric Otorhinolaryngology</a></p></li>
                                        <li><p><a href="https://www.jlo.co.uk/" target="_blank">Journal of Laryngology and Otology</a></p></li>
                                        <li><p><a href="https://voicefoundation.org/" target="_blank">Journal of Voice</a></p></li>
                                        <li><p><a href="https://www.thieme.com/en-us" target="_blank">Laryngo-Rhino-Otologie</a></p></li>
                                        <li><p><a href="https://onlinelibrary.wiley.com/journal/15314995?journalRedirectCheck=true" target="_blank">Laryngoscope</a></p></li>
                                        <li><p><a href="https://karger.com/journals/orl/orl_jh.htm" target="_blank">ORL</a></p></li>
                                        <li><p><a href="https://www.rhinologyjournal.com/" target="_blank">Rhinology</a></p></li>
                                        <li><p><a href="https://onlinelibrary.wiley.com/journal/15314995?journalRedirectCheck=true&product=j1573%2F&sessionid=30112145&user=60226534" target="_blank">Laryngoscope</a></p></li>
                                        <li><p><a href="https://journals.sagepub.com/home/AOR" target="_blank">Annals</a></p></li>
                                        <li><p><a href="https://journals.sagepub.com/home/ear" target="_blank">ENT - Ear, Nose, and Throat Journal</a></p></li>
                                        <li><p><a href="https://www.jlo.co.uk/" target="_blank">Journal of Otolaryngology</a></p></li>
                                        <li><p><a href="https://jamanetwork.com/archive_home.html" target="_blank">Archives of Otolaryngology - Head and Neck Surgery</a></p></li>
                                        <li><p><a href="https://www.lrpub.com/" target="_blank">Lippincott-Raven - Otolaryngology</a></p></li>
                                        <li><p><a href="https://www.cengage.com/maintenance/index.html" target="_blank">Singular Publishing Group, Inc. Online</a></p></li>
                                        <li><p><a href="https://pubmed.ncbi.nlm.nih.gov/" target="_blank">PubMed (National Library of Medicine)</a></p></li>
                                        <li><p><a href="https://www.healio.com/" target="_blank">Medical Matrix</a></p></li>
                                        <li><p><a href="https://www.copyright.com/" target="_blank">Infotrieve</a></p></li>
                                        <li><p><a href="https://www.medscape.com/" target="_blank">Medscape</a></p></li>
                                        <li><p><a href="https://www.elsevier.com/" target="_blank">Biomednet</a></p></li>
                                        <li><p><a href="https://publicsearch.people.virginia.edu/" target="_blank">WebMedline</a></p></li>
                                        <li><p><a href="https://www.tesco.com/groceries/en-GB/zone/paperchase" target="_blank">Paperchase</a></p></li>
                                        <li><p><a href="https://www.markmonitor.com/" target="_blank">Citation Index</a></p></li>
                                    </ul>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
