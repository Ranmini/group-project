<template>
<div class="card">
  <div class="card-header d-flex p-0">
    <h3 class="card-title p-3">
      <i class="fa fa-pie-chart mr-1"></i>
      Sales
    </h3>
    <ul class="nav nav-pills ml-auto p-2">
      <li class="nav-item">
        <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
      </li>
    </ul>
  </div><!-- /.card-header -->
  <div class="card-body">
    <div class="tab-content p-0">
      <!-- Morris chart - Sales -->
      <div class="chart tab-pane active" id="revenue-chart"
           style="position: relative; height: 300px;"></div>
      <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
    </div>
  </div><!-- /.card-body -->
</div>
</template>