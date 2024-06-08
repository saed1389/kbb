@extends('frontend.layouts.app')
@section('title')
    {{ $news->title }} - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span><a href="{{ route('bilgi-merkezi') }}">Bilgi Merkezi</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span><a href="{{ route('haberler') }}">Tüm Haberler</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span>{{ $news->title }}</span>
                        </div>
                        <h3 class="tp-breadcrumb__title" style="font-size: 24px">{{ $news->title }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="postbox__area pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="postbox__wrapper">
                        <article class="postbox__item format-image mb-50 transition-3">
                            <div class="postbox__content">
                                <h3 class="postbox__title" style="font-size: 21px">{{ $news->title }}</h3>
                                <div class="postbox__meta">
                                    <span><a><i class="flaticon-user"></i>{{ $news->created_by == 1 ? 'Yönetici' : @$news->getAuthorName->titleName->title.' '.@$news->getAuthorName->first_name.' '.@$news->getAuthorName->last_name }}</a></span>
                                    <span><i class="flaticon-comment"></i>{{ $comments->count() }} Yorumlar</span>
                                </div>
                                <div class="postbox__text">
                                    <p>
                                        {!! $news->news_body !!}
                                    </p>
                                    @if($news->gallery != 0)
                                        @php
                                            $images = \App\Models\Image::where('category', $news->gallery)->get();
                                        @endphp
                                        <div class="tp-gallery-3__area pt-120 pb-120">
                                            <div class="container">
                                                <div class="row">
                                                    @foreach($images as $image)
                                                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.3s; animation-name: tpfadeUp;">
                                                            <div class="tp-gallery-3__item p-relative">
                                                                <img src="{{ asset($image->image) }}" alt="">
                                                                <div class="tp-gallery-3__icon">
                                                                    <a class="popup-image" href="{{ asset($image->image) }}">
                                                                        <svg id="body" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="49" height="51" viewBox="0 0 49 51">
                                                                            <g id="gallery">
                                                                                <g id="_02_hover" data-name="02 + hover">
                                                                                    <g id="go_icon" data-name="go icon">
                                                                                        <image id="right-arrow" width="49" height="51" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAzCAYAAAA+VOAXAAAD3klEQVRogdWa24tWZRTGf/PNOH5MY2VREXagojOohNpEh8nEylDRP6XoRugiIagbb7LTRaRmmUVpSVSEFRFFanlAAqOLqCghFZrRrxlnHB9Z9Wx4+XJqZtqnb8EHL/ju7frxrPWuZ+/ZXZKoMLqALIEmMOpUZgHjSVq9wBj/3PdX9FRJANwGXAFcBXzv5G4FhoGfgeuAi4DvnGvs/wX4HbgZeKdqiEhoK3A9cMKJxXrCic4BrgSOAUPAjYb7AbgGuASYC7xcZTmtBXZ4LZdWFuMuKdrWaWTXzK9Sid3AdqAF/ArcBPQB37rErgV+An4EbnBfRKnd5esz6DVVQpwEHgOOApcBlwJH/G+3AMf9i7LqNuBbbfcINXoaFSSfxlGvjyUAeH3c6ziVbgfeBO4GfgMOJHvHq4aYSgwAG4B7fHq9DbwE/OFrR+sMEfPgYeApYJHLL3poE7Ar2ddVZ4hlwDNW4AzwIfACcNA9dLH3NasedpPFoJt+AXDKR/HzwCHvvzy9rm4QFwDLgfVx/vv4fRd4DtiX7Evzrl1P3AE8boBo4vcMcLhtX+qdVBcl+oGlwBNu4rAXO4EXgT3n2T+WrHvqAhHH6JNWIhL8yE38zST707wbdYAIBdYBC32M7rACYT/OTnJNX7IerxIivNAKKxAAI8D7wEYD/Ftk5dRVtRJLgEcTgFDgWT87/Fdk5k9V9cSFLqH1ngNRQjs9B/ZO8R6txKK3iOeJkn9LJe3R33Fa0nZJd0qaNY08mpJ2SXpa0tVlAvRKekjS55LOSDopaZOkgRneb162LgugIWmVpINWYNQKLMrj/mVBDEr61ACnJL0qabGk2Z0A0S9pbaJAlNCWvBQoCyIU+DIpodfdxLkoUDREn6SVkr6SNCFpSNIrBsj9/ysKYoWk/W3H6OKiFC/ipg8kTZwdo6FATydAxABakzRxS9JreTdx0RD3epBF/ClpqxVodgLEHCuQ9cCQS2hJ0cnnCbFc0r6kid8wQHcnQESSD0r6LPFChR2jRUB02wsdsgIjkraV0cR5QkQTf5J4oS15eqGiIbImPmCAYUmbixxkRUCkXuh04oV6OwGiaSvxhZt4OJnElSU/XYhHyvRCRUDcL2l3WxNP95m4Moi+SbxQbRSYCkTqhUbcxANleKE8IPo9yOK1ytnEC830rUQlEOGF9lqBseS9UGle6P9AxB/ml3kST7iJN1uBRl0BUogYVquTSTxiN1qJF5opxH3JI2WrzAeavCAGz+OFajGJp/pr+LuJhX7b/IH/wLG/wLfiuUc0c78/M4jPdj4Gvu4kgIjsU6F5/tKl8wI4B64Oiv+C2BAeAAAAAElFTkSuQmCC"></image>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="postbox__thumb m-img p-relative">
                                        <div class="postbox__details-share-wrapper">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-6 col-md-6"></div>
                                                <div class="col-xl-7 col-lg-6 col-md-6">
                                                    <div class="postbox__details-share text-lg-end">
                                                        <span>Paylaş:</span>
                                                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <div class="postbox__comment mb-50">
                            <h3 class="postbox__comment-title" style="font-size: 28px">{{ $comments->count() }} Yorumlar</h3>
                            <ul>
                                @foreach($comments as $comment)
                                    @php
                                        $writer = $comment->writerName;
                                        $profileImage = @$writer->profile_image ? asset(@$writer->profile_image) : asset('front/assets/img/blog/author-1-1.png');
                                    @endphp
                                    <li>
                                        <div class="postbox__comment-box p-relative">
                                            <div class="postbox__comment-info d-flex align-items-center">
                                                <div class="postbox__comment-avater mr-40">
                                                    <img src="{{ $profileImage }}" alt="Profile Image" class="" style="width: 155px;">
                                                </div>
                                                <div class="postbox__comment-name p-relative">
                                                    <h5>{{ $comment->writer }}</h5>
                                                    <div class="postbox__comment-text">
                                                        <p>{{ $comment->comment }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="postbox__comment-form-box">
                            <h3 class="postbox__comment-form-title">Bir yorum yazın</h3>
                            <div class="ajax-response mb-4 text-success" role="alert"></div>
                            <div class="postbox__comment-form">
                                <form id="contact-form" action="{{ route('news.comment') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="news_id" value="{{ $news->id }}">
                                    <input type="hidden" name="user_id" value="{{ @Auth::user()->id }}">
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                                            <div class="postbox__comment-input">
                                                <input name="name" type="text" value="{{ Auth::user() ? @Auth::user()->titleName->title.' '.Auth::user()->first_name . ' '. Auth::user()->last_name : '' }}" placeholder="Adınızı giriniz" @if(Auth::user()) readonly @endif required >
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                                            <div class="postbox__comment-input">
                                                <input name="email" type="email" value="{{ Auth::user() ? Auth::user()->email : '' }}" placeholder="E-postanızı giriniz" @if(Auth::user()) readonly @endif required>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="postbox__comment-input">
                                                <textarea name="message" placeholder="Yorumunuzu yazın" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="postbox__comment-btn">
                                                <button type="submit" class="tp-btn">Gönder</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="sidebar__wrapper">
                        <div class="sidebar__widget sidebar__widget-theme-bg mb-30">
                            <div class="sidebar__widget-content">
                                <div class="sidebar__search">
                                    <form action="{{ route('news.search') }}" method="get">
                                        <div class="sidebar__search-input-2">
                                            <input type="text" name="ara" placeholder="Haberlerde ara">
                                            <button type="submit"><i class="far fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__widget mb-30">
                            <h3 class="sidebar__widget-title">Son Haberler</h3>
                            <div class="sidebar__widget-content">
                                <div class="sidebar__post">
                                    @foreach($lastNews as $item)
                                        <div class="rc__post mb-10 d-flex align-items-center">
                                            <div class="rc__post-content">
                                                <h3 class="rc__post-title" style="font-size: 14px">
                                                    <a href="{{ $item->news_href ? $item->news_href :route('haber', $item->slug) }}" @if($item->new_page == 1) target="_blank" @endif>{{ $item->title }}</a>
                                                </h3>
                                            </div>
                                        </div>
                                        <hr>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
