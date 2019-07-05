@extends('clients.layouts.roberto')
@section('title')
    Shoes And Magic - Cuciin Aja Dulu di Kita
@endsection
@section('Content')

    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Room Review -->
                    <div class="room-review-area mb-100">
                        <h4>Status Sepatu | {{$order[0]->atas_nama}}</h4>
                        {{-- Jika user pegawai telah login--}}
                        @if(Auth::guest())

                        @endif

                        @if(Auth::user() || hasRole('Super Admin'))
                             @if($order[0]->status == 0)
                                
                                {{ Form::model($order, array('route' => array('updateto1', $order[0]->id_order), 'method' => 'PATCH')) }}
                                <input type="hidden" name="id_order" value="{{$order[0]->id_order}}">
                                {{ Form::submit($order[0]->statusnya->nama_status, array('class' => $order[0]->statusnya->kodewarna)) }}
                                {{ Form::close() }}
                                
                                @endif

                                @if($order[0]->status == 1)

                                {{ Form::model($order, array('route' => array('updateto2', $order[0]->id_order), 'method' => 'PATCH')) }}
                                <input type="hidden" name="id_order" value="{{$order[0]->id_order}}">
                                {{ Form::submit($order[0]->statusnya->nama_status, array('class' => $order[0]->statusnya->kodewarna)) }}
                                {{ Form::close() }}
                                
                                @endif
                                
                                @if($order[0]->status == 2)
                                
                                {{ Form::model($order, array('route' => array('updateto3', $order[0]->id_order), 'method' => 'PATCH')) }}
                                <input type="hidden" name="id_order" value="{{$order[0]->id_order}}">
                                {{ Form::submit($order[0]->statusnya->nama_status, array('class' => $order[0]->statusnya->kodewarna)) }}
                                {{ Form::close() }}
                                
                                @endif
                        @endif
                        <!-- Single Review Area -->
                        @if($order[0]->status == 0)
                        <div class="single-room-review-area d-flex align-items-center">
                            <div class="reviwer-thumbnail">
                                <img src="img/bg-img/53.jpg" alt="">
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                    <div class="reviwer-title">
                                        <span>{{$order[0]->created_at->format('d/m/Y - H:i')}}</span>
                                        <h6>Sepatu Diterima Pihak Shoes And Magic</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        @if($order[0]->status == 1)
                        <div class="single-room-review-area d-flex align-items-center">
                            <div class="reviwer-thumbnail">
                                <img src="img/bg-img/53.jpg" alt="">
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                    <div class="reviwer-title">
                                        <span>{{$order[0]->created_at->format('d/m/Y - H:i')}}</span>
                                        <h6>Sepatu Diterima Pihak Shoes And Magic</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-room-review-area d-flex align-items-center">
                            <div class="reviwer-thumbnail">
                                <img src="img/bg-img/53.jpg" alt="">
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                    <div class="reviwer-title">
                                        <h6>Sepatu Sedang Dicuci</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        @if($order[0]->status == 2)
                        <div class="single-room-review-area d-flex align-items-center">
                            <div class="reviwer-thumbnail">
                                <img src="img/bg-img/53.jpg" alt="">
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                    <div class="reviwer-title">
                                        <span>{{$order[0]->created_at->format('d/m/Y - H:i')}}</span>
                                        <h6>Sepatu Diterima Pihak Shoes And Magic</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-room-review-area d-flex align-items-center">
                            <div class="reviwer-thumbnail">
                                <img src="img/bg-img/53.jpg" alt="">
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                    <div class="reviwer-title">
                                        <h6>Sepatu Sedang Dicuci</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-room-review-area d-flex align-items-center">
                            <div class="reviwer-thumbnail">
                                <img src="img/bg-img/53.jpg" alt="">
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                    <div class="reviwer-title">
                                        <h6>Selesai Dicuci</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        
                        @if($order[0]->status == 3)
                        <div class="single-room-review-area d-flex align-items-center">
                            <div class="reviwer-thumbnail">
                                <img src="img/bg-img/53.jpg" alt="">
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                    <div class="reviwer-title">
                                        <span>{{$order[0]->created_at->format('d/m/Y - H:i')}}</span>
                                        <h6>Sepatu Diterima Pihak Shoes And Magic</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-room-review-area d-flex align-items-center">
                            <div class="reviwer-thumbnail">
                                <img src="img/bg-img/53.jpg" alt="">
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                    <div class="reviwer-title">
                                        <h6>Sepatu Sedang Dicuci</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-room-review-area d-flex align-items-center">
                            <div class="reviwer-thumbnail">
                                <img src="img/bg-img/53.jpg" alt="">
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                    <div class="reviwer-title">
                                        <h6>Selesai Dicuci</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-room-review-area d-flex align-items-center">
                            <div class="reviwer-thumbnail">
                                <img src="img/bg-img/53.jpg" alt="">
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                    <div class="reviwer-title">
                                        <h6>Sudah Diambil Pemilik</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->

@endsection