@extends('layouts.app')

@section('title', 'TNR後台管理首頁')

@section('css')

@endsection

@section('page-header')
    <h4 class="page-title" style="w">管理總覽</h4>
    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
        <ul class="quick-links ml-auto">
            <li><a href="#">設定</a></li>
        </ul>
    </div>
@endsection

@section('main')
<div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="p-4 border-bottom bg-light">
        <h4 class="card-title mb-0">Area Chart</h4>
      </div>
      <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        <div class="d-flex justify-content-between align-items-center pb-4">
          <h4 class="card-title mb-0">Site Traffic</h4>
          <div id="area-traffic-legend"><div class="chartjs-legend"><ul><li><span style="background-color:#5D62B4"></span>Marketing</li></ul></div></div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <h2 class="mb-0 font-weight-medium">3,245</h2>
            <p class="mb-5 text-muted">Users</p>
          </div>
          <div class="col-md-4">
            <h2 class="mb-0 font-weight-medium">12.54%</h2>
            <p class="mb-5 text-muted">Bounce Rate</p>
          </div>
        </div>
        <canvas id="areaChart" style="height: 330px; display: block; width: 660px;" width="660" height="330" class="chartjs-render-monitor"></canvas>
      </div>
    </div>
  </div>
@endsection

@section('js')
<script src="{{ asset('js/chart.js') }}"></script>

@endsection





























